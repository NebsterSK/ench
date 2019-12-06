<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddChestEnchants extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        DB::table('enchants')->insert([
            ['name' => 'Chest - Greater Stats'],
            ['name' => 'Chest - Superior Mana'],
            ['name' => 'Chest - Superior Health'],
            ['name' => 'Chest - Lesser Stats'],
            ['name' => 'Chest - Greater Mana'],
            ['name' => 'Chest - Greater Health'],
            ['name' => 'Chest - Minor Stats'],
            ['name' => 'Chest - Mana'],
            ['name' => 'Chest - Lesser Absorption'],
            ['name' => 'Chest - Health'],
            ['name' => 'Chest - Lesser Mana'],
            ['name' => 'Chest - Lesser Health'],
            ['name' => 'Chest - Minor Absorption'],
            ['name' => 'Chest - Minor Mana'],
            ['name' => 'Chest - Minor Health']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        DB::table('enchants')->whereBetween('id', [65, 79])->delete();
    }
}
