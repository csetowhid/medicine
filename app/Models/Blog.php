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
        'blog_status',
        'blog_added_id',
        'blog_point',
    ];

    public function blogger_name()
    {
        return $this->belongsTo(User::class,'blog_added_id');
    }
}
