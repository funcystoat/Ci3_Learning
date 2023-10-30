<?php
class Myuri extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library("user_agent"); //$this->agent->methods...
        $this->load->library("myfunctions");
    }

    public function index() {
        $agent = $this->agent;

        if ($agent->is_browser()) {
            $browser = $agent->browser();
            $version = $agent->version();
            echo "<h3>Browser: " . $browser . ", Version: " . $version . "</h3>";
        } elseif ($agent->is_mobile()) {
            $mobile = $agent->mobile();
            $version = $agent->version();
            echo "<h3>Browser: " . $mobile . ", Version: " . $version . "</h3>";
        }

        $platform = $agent->platform();
        echo "<br>" . $platform . "</br>";
    }

    public function my_segments() {
        echo $this->uri->segment(3, "No Segment exists");
    }

    function run() {
        echo $this->myfunctions->remove_space('THE KINGDOM OF ALABASTA LIVES ON!');
    }
}
