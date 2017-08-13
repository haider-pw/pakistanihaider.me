<?php

use Illuminate\Database\Seeder;

class SkillsGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentDateTime = \Carbon\Carbon::now();
        $skillsGroups = [
            [
                'name'=>'technical_skills',
                'label' => 'Technical Skills',
                'position' => 1,
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime
            ],
            [
                'name'=>'soft_skills',
                'label' => 'Soft Skills',
                'position' => 2,
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime
            ]
        ];


        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('skills_groups')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        //Finally Insert the Records
        DB::table('skills_groups')->insert($skillsGroups);
    }
}
