<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // public function asset(string $id): void
    // {
    //     $asset = Asset::firstOrCreate(['product_id' => strtolower($id)]);

    //     $this->assets()->attach($asset);
    // }

    public function assets(): BelongsToMany
    {
        return $this->belongsToMany(Asset::class, 'product_assets');
    }


}
