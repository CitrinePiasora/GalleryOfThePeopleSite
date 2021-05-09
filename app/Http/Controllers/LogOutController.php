<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LogOutController extends Controller
{
    public function LogOut(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
}
