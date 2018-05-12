<?php
    namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use app\Admin;


class AdminController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('isAdmin');
    }
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $remarks = DB::table('remarks')->get();

        $email_feedbacks = DB::table('email_feedbacks')->get();

        $feedbacks = DB::table('feedbacks')->get();

        $coops = DB::table('coops')->get();
        
        $orders = DB::table('orders')->get();
        
        $id = Auth::guard('admin')->id();
        
        $admin_type = DB::table('admins')->where('id', $id)->value('admin_type');
        
        if($admin_type == "admin"){     
            return view('layouts.home_head', ['remarks' => $remarks]);
        } elseif ($admin_type == "cons") {
            return view('layouts.home_cons', ['feedbacks' => $feedbacks] , ['email_feedbacks' => $email_feedbacks]);
        } elseif ($admin_type == "mg") {
            return view('layouts.home_pur', ['coops' => $coops]);
        } elseif ($admin_type == "coord") {
            return view('layouts.home_coord', ['orders' => $orders]);              
        } else {
            echo "error 404";
        }
    }
}
