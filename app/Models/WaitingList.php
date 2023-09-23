<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaitingList extends Model
{
    use HasFactory;

    public function admin() {
        return $this->belongsTo(User::class, 'admin_id');
    }

    // public function product() {
    //     return $this->belongsTo(Product::class, 'product_id');
    // }

    protected $fillable = [
        'product_id',
        'admin_id',
        'start_at',
        'accepted_at',
        'denied_at',
    ];

    protected $casts = [
        'start_at' => 'timestamp',
        'accepted_at' => 'timestamp',
        'denied_at' => 'timestamp',
    ];
}
