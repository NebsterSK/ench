<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSecondRoundOfEnchants extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        DB::table('enchants')->insert([
            ['name' => 'Weapon - Crusader'],
            ['name' => 'Bracer - Superior Stamina'],
            ['name' => '2H Weapon - Lesser Intellect'],
            ['name' => 'Boots - Agility'],
            ['name' => 'Boots - Greater Agility'],
            ['name' => 'Boots - Greater Stamina'],
            ['name' => 'Bracer - Greater Spirit'],
            ['name' => 'Cloak - Greater Resistance'],
            ['name' => 'Bracer - Superior Strength'],
            ['name' => 'Bracer - Intellect'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        DB::table('enchants')->whereBetween('id', [11, 20])->delete();
    }
}
