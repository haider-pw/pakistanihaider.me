<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(ResumeTableSeeder::class);
         $this->call(SkillsGroupsTableSeeder::class);
         $this->call(SystemSkillsTableSeeder::class);
         $this->call(ResumesBlocksVisibilitySeeder::class);
         $this->call(SkillsTableSeeder::class);
         $this->call(ToolsTableSeeder::class);
    }
}
