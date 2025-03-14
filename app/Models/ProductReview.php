<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'rating',
        'customer_id',
        'product_id',
    ];
    public function customerProfile(){
        return $this->belongsTo(CustomerProfile::class,'customer_id');
    }
}

