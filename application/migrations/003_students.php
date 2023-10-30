<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_students extends CI_Migration {

    public function up() {
        //table = students
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5, //number of digits
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'address' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('students');
    }

    public function down() {
        $this->dbforge->drop_table('students');
    }
}
