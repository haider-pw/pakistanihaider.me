<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ResumeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resumes')->insert([
            'user_id' => 1,
            'available' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
