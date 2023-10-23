<?php

class Action_model extends CI_Model {

    private $owt;

    public function __construct() {
        parent::__construct();
        $this->owt = $this->load->database('owt', TRUE);
        $this->load->database();
        // ^ don't need this if we set
        // autoload['libraries'] = array('database');
    }

    public function select_all_data() {
        //select all data from table
        //$this->db->select("*");
        //$query = $this->db->get("users");
        //select * from users; has been generated.

        $this->owt->select("name,email");
        $this->owt->from("books");
        //$this->owt->where(array(
        //    "email" => "fs.funcy@stoat.com"
        //));
        $query = $this->owt->get("");
        $result = $query->result();

        return $result;
    }

    public function update_table_data() {
        $data = array(
            'name' => 'Nietzsche',
            'email' => 'pain.pointless@nihil.com'
        );

        $this->owt->where('id', '2');
        $this->owt->update('books', $data);

        return true;
    }

    public function get_all_users_data(){
        $this->db->select('*');
        $this->db->from('users'); // table_users
        //$this->db->where('id',1);
        $query = $this->db->get(); // select * from table_users.

        //$result = $query->result_array();
        $result = $query->result();

        return $result;
    }

    public function delete_specific_user(){
        $this->db->where('id',2);
        return $this->db->delete('users');

        /*
        Alternative Way:
        return $this->db->delete('users', array(
            'id' => 2)
        );
        */
    }

    public function get_where_condition_query(){
        
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('phone_no >=', 2222222222);
        
        $query = $this->db->get();
        $result = $query->result();
        
        return $result;
    }

    public function get_and_condition(){
         
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array(
            'id' => '4',
            'email' => 'gb.gloomy@badger.com'
        )); 
        // implicitly uses AND on the multiple conditions
        // for the WHERE clause
        
        $query = $this->db->get();
        $result = $query->result();
        
        return $result;
    }

    public function get_where_in() {
        $this->db->select('*');
        $this->db->from('users');
        
        /*
        $this->db->where_in('phone_no', array(
            1115555342, 6665551234
        ));
        */
        
        $this->db->like('email', 's', 'both');

        return $this->db->get()->result();
    }

    public function get_user_messages() {
    
        //join users with messages
    }
}