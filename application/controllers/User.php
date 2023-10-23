<?php

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array(
            'form_helper',
            'url'
        ));

        $this->load->library('form_validation');
    }

    public function form_helper_study()
    {
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

    public function form_submit_method()
    {
        $config_rules = array(
            array(
                'field' => 'txt_name',
                'label' => 'Name',
                'rules' => 'required|min_length[6]|trim'
            ),
            array(
                'field' => 'txt_email',
                'label' => 'Email',
                'rules' => 'required|min_length[6]|callback_does_email_exist'
            )
        );

        $this->form_validation->set_rules($config_rules);
        //$this->form_validation->set_rules('txt_name', 'Name', 'required|min_length[6]|trim');
        //$this->form_validation->set_rules('txt_email', 'Email', 'required|min_length[6]|callback_does_email_exist');

        if (!$this->form_validation->run()) {
            //error

            $this->form_helper_study();
        } else {
            //submitted 
            // we are going to take data from our form
            $data = $this->input->post();
            echo '<h4>Form Data</h4>';
            echo $data['txt_name'] . ", " . $data['txt_email'];
        }
    }

    public function does_email_exist($value)
    {
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
}
