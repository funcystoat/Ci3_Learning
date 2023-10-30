<?php

class Mysession extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function add_session() {
        $this->session->set_userdata('name', 'Funcy Stoat');
        $this->session->set_userdata('email', 'fs.funcy@stoat.com');
    }

    public function get_session() {
        $all_session_values = $this->session->all_userdata();
        //$name = $this->session->userdata('name');
        //Can use keys directly, without function call and ''
        //$name = $this->session->name;

        //print_r($name); 

        if ($this->session->has_userdata('name')) {
            echo $this->session->name;
        } else
            echo 'Name value does not exist';

        echo nl2br("\n");
        //echo "<br>";

        if ($this->session->has_userdata('email')) {
            echo $this->session->email;
        } else
            echo 'Email value does not exist';
    }

    public function remove_session() {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('name');

        /*
        $this->session->set_userdata(array(
            'name' => 'Funcy Stoat',
            'email' => 'fs.funcy@stoat.com'
        ));
        */

        print_r($this->session->all_userdata());
    }
}
