<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        "first_name",
        "last_name",
        "shop_category",
        "portfolio_link",
        "content_confirmation",
        "has_stores",
        "online_stores",
        "quality_perspective",
        "seller_experience",
        "marketing_understanding"
    ];

    public const SHOP_CATEGORIES = [
        "Graphics" => "Graphics",
        "Fonts" => "Fonts",
        "Templates" => "Templates",
        "Add-ons" => "Add-ons",
        "Photos" => "Photos",
        "Web Themes" => "Web Themes",
        "3D" => "3D"
    ];
}
