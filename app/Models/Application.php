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

    public const QUALITY_PERSPECTIVES = [
        "I don’t care what it takes, my products are the highest quality possible" =>
            "I don’t care what it takes, my products are the highest quality possible",
        "I put in enough effort to make my product pretty high quality, but at some point my time is better spent elsewhere" =>
            "I put in enough effort to make my product pretty high quality, but at some point my time is better spent elsewhere",
        "I try to get quality products out quickly, even if I need to take a shortcut now and then" =>
            "I try to get quality products out quickly, even if I need to take a shortcut now and then",
        "I spend the minimum amount of time & effort it takes to create products that are acceptable quality." =>
            "I spend the minimum amount of time & effort it takes to create products that are acceptable quality.",
        "Quantity is more important to me than quality." =>
            "Quantity is more important to me than quality."
    ];

    public const SELLER_EXPERIENCE = [
        "I sell on multiple marketplaces and through my own website" =>
            "I sell on multiple marketplaces and through my own website",
        "I have experience selling through only my own website" =>
            "I have experience selling through only my own website",
        "I have experience selling through multiple marketplaces" =>
            "I have experience selling through multiple marketplaces",
        "I have experience selling through one online marketplace" =>
            "I have experience selling through one online marketplace",
        "I’m new to selling creative products online" =>
            "I’m new to selling creative products online"
    ];

    public const MARKETING_UNDERSTANDING = [
        "I have an extensive background in business and/or marketing" =>
            "I have an extensive background in business and/or marketing",
        "I’m familiar with some skills & techniques, but I’m not sure how to apply them when selling my creative work" =>
            "I’m familiar with some skills & techniques, but I’m not sure how to apply them when selling my creative work",
        "I’m vaguely aware of basic business & marketing concepts" =>
            "I’m vaguely aware of basic business & marketing concepts",
        "I’m not interested in understanding business & marketing" =>
            "I’m not interested in understanding business & marketing"
    ];
}
