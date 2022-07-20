<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelsCategory extends Model
{
    protected $table = "category";
    protected $fillable = ['name', 'slug'];

    public function products()
    {
        return $this->belongsToMany('App\Models\ModelsProduct', 'category_product');
    }
}
