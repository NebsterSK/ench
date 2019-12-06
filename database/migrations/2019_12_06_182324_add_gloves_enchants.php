<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGlovesEnchants extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        DB::table('enchants')->insert([
            ['name' => 'Gloves - Fire Power'],
            ['name' => 'Gloves - Frost Power'],
            ['name' => 'Gloves - Healing Power'],
            ['name' => 'Gloves - Shadow Power'],
            ['name' => 'Gloves - Superior Agility'],
            ['name' => 'Gloves - Threat'],
            ['name' => 'Gloves - Minor Haste'],
            ['name' => 'Gloves - Strength'],
            ['name' => 'Gloves - Agility'],
            ['name' => 'Gloves - Fishing'],
            ['name' => 'Gloves - Herbalism'],
            ['name' => 'Gloves - Mining']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        DB::table('enchants')->whereBetween('id', [110, 121])->delete();
    }
}
