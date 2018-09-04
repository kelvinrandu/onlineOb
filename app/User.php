<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $guard ='user';
    protected $table = 'users';


    public function report_crimes()
  {
      return $this->hasMany('App\Report_crime');
  }
  public function messages()
{
    return $this->hasMany('App\Message');
}
  public function conversations()
  {
    return $this->hasOne('App\Conversation');
  }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fName',  'lName', 'email', 'avatar','gender','verifyToken','status','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
