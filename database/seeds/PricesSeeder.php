<?php

use Illuminate\Database\Seeder;

class PricesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('prices')->insert([
            [
                'name'=>'Light',
                'price'=>'100',
                'text'=>'',
                'alias'=>'light'
            ],
            [
                'name'=>'Standart',
                'price'=>'300',
                'text'=>'',
                'alias'=>'standart'
            ],
            [
                'name'=>'Hard',
                'price'=>'500',
                'text'=>'',
                'alias'=>'hard'
            ]
        ]);
    }
}
