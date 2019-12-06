<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCloakEnchants extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        DB::table('enchants')->insert([
            ['name' => 'Cloak - Dodge'],
            ['name' => 'Cloak - Greater Fire Resistance'],
            ['name' => 'Cloak - Greater Nature Resistance'],
            ['name' => 'Cloak - Stealth'],
            ['name' => 'Cloak - Subtlety'],
            ['name' => 'Cloak - Greater Defense'],
            ['name' => 'Cloak - Defense'],
            ['name' => 'Cloak - Lesser Fire Resistance'],
            ['name' => 'Cloak - Lesser Protection'],
            ['name' => 'Cloak - Minor Agility'],
            ['name' => 'Cloak - Minor Protection'],
            ['name' => 'Cloak - Minor Resistance']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        DB::table('enchants')->whereBetween('id', [80, 91])->delete();
    }
}
