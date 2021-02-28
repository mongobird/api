<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Profile;
use App\School;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
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

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
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
        $id_profile = Profile::getid();
		$this->demoprofile($id_profile);
		
		$id_school =School::getid();
		$this->demoschool($id_school);
		
		
		return User::create([
		    'photo' => 'photo.png',
            'name' => $data['name'],
			'phone' => $data['phone'],
            'email' => $data['email'],
			'role' => 'admin',
			'status' => 'active',
			'check' => false,
			'online' => 'offline',
            'password' => Hash::make($data['password']),
			'id_profile'=>$id_profile,
			'id_school'=>$id_school
        ]);
    }
	
	
	    private function demoprofile($id_profile)
    {
        
		return Profile::create([
		    'id_profile' => $id_profile,
            'settings' => 'Некоторые настройки',
        ]);
    }
	
		private function demoschool($id_school)
    {
        
		return School::create([
		    'id_school' => $id_school,
            'name' => 'Название школы',
        ]);
    }
	
	
	
}
