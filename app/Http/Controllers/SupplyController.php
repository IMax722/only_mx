<?php

namespace App\Http\Controllers;

use app\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SupplyController extends Controller
{
    public function insertsupply(Request $request)
    {
      $name = $request->input('name');
      $company = $request->input('company');
      $phone = $request->input('phone');
      $email = $request->input('email');
      $comment = $request->input('comment');
      DB::insert('insert into coops(name,company,phone,email,comment) values(?, ?, ?, ?,?)', [$name,$company,$phone,$email,$comment]); 
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/insert">Click Here</a> to go back.';

    }
}
