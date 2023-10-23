<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_model extends CI_Model {

    private $owt;
    /*
    If we do not have $autoload['libraries'] = array('database'); 
    in the autopload.php file, then we can use this to 
    load only the database(), giving us access to db.
    */
    public function __construct(){
        parent::__construct();
        $this->owt = $this->load->database('owt', TRUE);
        $this->load->database();
    }
    
 
    function run_my_query(){
        return 'This is a message from the model file.';
    }
    
    function insert_table_data($data){
        echo "Mopo.";
        //Can use $this->db->query($query); 
        //to execute a raw query- also known as REGULAR query        
        
        //This is an ACTIVE RECORD query
        echo $this->db->insert('users', $data);
        //echo $this->db->insert('books', $data); //db is always the default database connection.
        //Safer from SQL injection
    }
}