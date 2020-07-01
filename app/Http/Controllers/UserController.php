<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function ListHomestay()
    {
    	return view('user/homestay');
    }

    public function Booking()
    {
    	return view('user/booking');
    }

    public function ContactUs()
    {
    	return view('user/contact');
    }
}
