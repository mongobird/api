<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;

class SettingsController extends Controller
{
   
public function updateProfile (Request $request)
    {
    $user = auth()->user();
    $this->validate($request, [
     'name' => ['required']
    ]);
    }

}
