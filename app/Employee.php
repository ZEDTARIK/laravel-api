<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    // if don't use the same name of model and  table in the  database
    // protected $table = 'employees';

    protected $fillable = ['FullName', 'Email', 'PhoneNumber', 'address'];
}
