<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\assign;

class Event extends Model
{
  public  $table = 'events';

  protected $fillable = [
      'event','status','days',
  ];
  protected $events = [
      'created' => Events\assign::class
  ];
}
