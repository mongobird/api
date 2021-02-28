<?php

namespace App\Http\Controllers\Auth;

use App\Model\User\User;
use App\Model\User\School;
use App\Model\User\Profile;
use Illuminate\Http\Request;
use App\Model\User\Schoolrole;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterControllerApi extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

protected function registered (Request $request, User $user)
{

 return response()->json($user);   
}


    protected function validator(array $data)
    {
        return Validator::make($data, [
		    'photo' => ['string', 'max:30'],
            'name' => ['required', 'string', 'max:30'],
			'phone' => ['required', 'string', 'max:30'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:3', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user_id = new \MongoDB\BSON\ObjectId();
        
        $profile_id = new \MongoDB\BSON\ObjectId();
		$this->demoprofile($profile_id);
		
		$school_id =new \MongoDB\BSON\ObjectId();
		$this->demoschool($school_id);
		
		$schoolrole_id = new \MongoDB\BSON\ObjectId();
        $this->demoschoolrole($school_id, $schoolrole_id);




try {
    $check = User::create([
        '_id' => $user_id,
        'photo' => 'photo.png',
        'name' => $data['name'],
        'phone' => $data['phone'],
        'email' => $data['email'],
        'status' => 'active',
        'check' => false,
        'online' => 'offline',
        'password' => Hash::make($data['password']),
        'profile_id'=>(string)$profile_id,
        'active_school_id'=>(string)$school_id,
        'active_role_id'=>(string)$schoolrole_id,

    ]);
// Связь многоие ко многим


$user = User::find($user_id);
$school = School::find($school_id);
$user->school()->attach($school);

// Связь многоие ко многим
$schoolrole = Schoolrole::find($schoolrole_id);
$user->schoolrole()->attach($schoolrole);




    return $check; 
} catch (Throwable $e) {
  
    return response( )->json(['error' => $e],201); 
}

        
    }
	
	
	    private function demoprofile($profile_id)
    {
        
		return Profile::create([
            '_id' => $profile_id,
            'settings' => 'Некоторые настройки',
        ]);
    }
	
    private function demoschool($school_id)
    {
        
		return School::create([
		    '_id' => $school_id,
            'name' => 'Название школы'
        ]);
    }


		private function demoschoolrole($school_id,$schoolrole_id)
    {
        
		return Schoolrole::create([
		    '_id' => $schoolrole_id,
            'school_id' => (string)$school_id,
            'role' => 'admin'
        ]);
    }
	
	
	
}
