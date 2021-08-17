<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subalpha extends Model
{
    use HasFactory;

    protected $fillable = [
        'sub_alpha_name',
        'sub_alpha_description',
    ];
}
