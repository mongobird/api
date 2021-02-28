<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Foundation\Auth\VerifiesEmails;

use Illuminate\Support\Facades\Auth;
use App\Model\User\User;

class VerificationControllerApi extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

   // use VerifiesEmails;


    protected $redirectTo = RouteServiceProvider::HOME;


    public function __construct()
    {
      
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
    public function verify (Request $request)
    {

       

        $user = User::findOrFail($request['id']);
// check if the url is a valid signed url

if (! URL::hasValidSignature ($request)) {
return response()->json(["errors" =>[
    "message" => "Invalid verification link"
]] ,422);

}
// если пользователь уже верифицирован
if ($user -> hasVerifiedEmail()) {


    return response()->json(["errors" =>[
        "message" => "Email address already verified"
    ]] ,422);

}




$user['email_verified_at'] =time();
$user->save();


return response()->json(["message" => "Email successfully verified"],200);


    }
    public function resend (Request $request)
    {

        $this->validate($request, [
        'email' => ['email', 'required']
        ]);

        $user = User::where('email', $request->email)->first(); 
       
        
     


        if(!$user){
        return response()->json(["errors" => [ 
            "message" => "No user could be found with this email address" 
            ]], 422);
      
        }

        if ($user -> hasVerifiedEmail()) {


            return response()->json(["errors" =>[
                "message" => "Email address already verified"
            ]] ,422);
        
        }

        $user->sendEmailVerificationNotification();

        return response()->json(["status" => "verification link resent"]);



    }
}
