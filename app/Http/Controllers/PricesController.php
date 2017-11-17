<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Price;
use Validator;

class PricesController extends Controller
{
    //
    public function index(){

        if(view()->exists('admin.prices.prices')){

            $prices = Price::all();

            $data=[
                'title'=>'Цены',
                'prices'=>$prices

            ];

            return view('admin.prices.prices',$data);
        }
    }


    public function edit(Price $price, Request $request){

        if ($request->isMethod('post')){

            $input = $request->except('_token');

            $message =[
                'required'=>'Заполните поле :attribute',
                'numeric'=>'Поле :attribute должно быть цифрой'
            ];

            $validator = Validator::make($input,[
                'name'=>'required|max:255',
                'text'=>'required',
                'price'=>'required|numeric'

            ],$message);

            if($validator->fails()){
                return redirect()
                    ->route('priceEdit',['prices'=>$input['id']])
                    ->withErrors($validator);
            }

            $price->fill($input);

            if($price->update()){
                return redirect()->route('admin')->with('status','Цена обновлена!');
            }

        }

        $old = $price->toArray();
        if (view()->exists('admin.pages.pages_edit')){

            $data = [
                'title'=>'Редактировать страницу'.$old['name'],
                'data'=>$old
            ];

            return view('admin.prices.price_edit', $data);
        }





    }
}
