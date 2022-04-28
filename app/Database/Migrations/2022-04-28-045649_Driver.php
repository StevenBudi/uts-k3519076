<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Driver extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' =>[
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama' =>[
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'product_type' =>[
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'product_series ' =>[
                'type' => 'ENUM'
            ],
            'os' =>[
                'type' => 'ENUM'
            ],
            'language ' =>[
                'type' => 'ENUM'
            ],
            'download_type' =>[
                'type' => 'ENUM'
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addPrimaryKey('id', true);
        $this->forge->createTable('products');
    }

    public function down()
    {
        //
    }
}
