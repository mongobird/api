<?php

namespace App\Model\User;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Schoolrole extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

	protected $collection = 'schoolroles';
	    protected $fillable = [
        '_id', 'school_id', 'role'
    ];
    
    public function user() 
    {

        return $this->belongsToMany('App\Model\User\User');
    }




}


