<?php

namespace App\Model\Forum;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Reply extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

	protected $collection = 'replies';
	    protected $fillable = [
        'body' ,'user_id', 'question_id'
    ];
	

    public function question()
    {
        return $this->belongsTo('App\Model\Forum\Question');
    }


    public function user()
    {
        return $this->belongsTo('App\Model\User\User');
    }

    public function like()
    {
        return $this->hasMany('App\Model\Forum\Like');
    }


}