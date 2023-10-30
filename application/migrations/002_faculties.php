<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_faculties extends CI_Migration {

    public function up() {
        //Table = faculties
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5, //number of digits
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'faculty_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'faculty_email' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'faculty_address' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('faculties');
    }

    public function down() {
        $this->dbforge->drop_table('faculties ');
    }
}
