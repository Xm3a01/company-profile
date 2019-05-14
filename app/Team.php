<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['ar_name' , 'ar_specialization' ,'photo' , 'en_name' , 'en_specialization'  ];

}
