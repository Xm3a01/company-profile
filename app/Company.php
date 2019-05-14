<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['ar_name' , 'ar_profile' , 'en_name' , 'en_profile' ];
}
