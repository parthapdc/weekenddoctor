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

class WdController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function dashboard()
    {
        return view('welcome');
    }

    public function how_it_works()
    {
        return view('pages.how_it_works');
    }

    public function list_your_practice()
    {
        return view('pages.list_your_practice');
    }

    public function medical_group()
    {
        return view('pages.medical_group');
    }

    public function authorization()
    {
        return view('pages.authorization');
    }

    public function doctor_profile()
    {
        return view('pages.doctor_profile');
    }

    public function medical_search()
    {
        return view('pages.medical_search');
    }

    public function book_appointment()
    {
        return view('pages.book_appointment');
    }

    public function send_email(){
        $user['email'] = 'noshinnu@gmail.com';
        $user['name'] = 'Arefin';

        Mail::send('email.test', ['user' => $user], function ($m) use ($user) {
            $m->from('raficsedu@gmail.com', 'Weekend Doctor');

            $m->to($user['email'], $user['name'])->subject('Your Reminder!');
        });
    }
	
	public function raad(){
		echo 'Raad';
	}
}
