<?php

namespace App\Http\Controllers;

use App\Models\Coupon;

class CouponsController extends Controller
{

    public function index()
    {
        return view('coupons')->with('coupons', Coupon::all());
    }

    public function detail(int $id)
    {
        return view('coupon', ['id' => $id, 'coupon' => Coupon::find($id)]);
    }
}