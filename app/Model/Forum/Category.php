<?php

namespace App\Model\Forum;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Category extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

	protected $collection = 'categories';
	    protected $fillable = [
     'name', 'user_id'
    ];
	

    public function question()
    {
        return $this->hasMany('App\Model\Forum\Question');
    }


}