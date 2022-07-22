<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeContactModel extends Model
{
    use HasFactory;
    protected $table = 'me_contact';
    protected $fillable = ['phone_number', 'email', 'city', 'address'];
}
