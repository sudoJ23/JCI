<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function delivery() {
        return $this->hasOne(Delivery_bumdes::class);
    }

    public function product() {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function buyer() {
        return $this->belongsTo(User::class, 'buyer_id');
    }

    protected $fillable = [
        'product_id',
        'buyer_id',
        'qty',
        'total',
    ];
}
