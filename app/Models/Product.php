<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($product) {
            // Delete all assets associated with the product
            foreach ($product->assets as $asset) {
                $asset->delete();
            }

            // Delete pivot table records
            $product->assets()->detach();

            // Delete the product directory
            $directory = 'assets/products/' . $product->id;
            if (Storage::disk('public')->exists($directory)) {
                Storage::disk('public')->deleteDirectory($directory);
            }

        });
    }

    public function assets(): BelongsToMany
    {
        return $this->belongsToMany(Asset::class, 'product_assets');
    }
    public function orderItems()
    {
    return $this->hasMany(OrderItem::class);
    }

}
