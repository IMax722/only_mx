<?php

namespace App\Http\Controllers;

use app\feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class FeedBackController extends Controller
{
    /**
         * Store a new user.
         *
         * @param  Request  $request
         * @return Response
         */
    public function join(Request $request)
    {
        $name = $request->input('name');
        $time_to_recall = $request->input('time_to_recall');
        $phone = $request->input('phone');
        $email = $request->input('email');

        //
    }
    
    
    
    
    
    
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
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
