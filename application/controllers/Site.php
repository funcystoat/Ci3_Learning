<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('site_model');
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

        CREATE TABLE table_books (
            id INT NOT NULL AUTO_INCREMENT,
            name VARCHAR(90),
            email VARCHAR(100),
            amount VARCHAR(50),
            PRIMARY KEY (id));
            
        */

        $users_data = array(
            'name' => 'Funcy Stoat',
            'email' => 'fs.funcy@stoat.com',
            'phone_no' => '6665551234'
        );

        $users_data_two = array(
            'name' => 'Reactive Hare',
            'email' => 'rh.reactive@hare.com',
            'phone_no' => '3335550019'
        );

        $users_data_three = array(
            'name' => 'Gloomy Badger',
            'email' => 'gb.gloomy@badger.com',
            'phone_no' => '1115555342'
        );

        $users_data_four = array(
            'name' => 'Morose Mallard',
            'email' => 'mm.morose@malard.com',
            'phone_no' => '9995557767'
        );

        $books_data = array(
            'name' => 'Learn CodeIgniter',
            'email' => 'ci@mail.com',
            'amount' => '120'
        );

        $books_data_two = array(
            'name' => 'Cormac McCarthy',
            'email' => 'cm@mail.com',
            'amount' => '600'
        );

        $this->site_model->insert_table_data($users_data_two);
        $this->site_model->insert_table_data($users_data_three);
        $this->site_model->insert_table_data($users_data_four);
    }
}