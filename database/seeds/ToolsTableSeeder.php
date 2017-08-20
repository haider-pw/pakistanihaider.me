<?php

use Illuminate\Database\Seeder;

class ToolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tools = [
            [
                'name' => 'php',
                'label' => 'PHP',
            ],
            [
                'name' => 'laravel',
                'label' => 'Laravel'
            ],
            [
                'name' => 'c_sharp',
                'label' => 'C#'
            ],
            [
                'name' => 'adobe_photo_shop',
                'label' => 'Adobe Photoshop'
            ],
            [
                'name' => 'adobe_illustrator',
                'label' => 'Adobe Illustrator'
            ],
            [
                'name' => 'datatables',
                'label' => 'Datatables'
            ],
            [
                'name' => 'noty',
                'label' => 'Noty'
            ],
            [
                'name' => 'visual_basic',
                'label' => 'Visual Basic'
            ],
            [
                'name' => 'html',
                'label' => 'HTML'
            ],
            [
                'name' => 'css',
                'label' => 'CSS'
            ],
            [
                'name' => 'bootstrap',
                'label' => 'Bootstrap'
            ],
            [
                'name' => 'javascript',
                'label' => 'Javascript'
            ],
            [
                'name' => 'jquery',
                'label' => 'jQuery'
            ],
            [
                'name' => 'angular',
                'label' => 'Angular'
            ],
            [
                'name' => 'node_js',
                'label' => 'Node.js'
            ],
            [
                'name' => 'select2',
                'label' => 'Select2'
            ]
        ];

        //First Truncate the Old Records.
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('tools')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        //Finally Insert the Records
        DB::table('tools')->insert($tools);
    }
}
