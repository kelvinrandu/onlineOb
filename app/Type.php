<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
  public  $table = 'type';

  protected $fillable = [
      'name',
  ];
}
