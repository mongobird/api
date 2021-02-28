<?php

namespace App\Model\User;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Profile extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

	protected $collection = 'profiles';
	    protected $fillable = [
        '_id' ,'settings'
    ];
	

    public function user()
    {
    
    return $this->belongsTo('App\Model\User\User')   ; 
    }





}


