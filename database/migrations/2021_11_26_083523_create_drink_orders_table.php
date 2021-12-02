<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrinkOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drink_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('no_meja');
            $table->foreign('no_meja')->references('id')->on('tables')->onDelete('restrict');
            $table->unsignedBigInteger('minuman_dipesan')->nullable();
            $table->foreign('minuman_dipesan')->references('id')->on('drinks')->onDelete('restrict');
            $table->integer('porsi_minuman')->nullable();
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
        Schema::dropIfExists('drink_orders');
    }
}
