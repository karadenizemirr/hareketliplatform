<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    use HasFactory;
    protected $table = 'service_request';
    protected $fillable = [
        'date', 'degree_or_project', 'block_front', 'fault_type', 'product_type', 'fault_medicine', 'phone_number','images',
        'name', 'surname', 'email'
    ];
}
