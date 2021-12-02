<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTotalHargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('total_hargas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('makanan_dipesan');
            $table->foreign('makanan_dipesan')->references('id')->on('food_orders')->onDelete('restrict');
            $table->unsignedBigInteger('minuman_dipesan');
            $table->foreign('minuman_dipesan')->references('id')->on('drink_orders')->onDelete('restrict');
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
        Schema::dropIfExists('total_hargas');
    }
}
