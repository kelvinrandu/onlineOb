<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Case_contact extends Model
{
       protected $guard ='admin';
       protected $table = 'case_contacts';

    protected $fillable = [
  'court_case_id','contact_id',
    ];
    public function contact()
    {
      return $this->hasOne('App\Contact');
    }
  //
  //  public function contacts()
  // {
  //   return $this->belongsToMany('App\Contact', 'case_contacts');
  // }
}
