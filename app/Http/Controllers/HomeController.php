<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



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
        $id = Auth::id();
        $name = DB::table('users')->where('id', $id)->value('name');
        $user_type = DB::table('users')->where('id', $id)->value('user_type');

        $orders = DB::table('orders')
        ->groupBy('id')
        ->having('user', '=', $name)
        ->get();
        
        $needs = DB::table('needs')->get();
        
        if($user_type == "Клиент"){     
            return view('layouts.home_lk', ['orders' => $orders]);
        } else {
            return view('layouts.home_supplier', ['needs' => $needs]);
        }
        
    }
}
