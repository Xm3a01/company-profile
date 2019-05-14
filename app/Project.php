<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['ar_name' , 'ar_decription' ,'photo' , 'en_name' , 'en_decription' ];

}
