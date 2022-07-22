<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SinglePage extends Model
{
    protected $table = 'single_page';
    protected $fillable = [
        'name' , 'title' , 'slug', 'content', 'description', 'is_active', 'is_topbar', 'is_footer'
    ];
}
