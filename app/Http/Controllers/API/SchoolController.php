<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\School;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function __construct()
{
 //   $this->middleware('auth:api');
}


   public function getname($id_school)
    {
        $id_school =(int)($id_school);
    
    $school =
    School::where('id_school', $id_school)
        ->take(1)
        ->get();

  return($school[0]['name']);
    }

    
	
}

