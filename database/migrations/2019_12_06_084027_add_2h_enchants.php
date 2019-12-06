<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Add2hEnchants extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        DB::table('enchants')->insert([
            ['name' => '2H Weapon - Major Intellect'],
            ['name' => '2H Weapon - Major Spirit'],
            ['name' => '2H Weapon - Superior Impact'],
            ['name' => '2H Weapon - Agility'],
            ['name' => '2H Weapon - Greater Impact'],
            ['name' => '2H Weapon - Impact'],
            ['name' => '2H Weapon - Lesser Impact'],
            ['name' => '2H Weapon - Lesser Spirit'],
            ['name' => '2H Weapon - Minor Impact']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        DB::table('enchants')->whereBetween('id', [31, 39])->delete();
    }
}
