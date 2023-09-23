<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // public function waitinglist() {
    //     return $this->hasOne(waitingList::class);
    // }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected $fillable = [
        'category_id',
        'name',
        'price',
        'qty_init',
        'qty_in',
        'qty_out',
        'unit',
        'status',
        'notes',
        'description',
        'user_id'
    ];

    protected $guarded = [];
}
