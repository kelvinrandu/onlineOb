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
  public function user()
  {
    return $this->belongsTo('App\User');
  }
}
