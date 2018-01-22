<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station_contact extends Model
{

       protected $table = 'station_contacts';

    protected $fillable = [
   'admin_id',  'phonenumber','address','OCS','OCPD',
    ];

    public function admin()
   {
     return $this->belongsTo('App\Admin');
   }
}
