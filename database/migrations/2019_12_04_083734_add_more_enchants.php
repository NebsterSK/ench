<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreEnchants extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        DB::table('enchants')->insert([
            ['name' => 'Bracer - Greater Strength'],
            ['name' => 'Chest - Major Mana'],
            ['name' => 'Cloak - Lesser Agility'],
            ['name' => 'Cloak - Lesser Shadow Resistance'],
            ['name' => 'Cloak - Superior Defense'],
            ['name' => 'Gloves - Advanced Herbalism'],
            ['name' => 'Gloves - Advanced Mining'],
            ['name' => 'Gloves - Skinning'],
            ['name' => 'Weapon - Greater Striking'],
            ['name' => 'Cloak - Fire Resistance'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        DB::table('enchants')->whereBetween('id', [21, 30])->delete();
    }
}
