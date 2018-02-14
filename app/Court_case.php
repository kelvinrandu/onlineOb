<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Court_case extends Model
{
       protected $guard ='admin';
       protected $table = 'court_cases';

    protected $fillable = [
   'statement',  'report_crimes_id','statement_id','admin_id',
    ];

   public function contacts()
  {
    return $this->belongsToMany('App\Contact', 'case_contacts');
  }

  public function crime()
  {
      return $this->belongsTo('App\Report_crime','report_crimes_id');
  }
}
