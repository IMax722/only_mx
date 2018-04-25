<?php

namespace App\Http\Controllers;

use app\Feedback;
use app\Email_feedback;
use app\Remark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ContactsController extends Controller
{
    /**
         * Store a new user.
         *
         * @param  Request  $request
         * @return Response
         */
    public function insert(Request $request)
    {
        $name = $request->input('name');
        $time_to_recall = $request->input('time_to_recall');
        $phone = $request->input('phone');
        $email = $request->input('email');
        DB::insert('insert into feedbacks (name,time_to_recall,phone,email) values(?, ? ,? ,?)', [$name,$time_to_recall,$phone,$email]);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
        //
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function insertemailfeedback(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $body = $request->input('body');
        DB::insert('insert into email_feedbacks (name,email,body,created_at) values(?, ? ,?)', [$name,$email,$body]);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
    }
    public function insertremark(Request $request)
    {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $sender = $request->input('sender');
        $number = $request->input('number');
        $problem = $request->input('problem');
        $comment = $request->input('comment');
        DB::insert('insert into remarks (name,phone,email,sender,number,problem,comment) values(?, ? ,? ,? ,? ,? ,?)', 
            [$name,$phone,$email,$sender,$number,$problem,$comment]);
            echo "Record inserted successfully.<br/>";
            echo '<a href = "/insert">Click Here</a> to go back.';
    }
    public function insertcoop(Request $request)
    {
       $name = $request->input('name');
       $company = $request->input('company');
       $phone = $request->input('phone');
       $email = $request->input('email');
       $comment = $request->input('comment');
       DB::insert('insert into coops (name,company,phone,email,comment) values(?, ?, ?, ?,?)',
            [$name,$company,$phone,$email,$comment]);
            echo "Record inserted successfully.<br/>";
            echo '<a href = "/insert">Click Here</a> to go back.';

    }
    
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'time_to_recall' => 'required|string|email|max:255',
            'phone' => 'required|string|min:6|confirmed',
            'email' => 'required|string|email|max:255',
            ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Feedback
     */
    protected function create(array $data)
    {
        return Feedback::create([
            'name' => $data['name'],
            'time_to_recall' => $data['time_to_recall'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            ]);
    }
}
