<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DropWalletTable extends Migration
{
    public function up()
    {
        $this->forge->dropTable('wallet');
    }

    public function down()
    {
        //
    }
}
