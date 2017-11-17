<?php

use Illuminate\Database\Seeder;

class PortfoliosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('portfolios')->insert([
            [
                'name'=>'Fertilizer formula',
                'text'=>'Сайт по продаже органических удобрений. ',
                'img'=>'fert.png',
                'filter'=>'category-1',
                'alias'=>'fert'
            ],
            [
                'name'=>'ApexStroy',
                'text'=>'Сайт строительной компании "АпексСтрой". ',
                'img'=>'Apex.png',
                'filter'=>'category-2',
                'alias'=>'apex'
            ],
            [
                'name'=>'Ukrhim',
                'text'=>'Интернет магазин по продаже химической продукции в Украине.',
                'img'=>'ukrhim',
                'filter'=>'category-4',
                'alias'=>'ukrhim'
            ],
            [
                'name'=>'',
                'text'=>'',
                'img'=>'',
                'filter'=>'',
                'alias'=>''
            ],
            [
                'name'=>'',
                'text'=>'',
                'img'=>'',
                'filter'=>'',
                'alias'=>''
            ],
            [
                'name'=>'',
                'text'=>'',
                'img'=>'',
                'filter'=>'',
                'alias'=>''
            ],
            [
                'name'=>'',
                'text'=>'',
                'img'=>'',
                'filter'=>'',
                'alias'=>''
            ],
            [
                'name'=>'',
                'text'=>'',
                'img'=>'',
                'filter'=>'',
                'alias'=>''
            ],
            [
                'name'=>'',
                'text'=>'',
                'img'=>'',
                'filter'=>'',
                'alias'=>''
            ]
        ]);
    }
}
