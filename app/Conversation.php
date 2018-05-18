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
}
