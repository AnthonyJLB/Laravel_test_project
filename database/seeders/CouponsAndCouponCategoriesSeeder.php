<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Coupon;
use App\Models\CouponCategory;

class CouponsAndCouponCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // クーポンカテゴリーを作成
        $category1 = CouponCategory::create(['name' => 'セール']);
        $category2 = CouponCategory::create(['name' => '期間限定']);

        // クーポンを作成
        $coupon1 = Coupon::create(['coupon_class' => '1', 'url' => 'https://example.co.jp/', 'img_path' => '/img/coupon.png', 'sort_no' => 1, 'barcode_disp_dt' => '2024-02-01', 'start_dt' => '2024-02-01', 'end_dt' => '2099-01-01']);
        $coupon2 = Coupon::create(['coupon_class' => '1', 'url' => 'https://example.co.jp/', 'img_path' => '/img/coupon.png', 'sort_no' => 2, 'barcode_disp_dt' => '2024-02-01', 'start_dt' => '2024-02-01', 'end_dt' => '2099-01-01']);

        // クーポンとクーポンカテゴリーを関連付け
        $coupon1->categories()->attach($category1);
        $coupon2->categories()->attach($category2);
    }
}