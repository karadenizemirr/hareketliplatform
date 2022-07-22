<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsModel extends Model
{
    use HasFactory;
    protected $table = 'news_table';
    protected $fillable = ['title', 'description', 'content', 'image', 'slug', 'keyword', 'video'];

}
