<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable =[
        'blog_title',
        'blog_image',
        'blog_description',
        'blog_seo_title',
        'blog_seo_permalink',
        'blog_seo_description',
        'blog_status',
        'blog_added_id',
        'blog_point',
    ];
}
