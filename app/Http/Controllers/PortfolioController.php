<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use Validator;

class PortfolioController extends Controller
{
    public function index(){

            if(view()->exists('admin.portfolio.portfolio')){

                $portfolios = Portfolio::all();

                $data = [
                    'title'=>'Портфолио',
                    'portfolios' => $portfolios
                ];

                return view('admin.portfolio.portfolio', $data);

                }
                abort(404);


    }


    public function add(Request $request){

        if ($request->isMethod('post')) {

            $input = $request->except('_token');

            $message = [
                'required' => 'Заполните поле :attribute ',
                'unique' => ' не уникален :attribute'
            ];

            $validator = Validator::make($input, [
                'name' => 'required|max:255',
                'alias' => 'required|unique:pages|max:255',
                'filter' => 'required|max:255',
                'img' => 'required',
                'text' => 'required'
            ], $message);

            if ($validator->fails()) {
                return redirect()->route('portfolioAdd')->withErrors($validator)->withInput();
            }
            if ($request->hasFile('img')) {
                $file = $request->file('img');
                $input['img'] = $file->getClientOriginalName();
                $file->move(public_path() . '/images', $input['img']);
            }

            $portfolio = new Portfolio();
            $portfolio->fill($input);
            if ($portfolio->save()) {
                return redirect()->route('admin')->with('status', 'Проект добавлен');
            }
        }


        if (view()->exists('admin.portfolio.portfolio_add')) {

            $data = [
                'title' => 'Новый проект'
            ];

            return view('admin.portfolio.portfolio_add', $data);
        }
        abort(404);
    }


    public function edit(Portfolio $portfolio, Request $request){

        if($request->isMethod('delete')){

            $portfolio->delete();

            return redirect()->route('admin')->with('status','Проект удален!');
        }

        if($request->isMethod('post')){

            $input = $request->except('_token');

            $message = [
                'required' => 'Заполните поле :attribute ',
                'unique' => ' не уникален :attribute'
            ];

            $validator = Validator::make($input, [

                'name' => 'required|max:255',
                'alias'=>'required|max:255|unique:pages,alias,'.$input['id'],
                'filter' => 'required|max:255',
                'text' => 'required'
            ], $message);

            if($validator->fails()){
                return redirect()
                    ->route('portfolioEdit',['portfolio'=>$input['id']])
                    ->withErrors($validator);
            }
            if($request->hasFile('img')){
                $file= $request->file('img');
                $input['img'] = $file->getClientOriginalName();
                $file->move(public_path().'/images', $input['img']);
            }
            else{
                $input['img'] =$input['old_img'];
            }
            unset($input['old_img']);

            $portfolio->fill($input);

            if($portfolio->update()){
                return redirect()->route('admin')->with('status','Проект обновлен!');
            }


        }




        $old = $portfolio->toArray();

        if (view()->exists('admin.portfolio.portfolio_edit')){

            $data = [
                'title'=>'Редактировать проект '.$old['name'],
                'data'=>$old
            ];

            return view('admin.portfolio.portfolio_edit', $data);
        }




    }
}
