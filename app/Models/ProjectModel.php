<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectModel extends Model
{

    protected $table = 'project';
    protected $fillable = ['title', 'contractor', 'machine_type', 'stock', 'height', 'jop'];

}
