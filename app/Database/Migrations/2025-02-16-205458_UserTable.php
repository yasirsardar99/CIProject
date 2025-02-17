<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => true,
                'unsigned' => true
            ],
            'name'=>[
                'type' =>'VARCHAR',
                'constraint' => 100,
            ],

            'email'=>[
                'type' =>'VARCHAR',
                'constraint' =>'100',
                'unique' => true,
            ],
            'password'=>[
                'type' =>'VARCHAR',
                'constraint' =>'100',
            ],
            'created_at'=>[
                'type' =>'DATETIME',
                'null' =>true,
            ],
            'updated_at'=>[
                'type' =>'DATETIME',
                'null' =>true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
