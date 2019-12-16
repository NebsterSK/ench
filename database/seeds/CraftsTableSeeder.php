<?php

use Illuminate\Database\Seeder;
use App\Craft;

class CraftsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        factory(Craft::class, 100)->states('matsRandom', 'priceRandom', 'buyer')->create();
    }
}
