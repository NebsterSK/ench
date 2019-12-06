<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddShieldEnchants extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        DB::table('enchants')->insert([
            ['name' => 'Shield - Superior Spirit'],
            ['name' => 'Shield - Greater Stamina'],
            ['name' => 'Shield - Frost Resistance'],
            ['name' => 'Shield - Greater Spirit'],
            ['name' => 'Shield - Stamina'],
            ['name' => 'Shield - Lesser Block'],
            ['name' => 'Shield - Spirit'],
            ['name' => 'Shield - Lesser Stamina'],
            ['name' => 'Shield - Lesser Spirit'],
            ['name' => 'Shield - Lesser Protection'],
            ['name' => 'Shield - Minor Stamina']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        DB::table('enchants')->whereBetween('id', [122, 132])->delete();
    }
}
