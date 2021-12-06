<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'shop_category',
        'portfolio_link',
        'content_confirmation',
        'has_stores',
        'online_stores',
        'quality_perspective',
        'seller_experience',
        'marketing_understanding'
    ];
}
