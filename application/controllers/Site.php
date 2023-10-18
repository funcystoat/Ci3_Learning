<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    public function __construct(){
        parent::__construct();
        //$this->load->model('site_model');
    }

	public function index()
	{
        $message = $this->site_model->run_my_query();

        $info_array = array(
            'name' => 'Ermine Wiesaeu',
            'author' => 'Funcy Stoat',
            'email' => 'fs.funcy@stoat.com',
            'message' => $message
        );


        //$this->load->view('include/header');
		//$this->load->view('site/site_index');
        //$this->load->view('include/footer', $info_array);

        $this->load->view('home_page', $info_array);
	}

    public function pass_var()
    {   /*
        $info_array = array(
            'organization_name' => 'Stoat\'s LLC',
            'author_name' => 'Funcy Stoat',
            'email' => 'fs.funcy@stoat.com',
        );
        */
        $info_array['organization_name'] = 'Stoat\'s LLC';
        $info_array['author_name'] = 'Funcy Stoat';
        $info_array['email'] = 'fs.funcy@stoat.com';


        $this->load->view('site/pass_variable', $info_array);
    }

    public function about()
	{
		$this->load->view('site/site_about');
	}

    public function contact_info()
    {
        echo "<h1>This is the Contact Us page.</h1>";
    }

    public function service($id = "", $name = "")
    {
        echo "<h1>This is our service page.</h1><p>ID: ".$id." with Service: ".$name."</p>";
    }

    // insert data into db table
    function insert_data_into_table() {

        /*
        CREATE TABLE table_users (
            id INT NOT NULL AUTO_INCREMENT,
            name VARCHAR(90) NOT NULL,
            email VARCHAR(100) NOT NULL,
            phone_no VARCHAR(15) NOT NULL,
            PRIMARY KEY (id));
        */

        $data = array(
            'name' => 'Funcy Stoat',
            'email' => 'fs.funcy@stoat.com',
            'phone_no' => '6665551234'
        );

        $this->site_model->insert_table_data($data);
    }
}