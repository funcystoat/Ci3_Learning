<?php

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper(array('form_helper', 'url'));
        $this->load->library(array('form_validation', 'session'));
        $this->load->model('user_model');
    }

    public function form_helper_study() {
        //echo base_url();
        //echo "<br/>";
        //echo site_url(); // contains the index.php in the url

        /*
        site_url: Returns base_url + index_page + uri_string
        base_url: Returns base_url + uri_string

        http://[::1]/Ci3_Learning 

        [::1] => 127.0.0.1
        */
        $this->load->view('user/form');
    }

    public function form_submit_method() {
        $config_rules = array(
            array(
                'field' => 'txt_name',
                'label' => 'Name',
                'rules' => 'required|min_length[6]|trim'
            ),
            array(
                'field' => 'txt_email',
                'label' => 'Email',
                'rules' => 'required|min_length[6]|is_unique[table_users.email]'
            ),
            array(
                'field' => 'txt_phone',
                'label' => 'phone_no',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config_rules);
        //$this->form_validation->set_rules('txt_name', 'Name', 'required|min_length[6]|trim');
        //$this->form_validation->set_rules('txt_email', 'Email', 'required|min_length[6]|callback_does_email_exist');

        if (!$this->form_validation->run()) {
            $this->form_helper_study();
        } else {
            $data = $this->input->post();

            $data_array = array(
                'name' => $data['txt_name'],
                'email' => $data['txt_email'],
                'phone_no' => $data['txt_phone']
            );

            $res_val = $this->user_model->insert_into_users_table($data_array);
            if ($res_val) {
                $this->session->set_flashdata('success', 'User has been created successfully!');
                redirect('helpers/form');
            } else {
                $this->session->set_flashdata('error', 'Failed to create user...');
                redirect('helpers/form');
            }
        }
    }

    public function does_email_exist($value) {
        $valid_emails = array(
            'online@gmail.com',
            'onlinewebtutor@gmail.com',
            'funcy.stoat@f.s'
        );

        if (empty($value)) {
            $this->form_validation->set_message('does_email_exist', 'The {field} is needed.');
            return false;
        }


        if (!in_array($value, $valid_emails))
            return true;


        $this->form_validation->set_message(
            'does_email_exist',
            'The {field} is already taken. Try another email.'
        );

        return false;
    }

    public function list_all_users() {
        $list_users = $this->user_model->get_all_users();
        $data['all_users'] = $list_users;
        $this->load->view('user/list-users', $data);
    }
}
