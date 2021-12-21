<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutAccountController extends Controller
{
    public function logout () {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/home')->with('logout_message', "You logged out successfully.");
    }
}
