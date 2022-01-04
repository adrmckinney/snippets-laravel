<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    function doLogin(Request $request)
    {
        // Creating Rules for Email and Password
        $rules = array(
            'email' => 'required|email', // make sure the email is an actual email
            'password' => 'required|alphaNum|min:8'
            // password has to be greater than 3 characters and can only be alphanumeric and);
            // checking all field
        );

        // create our user data for the authentication
        $userdata = array(
            'email' => request()->input('email'),
            'password' => request()->input('password')
        );
        // attempt to do the login
        if (Auth::attempt($userdata)) {
            // validation successful
            // do whatever you want on success
        } else {
            // validation not successful, send back to form
            return Redirect::to('checklogin');
        }
    }
}
