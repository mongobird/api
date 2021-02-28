<?php

namespace App\Model\User;

use App\Notifications\ResetPassword;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Illuminate\Auth\Notifications\VerifyEmail as NotificationsVerifyEmail;

class User extends Authenticatable implements JWTSubject, MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

	
	    protected $fillable = [
       '_id','photo' ,'name', 'status', 'check','online','phone','email', 'password', 'profile_id', 'school_id', 'schoolrole_id','active_school_id','active_role_id'
    ];
	

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    




public function profile()
{

return $this->hasOne('App\Model\User\Profile')   ; 
}

public function school() 
{

    return $this->belongsToMany('App\Model\User\School');
}


public function schoolrole() 
{

    return $this->belongsToMany('App\Model\User\Schoolrole');
}



public function question()
{
return $this->hasMany('App\Model\Forum\Question')   ; 
}


public function like()
{

return $this->hasMany('App\Model\Forum\Like')   ; 
}







public function sendPasswordResetNotification($token) {
    $this->notify(new ResetPassword($token));
  }


    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }



}
