<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
        'launch',
        'image',
        'image2',
        'demand',
    ];

    public function wishlists(): HasMany{
        return $this->hasMany(Wishlist::class);
    }
}
