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
        Schema::create('informasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_radio')->default('Serumpun Radio');
            $table->longText('alamat')->default('Jln. Raya sungai panas, bengkong laut, kec.Bengkong kota Batam, Kepulauan Riau');
            $table->string('streaming')->default('102.7 FM');
            $table->longText('gambar')->nullable();
            $table->longText('denah')->nullable();
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
        Schema::dropIfExists('informasis');
    }
};
