<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
	public function index()
	{
		$this->load->view('site/site_index');
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
}