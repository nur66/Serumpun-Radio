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
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->default('Judul Berita');
            $table->string('sub_judul')->default('Sub Judul Berita')->nullable();
            $table->string('caption', 200)->default('Caption')->nullable();
            $table->longText('deskripsi')->default('Deskripsi');
            $table->string('kategori',50)->default('Poitik');
            $table->longText('image')->nullable();
            $table->enum('tipe', ['Headline News', 'Popular News', 'Lates News']);
            $table->foreignId('kategori_id');
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
        Schema::dropIfExists('beritas');
    }
};
