<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestEducation extends Model
{
    protected $table = 'education_request';
    protected $fillable = [
        'name', 'surname' ,'ident_no', 'degree', 'worksite', 'phone_number', 'email' , 'education_date'
    ];
}
