<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory,HasUuids, Sluggable;

    protected $fillable = ['title','slug','description','short_description','brand','price','quantity','discount_percent','is_confirmed','is_featured'];

    public function images():HasMany
    {
        return $this->hasMany(ProductImage::class)->orderByDesc('is_primary');
    }

    public function reviews():HasMany
    {
        return $this->hasMany(Review::class)->orderBy('created_at');
    }

    /**
     * Category for this product
     * */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }

    /**
     * Get the primary image for the product.
     */
    public function primaryImage(): HasOne
    {
        return $this->hasOne(ProductImage::class)->where('is_primary', true);
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected function price(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value / 100,
            set: fn ($value) => $value * 100,
        )->withoutObjectCaching();
    }

    public function discountedPrice(): Attribute{
        return Attribute::make(
            get: fn ($value) => $this->price * (1 - ($this->discount_percent / 100)),
        );
    }
}
