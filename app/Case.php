<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Case extends Model
{
  protected $table = 'cases';
  
  protected $fillable = [
    'statement','report_crimes_id','statement_id','admin_id',
  ];

}
