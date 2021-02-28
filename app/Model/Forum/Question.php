<?php

namespace App\Model\Forum;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Question extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

	protected $collection = 'questions';
	    protected $fillable = [
        'title','body' ,'user_id', 'school_id', 'category_id'
    ];
	
public function user()
{
    return $this->belongsTo('App\Model\User\User');
}

public function replies()
{
    return $this->hasMany('App\Model\Forum\Reply');
}

public function category()
{
    return $this->belongsTo('App\Model\Forum\Category');
}



}