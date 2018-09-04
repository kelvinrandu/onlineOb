<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

  protected $guard ='user';
  protected $table = 'messages';

  protected $fillable = [
      'message',  'media_url',
  ];


}
