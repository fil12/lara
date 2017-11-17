<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;
use Validator;
class PeopleController extends Controller
{
    //


    public function index(){

        if(view()->exists('admin.peoples.peoples')){
            $peoples = People::all();

            $data = [
                'title'=>'Команда',
                'peoples' => $peoples
            ];

            return view('admin.peoples.peoples', $data);

        }
        abort(404);
    }


    public function add(Request $request)
    {

        if ($request->isMethod('post')) {

            $input = $request->except('_token');

            $message = [
                'required' => 'Заполните поле :attribute ',
                'unique' => ' не уникален :attribute'
            ];

            $validator = Validator::make($input, [

                'name' => 'required|max:255',
                'lastname' => 'required|max:255',
                'position' => 'required|max:255',
                'img' => 'required',
                'skills' => 'required|max:255',
                'alias' => 'required|unique:pages|max:255'

            ], $message);

            if ($validator->fails()) {
                return redirect()->route('peopleAdd')->withErrors($validator)->withInput();
            }
            if ($request->hasFile('img')) {
                $file = $request->file('img');
                $input['img'] = $file->getClientOriginalName();
                $file->move(public_path() . '/images', $input['img']);
            }

            $peoples = new People();
            $peoples->fill($input);
            if ($peoples->save()) {
                return redirect()->route('admin')->with('status', 'Человек добавлен');
            }
        }


        if (view()->exists('admin.peoples.people_add')) {

            $data = [

                'title' => 'Новый член команды'
            ];


            return view('admin.peoples.people_add', $data);
        }
        abort(404);
    }

    public function edit(People $people, Request $request){

        if($request->isMethod('delete')){
            $people->delete();
            return redirect()->route('admin')->with('status','Профиль удален!');
        }

        if($request->isMethod('post')){
            $input = $request->except('_token');

            $message = [
                'required' => 'Заполните поле :attribute ',
                'unique' => ' не уникален :attribute'
            ];

            $validator = Validator::make($input, [

                'name' => 'required|max:255',
                'lastname' => 'required|max:255',
                'position' => 'required|max:255',
                'skills' => 'required|max:255',
                'alias'=>'required|max:255|unique:pages,alias,'.$input['id']

            ], $message);

            if($validator->fails()){
                return redirect()
                    ->route('peopleEdit',['peoples'=>$input['id']])
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

            $people->fill($input);

            if($people->update()){
                return redirect()->route('admin')->with('status','Профиль обнавлен!');
            }

        }




        $old = $people->toArray();

        if (view()->exists('admin.peoples.people_edit')){

            $data = [
                'title'=>'Редактировать профиль '.$old['name'],
                'data'=>$old
            ];

            return view('admin.peoples.people_edit', $data);
        }

    }
}
