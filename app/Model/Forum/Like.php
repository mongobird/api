<?php

namespace App\Model\Forum;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Like extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

	protected $collection = 'likes';
	    protected $fillable = [
     'user_id', 'reply_id'
    ];
	

    public function user()
    {
    
    return $this->belongsTo('App\Model\User\User')   ; 
    }


}