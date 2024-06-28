<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'more_description',
        'additional_infos',
        'stock',
        'solde_price',
        'regular_price',
        'image_urls',
        'brand',
        'is_available',
        'is_best_seller',
        'is_new_arrival',
        'is_featured',
        'is_special_offer'
    ];

    public function categories():BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }
}
