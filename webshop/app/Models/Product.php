<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Money\Currency;
use Money\Money;

class Product extends Model
{
    use HasFactory;

    public Product $product;
    public function mount(Product $product)
    {
        $this->product = $product;
    }

    public function variants(): HasMany
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function image(): HasOne
    {
        return $this->hasOne(Image::class)->ofMany('featured', 'max');
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    protected function price(): Attribute
    {
        return Attribute::make(
            get: function(int $value) {
                return new Money($value, new Currency('USD'));
            }
        );
    }
    protected $fillable = ['name', 'description', 'price'];
}
