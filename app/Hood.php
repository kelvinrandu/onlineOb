<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hood extends Model
{

  protected $guard ='user';
  public $table = 'hoods';

  protected $fillable = [
      'name',  'code','user_id',
  ];
  
  public function messages()
{
    return $this->hasMany('App\Message');
}
public function conversations()
{
  return $this->hasMany('App\Conversation');
}
}
