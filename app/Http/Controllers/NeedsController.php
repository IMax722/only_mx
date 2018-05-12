<?php

namespace App\Http\Controllers;

use app\Need;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NeedsController extends Controller
{
    public function insertneed(Request $request)
    {
        $body = $request->input('body');
        $contacts = $request->input('contacts');
        $period = $request->input('period');
        $cost = $request->input('cost');
        DB::insert('insert into needs (body,contacts,period,cost) values(?, ?, ?, ?)', [$body,$contacts,$period,$cost]);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
        return redirect('/admin');
    }
}
