<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomoditiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komoditi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('kategori');
            $table->bigInteger('stok');
            $table->bigInteger('harga');
            $table->longText('deskripsi')->nullable();
            $table->string('file');
            $table->bigInteger('gram');
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
        Schema::dropIfExists('komoditi');
    }
}
