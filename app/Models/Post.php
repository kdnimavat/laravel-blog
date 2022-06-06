<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    protected $fillable = [
        'catagory_id',
        'name',
        'slug',
        'description',
        'status',
        'created_by'
    ];

    public function category()
    {
        return $this->belongsTo(Catagory::class,'category_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }
}