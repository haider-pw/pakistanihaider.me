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
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'rdbms',
                'label'=> 'RDBMS',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'rdbms',
                'label'=> 'OOP',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'rdbms',
                'label'=> 'MVC',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'rdbms',
                'label'=> 'Javascript',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'rdbms',
                'label'=> 'Version Control (git/svn)',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'rdbms',
                'label'=> 'Communication',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'rdbms',
                'label'=> 'Language',
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime,
            ],
            [
                'name' => 'rdbms',
                'label'=> 'General Knowledge',
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
