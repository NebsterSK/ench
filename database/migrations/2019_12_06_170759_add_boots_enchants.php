<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBootsEnchants extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        DB::table('enchants')->insert([
            ['name' => 'Boots - Spirit'],
            ['name' => 'Boots - Stamina'],
            ['name' => 'Boots - Lesser Spirit'],
            ['name' => 'Boots - Lesser Stamina'],
            ['name' => 'Boots - Lesser Agility'],
            ['name' => 'Boots - Minor Agility'],
            ['name' => 'Boots - Minor Stamina']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        DB::table('enchants')->whereBetween('id', [58, 64])->delete();
    }
}
