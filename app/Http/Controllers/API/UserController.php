<?php

namespace App\Http\Controllers\API;

use App\Model\User\User;
use App\Model\User\School;
use App\Model\User\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function __construct()
{
 $this->middleware('auth:api');
}


   public function index()
    {
       $user =User::latest()->paginate(10);
	  // $user1 = User::latest()->take(10)->get();


	  if (isset($user[0])) {
	  $school =  School::where('id_school', $user[0]['id_school'])->take(1)->get();
	  $user[0]['name_school']=$school[0]['name'];
	  }
	  
	  	  if (isset($user[1])) {
	  $school =  School::where('id_school', $user[1]['id_school'])->take(1)->get();
	  $user[1]['name_school']=$school[0]['name'];
	  }
	  
	  	  if (isset($user[2])) {
	  $school =  School::where('id_school', $user[2]['id_school'])->take(1)->get();
	  $user[2]['name_school']=$school[0]['name'];
	  }
	  
	  	  if (isset($user[3])) {
	  $school =  School::where('id_school', $user[3]['id_school'])->take(1)->get();
	  $user[3]['name_school']=$school[0]['name'];
	  }
	  
	  	  if (isset($user[4])) {
	  $school =  School::where('id_school', $user[4]['id_school'])->take(1)->get();
	  $user[4]['name_school']=$school[0]['name'];
	  }
	  
	  	  if (isset($user[5])) {
	  $school =  School::where('id_school', $user[5]['id_school'])->take(1)->get();
	  $user[5]['name_school']=$school[0]['name'];
	  }
	  
	  	  if (isset($user[6])) {
	  $school =  School::where('id_school', $user[6]['id_school'])->take(1)->get();
	  $user[6]['name_school']=$school[0]['name'];
	  }
	  
	  	  if (isset($user[7])) {
	  $school =  School::where('id_school', $user[7]['id_school'])->take(1)->get();
	  $user[7]['name_school']=$school[0]['name'];
	  }
	  
	  	  if (isset($user[8])) {
	  $school =  School::where('id_school', $user[8]['id_school'])->take(1)->get();
	  $user[8]['name_school']=$school[0]['name'];
	  }
	  
	  	  	  if (isset($user[9])) {
	  $school =  School::where('id_school', $user[9]['id_school'])->take(1)->get();
	  $user[9]['name_school']=$school[0]['name'];
	  }
	  
	  
		return $user;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
   




   
    }
	

    private function demoprofile($id_profile,$id_school)
    {
        
		return Profile::create([
            'id_profile' => $id_profile,
            'id_school' => $id_school,
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
    



    public function show($id)
    {
        
    }

  

    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);

        $this->validate($request, [
		'name' => 'required|string|max:50',
		'email' => 'required|string|email|max:50|unique:users,'.$user->id,
        'phone' => 'string|max:50',
        'status' => 'required|string|max:50',
        'id_school' => '',
        'password' => 'required|string|min:6',
	
    ]);
    
    
 
            $request['id_school'] = (int)$request['id_school'];
            
    
    


        $user->update($request->all());
        return ['message' => 'Updated the user info'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		
		
        $user=User::find($id);
        
        // Удаляем профиль

        Profile::where('id_school', $user['id_school'])->delete();

        // Удаляем школу

        School::where('id_school', $user['id_school'])->delete();

        // Удаляем всех пользователей данной школы

        User::where('id_school', $user['id_school'])->delete();
        
        return ['message' => 'User Deleted '.$id];
        




    }
	
	    


	
}

