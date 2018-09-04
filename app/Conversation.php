<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{

  protected $guard ='user';
  protected $table = 'conversations';

  protected $fillable = [
      'message_id',  'hood_id', 'sender_id','reply_id',
  ];
  public function messages()
{
    return $this->hasMany('App\Message');
}
public function conversations()
{
  return $this->hasMany('App\Conversation');
}
//
//
// public function comments()
// {
//     return $this->hasMany('App\Message');
// }
//
// public function user()
// {
//     return $this->belongsTo('App\User','sender_id');
// }
}
