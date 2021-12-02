<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('no_meja');
            $table->foreign('no_meja')->references('id')->on('tables')->onDelete('restrict');
            $table->unsignedBigInteger('makanan_dipesan')->nullable();
            $table->foreign('makanan_dipesan')->references('id')->on('food')->onDelete('restrict');
            $table->integer('porsi_makanan')->nullable();
            $table->unsignedBigInteger('servis');
            $table->foreign('servis')->references('id')->on('services')->onDelete('restrict');
            $table->string('status')->default('cook');
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
        Schema::dropIfExists('food_orders');
    }
}
