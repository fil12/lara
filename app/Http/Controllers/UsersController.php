<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;

class UsersController extends Controller
{
    //
    public function index(){

        if (view()->exists('admin.users.users')) {

            $users = User::all();

            $data = [
                'title' => 'Пользователи',
                'users' => $users
            ];

            return view('admin.users.users', $data);
        }
        abort(404);
    }


    public function add(Request $request){

        if($request->isMethod('post')){

            $input = $request->except('_token');

            $message = [
                'required'=>'Заполните поле :attribute',
                'unique'=>'Поле :attribute не уникально'
            ];

             $validator = Validator::make($input, [
                'name'=>'required|unique:users| max:255',
                'email'=>'required|unique:users| max:255',
                'rool'=>'required'

             ],$message);

             if ($validator->fails()){
                 return redirect()->route('userAdd')
                     ->withErrors($validator);
             }
            $user = User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => bcrypt($input['password']),
                'rool'=>$input['rool'],
            ]);

             if ($user->save()){
                 return redirect()->route('admin')->with('status','Пользователь добавлен!');
             }

        }

        if (view()->exists('admin.users.user_add')) {


            $data = [
                'title' => 'Добавить пользователя'
            ];

            return view('admin.users.user_add', $data);
        }
        abort(404);

    }

    public function edit(User $user, Request $request){

        if($request->isMethod('delete')){

            $user->delete();

            return redirect()->route('admin')->with('status','Страница удалена!');
        }

        if($request->isMethod('post')){

            $input = $request->except('_token');

            $input['password']= bcrypt($input['password']);

            $message = [
                'required'=> 'Заполните поле :attribute ',

            ];

            $validator = Validator::make($input, [
                'name'=>'required|max:255',
                'email'=>'required|max:255',
                'rool'=>'required',
                'password'=>'required|min:6'
            ],$message);

            if($validator->fails()){

                return redirect()
                    ->route('userEdit',['user'=>$input['id']])
                    ->withErrors($validator);
            }

            $user->fill($input);

            if($user->update()){

                return redirect()->route('admin')->with('status','Пользователь обновлен!');
            }



        }




        $old = $user->toArray();

        if (view()->exists('admin.users.user_edit')){

            $data = [

                'title'=>'Редактировать страницу'.$old['name'],
                'data'=>$old
            ];


            return view('admin.users.user_edit', $data);
        }




    }

}
