<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

 protected $fillable = ['user_id'];

    public function items()
    {
        return $this->hasMany(CartItem::class);
    }

    public function updateTotal()
    {
        $this->total_price = $this->items()->sum('price');
        $this->save();
    }
}
