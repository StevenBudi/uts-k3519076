<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Product extends Migration
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
            'cuda_cores' =>[
                'type' => 'FLOAT'
            ],
            'boost_clock' =>[
                'type' => 'FLOAT'
            ],
            'base_clock' =>[
                'type' => 'FLOAT'
            ],
            'memory_type' =>[
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'memory_size' =>[
                'type' => 'INT'
            ],
            'max_temp' =>[
                'type' => 'INT'
            ],
            'gpu_power' =>[
                'type' => 'INT'
            ],
            'required_power' =>[
                'type' => 'INT'
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
