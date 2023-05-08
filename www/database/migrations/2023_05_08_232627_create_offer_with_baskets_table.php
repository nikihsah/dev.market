<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_with_baskets', function (Blueprint $table) {
            $table->id();
            $table->integer('basket_id');
            $table->integer('offer_id');
            $table->integer('dealer_id');
            $table->integer('quantity');
            $table->integer('sum_price');
            $table->integer('track_number')->nullable();
            $table->integer('status_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_with_baskets');
    }
};
