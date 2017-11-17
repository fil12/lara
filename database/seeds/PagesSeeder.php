<?php


use Illuminate\Database\Seeder;
use \App\Page;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Page::create([
                'name'=>'Портфолио',
                'alias'=> 'portfolio',
                'text'=>'Our collection of modern hipster photography. See also our portfolio on Behance.',
                'img'=>''
//
        ]);
        Page::create([
            'name'=>'Цены',
                'alias'=> 'prices',
                'text'=>'',
                'img'=>''
//
        ]);
        Page::create([
            'name'=>'О нас',
                'alias'=> 'about',
                'text'=>'We are regarded as an industry expert in stunning website solutions, focused on delivering unsurpassed designs.',
                'img'=>''
//
        ]);
        Page::create([
            'name'=>'контакты',
                'alias'=> 'contacts',
                'text'=>'et in touch via contact form or email us directly. We will get back to you as soon as possible.',
                'img'=>''
//
        ]);
        Page::create([
            'name'=>'Блог',
                'alias'=> 'blog',
                'text'=>'',
                'img'=>''
//
        ]);
    }
}
