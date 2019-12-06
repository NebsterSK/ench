<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBracerEnchants extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        DB::table('enchants')->insert([
            ['name' => 'Bracer - Healing Power'],
            ['name' => 'Bracer - Mana Regeneration'],
            ['name' => 'Bracer - Superior Spirit'],
            ['name' => 'Bracer - Deflection'],
            ['name' => 'Bracer - Strength'],
            ['name' => 'Bracer - Lesser Deflection'],
            ['name' => 'Bracer - Spirit'],
            ['name' => 'Bracer - Lesser Intellect'],
            ['name' => 'Bracer - Lesser Strength'],
            ['name' => 'Bracer - Lesser Stamina'],
            ['name' => 'Bracer - Lesser Spirit'],
            ['name' => 'Bracer - Minor Agility'],
            ['name' => 'Bracer - Minor Strength'],
            ['name' => 'Bracer - Stamina'],
            ['name' => 'Bracer - Minor Deflect'],
            ['name' => 'Bracer - Minor Health'],
            ['name' => 'Bracer - Minor Spirit'],
            ['name' => 'Bracer - Minor Stamina']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        DB::table('enchants')->whereBetween('id', [40, 57])->delete();
    }
}
