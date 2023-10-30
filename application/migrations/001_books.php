<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_books extends CI_Migration {

    public function up() {
        //table = books
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5, //number of digits
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'book_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'book_email' => array(
                'type' => 'VARCHAR',
                'constraint' => '50'
            ),
            'book_price' => array(
                'type' => 'INT',
                'constraint' => 5,
                'default' => 0
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('books');
    }

    public function down() {
        $this->dbforge->drop_table('books');
    }
}
