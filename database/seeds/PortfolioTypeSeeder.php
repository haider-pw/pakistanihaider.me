<?php

use Illuminate\Database\Seeder;

class PortfolioTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $portfolioTypes = [
            [
                'name' => 'branding',
                'label'=> 'BRANDING'
            ],
            [
                'name' => 'design',
                'label'=> 'DESIGN'
            ],
            [
                'name' => 'photo',
                'label'=> 'PHOTO'
            ],
            [
                'name' => 'web',
                'label'=> 'WEB'
            ],
            [
                'name' => 'mobile',
                'label'=> 'MOBILE'
            ]
        ];

        //First Truncate the Old Records.
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('portfolio_type')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        //Finally Insert the Records
        DB::table('portfolio_type')->insert($portfolioTypes);
    }
}
