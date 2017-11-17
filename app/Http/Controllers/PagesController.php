<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Validator;

class PagesController extends Controller
{
    //
    public function index(){
        if(view()->exists('admin.pages.pages')){

            $pages = Page::all();

            $data = [
                'title'=>'Страницы',
                'pages' => $pages
            ];


            return view('admin.pages.pages', $data);

        }
        abort(404);

    }

    public function add(Request $request){


        if($request->isMethod('post')){

            $input = $request->except('_token');

            $message = [
                'required'=> 'Заполните поле :attribute ',
                'unique'=>' не уникален :attribute'
            ];

            $validator = Validator::make($input, [

                'name'=>'required|max:255',
                'alias'=>'required|unique:pages|max:255',
                'text'=>'required'
            ],$message);

           if($validator->fails()){
               return redirect()->route('pageAdd')->withErrors($validator)->withInput();
           }
           if($request->hasFile('img')){
               $file= $request->file('img');
               $input['img'] = $file->getClientOriginalName();
               $file->move(public_path().'/images', $input['img']);
           }

           $page = new Page();
           $page->fill($input);
           if ($page->save()){
              return redirect()->route('admin')->with('status','Страница добавлена');
           }
        }


        if(view()->exists('admin.pages.pages_add')){

            $data = [
                'title'=>'Новая страница'
            ];

            return view('admin.pages.pages_add', $data);
        }

        abort(404);

    }


    public function edit(Page $page, Request $request){

        if($request->isMethod('delete')){

            $page->delete();

            return redirect()->route('admin')->with('status','Страница удалена!');
        }

        if($request->isMethod('post')){

            $input = $request->except('_token');

            $message = [
                'required'=> 'Заполните поле :attribute ',
                'unique'=>'  :attribute не уникален'
            ];

            $validator = Validator::make($input, [

                'name'=>'required|max:255',
                'alias'=>'required|max:255|unique:pages,alias,'.$input['id'],
                'text'=>'required'
            ],$message);

            if($validator->fails()){
                return redirect()
                            ->route('pageEdit',['page'=>$input['id']])
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

            $page->fill($input);

            if($page->update()){
                return redirect()->route('admin')->with('status','Страница обновлена!');
            }


        }




       $old = $page->toArray();
        if (view()->exists('admin.pages.pages_edit')){

            $data = [

                'title'=>'Редактировать страницу'.$old['name'],
                'data'=>$old
            ];

            return view('admin.pages.pages_edit', $data);
        }
    }
}
