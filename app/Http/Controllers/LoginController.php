<?php

namespace App\Http\Controllers;

use View;
use Redirect;
use Auth;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin()
{
    return View::make('login');
}

    public function doLogin(Request $request)
    {
        // validate the info, create rules for the inputs
        $rules = array(
            'email'    => 'required|email', // make sure the email is an actual email
            'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make($request->all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput($request->except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {

            // create our user data for the authentication
            $userdata = array(
                'email'     => $request->get('email'),
                'password'  => $request->get('password')
            );

            // attempt to do the login
            if (Auth::attempt($userdata)) {

                $request->session()->put('admin', 'success');
                return Redirect::to('/posts');

            } else {        

                // validation not successful, send back to form 
                return Redirect::to('/login')->with('admin', 'failed');

            }
        }
    }

    public function doLogout(Request $request)
    {
    Auth::logout(); // log the user out of our application
    $request->session()->forget('admin');
    return Redirect::to('login'); // redirect the user to the login screen
    }
}
