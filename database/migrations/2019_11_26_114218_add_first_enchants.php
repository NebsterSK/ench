<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFirstEnchants extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        DB::table('enchants')->insert([
            ['name' => 'Chest - Major Health'],
            ['name' => 'Bracer - Greater Stamina'],
            ['name' => 'Gloves - Riding Skill'],
            ['name' => 'Boots - Minor Speed'],
            ['name' => 'Chest - Stats'],
            ['name' => 'Gloves - Greater Agility'],
            ['name' => 'Weapon - Fiery Weapon'],
            ['name' => 'Cloak - Resistance'],
            ['name' => 'Bracer - Greater Intellect'],
            ['name' => 'Gloves - Greater Strength'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        DB::table('enchants')->whereBetween('id', [1, 10])->delete();
    }
}
