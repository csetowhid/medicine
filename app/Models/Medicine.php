<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    protected $fillable = [
        'alpha_id',
        'subalpha_id',
        'medicine_name',
        'medicine_generic_name',
        'medicine_brand_name',
        'medicine_drug_class',
        'medicine_image',
        'medicine_description',
        'medicine_seo_title',
        'medicine_seo_permalink',
        'medicine_seo_description',
        'medicine_status',
    ];
}
