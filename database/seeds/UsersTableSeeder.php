<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            'resume' => 1,
            'password' => bcrypt('secret'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
