<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{


	public function login()
    {

		\Log::debug('we are in UserController');

		return response()->json([
    		'code' 		=> '200',
		    'message' 	=> 'Successful login'
		]);
    }


    public function getCurrentUser(){


	    $authuser = Auth::user();

	    if($authuser !== null){
	        $user = new \stdClass();
	        $user->id = $authuser->id;
	        $user->email = $authuser->email_address;
            return response()->json($user);
        } else {
	        return response()->json(false);
        }


    }

}
