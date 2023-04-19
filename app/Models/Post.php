<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;      //them vao

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;                               //them vao
    protected $fillable = [
        'title',
        'content',
        'user_id',
        'thumbnail'
    ];

    
    function featuredImage() {
        return $this->hasOne('App\Models\FeaturedImage');
    }

    function user() {
        return $this->belongsTo('App\Models\User');
    }
}
