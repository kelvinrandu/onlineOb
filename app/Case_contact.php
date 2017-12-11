<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Case_contact extends Model
{
    protected $guard ='admin';
    protected $table = 'case_contacts';


    protected $fillable = [
        'case_id',  'contact_id',
    ];

}
