<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    use HasFactory;

    protected $table = 'catagories';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'navbar_status',
        'status',
        'created_by'
    ];
}