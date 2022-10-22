<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;

class FrontViewController extends Controller
{
    public function index()
    {
        $data = food::all();
        return view('front.home',compact('data'));
    }
    public function redirects()
    {
        $data = food::all();
        $usertype= Auth::user()->user_type;
        if($usertype == '1')
        {
            return view('admin.home');
        }
        else
        {
            return view('home',compact('data'));
        }
    }
}
