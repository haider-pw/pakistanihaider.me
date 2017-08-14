<?php

use Illuminate\Database\Seeder;

class ResumesBlocksVisibilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resumesBlocks = [

            [
                'resume_id'=> 1,
                'key'=> 'skills_boxes',
                'value' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'resume_id'=> 1,
                'key'=> 'what_i_do',
                'value' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'resume_id'=> 1,
                'key'=> 'portfolio',
                'value' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'resume_id'=> 1,
                'key'=> 'interests',
                'value' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'resume_id'=> 1,
                'key'=> 'experience',
                'value' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'resume_id'=> 1,
                'key'=> 'education',
                'value' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'resume_id'=> 1,
                'key'=> 'blog',
                'value' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'resume_id'=> 1,
                'key'=> 'testimonials',
                'value' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'resume_id'=> 1,
                'key'=> 'client_images',
                'value' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'resume_id'=> 1,
                'key'=> 'pricing',
                'value' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'resume_id'=> 1,
                'key'=> 'contact',
                'value' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

        ];

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('resumes_blocks_visibility')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        //Finally Insert the Records
        DB::table('resumes_blocks_visibility')->insert($resumesBlocks);
    }
}
