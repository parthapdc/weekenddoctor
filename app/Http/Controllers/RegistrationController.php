<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\User;
use Mail;
use Auth;
use Session;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class RegistrationController extends Controller
{

    public function join_us()
    {
        return view('pages.join_us');
    }

    public function get_started()
    {
        return view('pages.get_started');
    }

    public function patient_registration(Request $request)
    {
        if ($request->isMethod('post')) {

            $existing_user = User::where('email', $request->email)->count();
            if($existing_user > 0)
            {
                Session::put('message', 'Account already exists');
                return Redirect('/join-us');
            }

            $confirmation_code = str_random(10);
            $user_level = intval($request->input('registration_type'));
            $email = $request->input('email');
            $first_name = $request->input('first_name');
            $last_name = $request->input('last_name');
            $password = $request->input('password');

            $user_id = DB::table('users')->insertGetId(
                ['first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'password' => \Hash::make($password),
                'remember_token' => $request->input('_token'),
                'verification_code' => $confirmation_code,
                'active' => 0,
                'user_level' => $user_level,
                'created_at' => date('Y-m-d H:i:s'),]
            );

            //Sending Confirmation Email
            $data['email'] = $email;
            $data['name'] = $first_name.' '.$last_name;
            $data['user_id'] = $user_id;
            $data['confirmation_code'] = $confirmation_code;

            Mail::send(['html' => 'email.verify'], $data, function ($m) use ($data) {
                $m->from('raficsedu@gmail.com', 'Weekend Doctor');

                $m->to($data['email'], $data['name'])->subject('Please verify your email');
            });

            Session::put('message', 'Thanks for signing up! Please check your email and verify');
            return redirect()->route('join_us');

        }
        return view('pages.join_us');
    }
}
