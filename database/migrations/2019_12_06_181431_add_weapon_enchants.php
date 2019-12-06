<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWeaponEnchants extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        DB::table('enchants')->insert([
            ['name' => 'Weapon - Healing Power'],
            ['name' => 'Weapon - Lifestealing'],
            ['name' => 'Weapon - Mighty Intellect'],
            ['name' => 'Weapon - Mighty Spirit'],
            ['name' => 'Weapon - Spell Power'],
            ['name' => 'Weapon - Superior Striking'],
            ['name' => 'Weapon - Unholy Weapon'],
            ['name' => 'Weapon - Agility'],
            ['name' => 'Weapon - Strength'],
            ['name' => 'Weapon - Icy Chill'],
            ['name' => 'Weapon - Demonslaying'],
            ['name' => 'Weapon - Striking'],
            ['name' => 'Weapon - Winter\'s Might'],
            ['name' => 'Weapon - Lesser Beastslayer'],
            ['name' => 'Weapon - Lesser Elemental Slayer'],
            ['name' => 'Weapon - Lesser Striking'],
            ['name' => 'Weapon - Minor Beastslayer'],
            ['name' => 'Weapon - Minor Striking']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        DB::table('enchants')->whereBetween('id', [92, 109])->delete();
    }
}
