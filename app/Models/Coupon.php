<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{

    protected $fillable = [
        'coupon_class',
        'url',
        'img_path',
        'sort_no',
        'view_flg',
        'del_flg',
        'barcode_disp_dt',
        'start_dt',
        'end_dt',
    ];

    public function categories()
    {
        return $this->belongsToMany(CouponCategory::class, 'coupon_coupon_category', 'coupon_id', 'coupon_category_id');
    }
}