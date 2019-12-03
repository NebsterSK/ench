<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert([
            'name' => 'Lukas',
            'email' => 'lukasneuschl@gmail.com',
            'password' => bcrypt('password'),
        ]);

//        factory(User::class, 9)->create();
    }
}
