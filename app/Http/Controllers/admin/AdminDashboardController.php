<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class AdminDashboardController extends Controller
{
    public function dashboard(){

    	$userlist=User::all();
        return view('admin.home',compact('userlist'));
    }
}
