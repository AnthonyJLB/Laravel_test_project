<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->integer('coupon_class')->nullable()->unsigned();
            $table->string('url')->nullable();
            $table->string('img_path')->nullable();
            $table->integer('sort_no')->nullable()->unsigned();
            $table->boolean('view_flg')->default(true);
            $table->boolean('del_flg')->default(false);
            $table->date('barcode_disp_dt')->nullable();
            $table->date('start_dt')->nullable();
            $table->date('end_dt')->nullable();
            $table->timestamps();
        });

        Schema::create('coupon_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->timestamps();
        });

        Schema::create('coupon_coupon_category', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('coupon_id');
            $table->unsignedBigInteger('coupon_category_id');
            $table->timestamps();

            $table->foreign('coupon_id')->references('id')->on('coupons')->onDelete('cascade');
            $table->foreign('coupon_category_id')->references('id')->on('coupon_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupon_coupon_category');
        Schema::dropIfExists('coupons');
        Schema::dropIfExists('coupon_categories');
    }
};