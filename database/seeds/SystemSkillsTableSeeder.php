<?php

use Illuminate\Database\Seeder;

class SystemSkillsTableSeeder extends Seeder
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
                'name' => 'php_development',
                'label' => 'PHP Development',
                'skill_group_id' => 1,
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'rdbms',
                'label'=> 'RDBMS',
                'skill_group_id' => 1,
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'rdbms',
                'label'=> 'OOP',
                'skill_group_id' => 1,
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'rdbms',
                'label'=> 'MVC',
                'skill_group_id' => 1,
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'rdbms',
                'label'=> 'Javascript',
                'skill_group_id' => 1,
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'rdbms',
                'label'=> 'Version Control (git/svn)',
                'skill_group_id' => 1,
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'rdbms',
                'label'=> 'Communication',
                'skill_group_id' => 2,
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'rdbms',
                'label'=> 'Language',
                'skill_group_id' => 2,
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'rdbms',
                'label'=> 'General Knowledge',
                'skill_group_id' => 2,
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ]
        ];

        //First Truncate the Old Records.
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('sys_skills')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        //Finally Insert the Records
        DB::table('sys_skills')->insert($skills);
    }
}
