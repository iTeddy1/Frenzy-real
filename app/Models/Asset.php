<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Asset extends Model
{
    use HasFactory;
    public $guarded = ['id'];
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_assets');
    }
}
