<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentDateTime = \Carbon\Carbon::now();
        $skills = [
            [
                'skill_id' => '1',
                'user_id' => '1',
                'percentage' => '94',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'skill_id' => '2',
                'user_id' => '1',
                'percentage' => '90',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'skill_id' => '3',
                'user_id' => '1',
                'percentage' => '94',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'skill_id' => '4',
                'user_id' => '1',
                'percentage' => '94',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'skill_id' => '5',
                'user_id' => '1',
                'percentage' => '70',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'skill_id' => '6',
                'user_id' => '1',
                'percentage' => '90',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'skill_id' => '7',
                'user_id' => '1',
                'percentage' => '90',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'skill_id' => '8',
                'user_id' => '1',
                'percentage' => '90',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'skill_id' => '9',
                'user_id' => '1',
                'percentage' => '70',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ]
        ];

        //First Truncate the Old Records.
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('skills')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        //Finally Insert the Records
        DB::table('skills')->insert($skills);
    }
}
