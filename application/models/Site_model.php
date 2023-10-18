<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_model extends CI_Model {

    /*
    If we do not have $autoload['libraries'] = array('database'); 
    in the autopload.php file, then we can use this to 
    load only the database(), giving us access to db.

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    */

    function run_my_query(){

        return 'This is a message from the model file.';
    }
    
    function insert_table_data($data){
        echo "Mopo.";
        //Can also use $this->db->query($query); to execute a raw query        
        //echo $this->db->insert('table_users', $data);
    }
}