<?php

use Illuminate\Database\Seeder;

class PeoplesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('peoples')->insert([
                'name'=>'Alex',
                'lastname'=>'Filimonov',
                'alias'=> 'Filimonov',
                'position'=>'PHP developer',
                'skills'=>'PHP, JS, JQuery, AJAX, JSON, CSS3, CSS, HTML5, HTML.',
                'img'=>'fil.jpg'
        ]);
    }
}
