<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if((Auth::user()->rool) == 1) {
            if (view()->exists('admin.index')) {
                $data = ['title' => 'Панель управления'];

                return view('admin.index', $data);
            }

        }else{

            return view('home');
        }

    }
}
