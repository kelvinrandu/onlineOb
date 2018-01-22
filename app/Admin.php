<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard ='admin';
    public $table = 'admins';

    public function station_contact()
    {
      return $this->hasOne('App\Station_contact');
    }
    public function report_crimes()
  {
      return $this->hasMany('App\Report_crime');
  }
  public function statements()
{
    return $this->hasMany('App\Statement');
}
public function contact()
{
  return $this->belongsTo('App\Contact');
}

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',  'station_name','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function is_detective(){

      if($this->status){

        return true;
      }
      return false;
    }
}
