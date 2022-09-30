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
        Schema::create('thong_tin_gio_hang__models', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ttkh_id');
            $table->integer('product_id');
            $table->integer('qty');
            $table->integer('price');
            $table->foreign('ttkh_id')->references('id')->on('thong_tin_khach_hang__models')->onDelete('cascade');
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
        Schema::dropIfExists('thong_tin_gio_hang__models');
    }
};
