<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Syed Haider Hassan',
            'username' => 'haideritx',
            'email' => 'haideritx@gmail.com',
            'logo' => 'user1-128x128.jpg',
            'password' => bcrypt('secret'),
        ]);
    }
}
