<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Portfolio;
use App\People;
use App\Price;
use DB;
use Mail;

class IndexController extends Controller
{
    //

    public function index( Request $request){

        if($request->isMethod('post')){

            $messages= [
                'required'=>"Заполните поле :attribute ",
                'email'=>"Введите Ваш :attribute адрес",

            ];

            $this->validate($request, [
                'name'=>'required|max:255',
                'email'=>'required|email',
                'text'=>'required'

            ], $messages);


            $data = $request->all();

            Mail::send('site.email',['data'=>$data], function ($m) use($data){

                $mail_admin= env('MAIL_FROM_ADDRESS','info@it-dev.com.ua');
                $m->from($data['email'],$data['name']);
                $m->to($mail_admin)->subject('Question');

                return redirect()->route('home')->with('status','Email was send');

            });




        }

        $pages = Page::all()->where('is_publ',1);
        $porfolios = Portfolio::all()->where('is_publ',1);
        $prices = Price::all();
        $peoples = People::all()->where('is_publ',1);

        $tags = DB::table('portfolios')->distinct()->pluck('filter','alias');

        $data = [
            'pages'=>$pages,
            'portfolios'=>$porfolios,
            'prices'=>$prices,
            'peoples'=>$peoples,
            'tags'=> $tags,
            'title'=>'it-development'
        ];




        return view('site.index', $data );
    }
}
