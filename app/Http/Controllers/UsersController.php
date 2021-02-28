<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\School;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Routing\Controller as BaseController;




class UsersController extends BaseController
{

	
	
	function directors(){
      

       // $user=User::find('5ff6ff422c6068065400354b');

      //  var_dump($user['name']);die;


    	return view('users.directors');
    }

	    function managers(){
    	return view('users.managers');
    }


    function metodists(){
    	return view('users.metodists');
    }


    function teachers(){
    	return view('users.teachers');
    }


    function students(){
    	return view('users.students');
    }



   
}
