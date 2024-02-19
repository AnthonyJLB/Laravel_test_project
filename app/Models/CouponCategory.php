<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CouponCategory extends Model
{

    protected $fillable = ['name'];

    public function coupons()
    {
        return $this->belongsToMany(Coupon::class, 'coupon_coupon_category', 'coupon_category_id', 'coupon_id');
    }
}