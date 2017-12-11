<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report_crime extends Model
{


  protected $guard ='user';
  protected $table = 'report_crimes';

  public function user()
  {
      return $this->belongsTo('App\User','user_id');
  }
  public function admin()
  {
      return $this->belongsTo('App\Admin','admin_id');
  }

  protected $fillable = [
    'user_id',  'admin_id','phonenumber','date','idNo','type_id', 'status','crime_description',
  ];


}
