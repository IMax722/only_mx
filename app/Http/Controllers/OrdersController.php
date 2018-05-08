<?php

namespace App\Http\Controllers;

use app\User;
use app\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    /**
         * Store a new user.
         *
         * @param  Request  $request
         * @return Response
         */
    public function insertorder(Request $request)
    {
        $id = Auth::id();
        $userf = DB::table('users')->where('id', $id)->value('name');
        $user = $userf;
        $sender = $request->input('sender');
        $taker = $request->input('taker');
        $phone1 = $request->input('phone1');
        $phone2 = $request->input('phone2');
        $lol1 = $request->input('lol1');
        $lol2 = $request->input('lol2');
        $type = $request->input('type');
        $am = $request->input('am');
        DB::insert('insert into orders (user,sender, taker, phone1, phone2, lol1, lol2, type, am) values(?, ?, ?, ?, ?, ?, ?, ?,?)', [$user,$sender,$taker,$phone1,$phone2,$lol1,$lol2,$type,$am]);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
        


    }
    public function showorder()
    {
        
        $orders = DB::table('orders')->get();

        return view('layouts.home_cons', ['orders' => $orders]);

    }


}
