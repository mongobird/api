<?php

namespace App\Http\Controllers\Test;

use App\Model\User\User;

use App\Model\User\School;
use App\Model\User\Schoolrole;
use App\Http\Controllers\Controller;


class TestController extends Controller
{
    

    public function __construct()
    {
  
    }  

public function test ()

{


//$user = User::with('school')->get();

//$user = User::where('school_ids', '602fb38b2c60682f4c003711')->get();

//$user = User::where('profile_id', '602fba7e2c60682f4c003714')->get();

//dd($user);


/*
$user = User::find('602fbf442c60682f4c003718');
$school = School::find('602fbf9b2c60682f4c00371e');
$user->school()->attach($school);


$schoolrole = Schoolrole::create([

    '_id' => new \MongoDB\BSON\ObjectId(),
    'school_id' => '602fbf9b2c60682f4c00371e',
    'role' => 'manager'

]);


$user->schoolrole()->attach($schoolrole);


*/


$schoolrole = Schoolrole::where('user_id', '602fbf442c60682f4c003718')->get();

dd($schoolrole);




}



}
