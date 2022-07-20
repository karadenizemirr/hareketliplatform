<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelsProduct extends Model
{
    use SoftDeletes;
    protected $table = 'product';
    protected $fillable = ['name', 'slug', 'description', 'technique_detail', 'platform_detail', 'safety_features',
        'configuration', 'components', 'other_detail'];

    public function categories(){
        return $this->belongsToMany('App\Models\ModelsCategory', 'category_product');
    }
}
