<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subalpha extends Model
{
    use HasFactory;

    protected $fillable = [
        'alpha_id',
        'sub_alpha_name',
        'sub_alpha_description',
    ];

    public function alp_name()
    {
        return $this->belongsTo(Alpha::class,'alpha_id');
    }
}
