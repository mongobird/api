<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordControllerApi extends Controller
{


    use SendsPasswordResetEmails;


    protected function sendResetLinkResponse(Request $request, $response) 
    {
        return response()->json(['status' => 'Reset link successfully sent'],200); 
    }


    protected function sendResetlinkFailedResponse(Request $request, $response)
    {
    return response()->json(['email' => trans($response)], 422);
    }
}
