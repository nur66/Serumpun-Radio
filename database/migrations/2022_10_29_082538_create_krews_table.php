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
        Schema::create('krews', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->default('Nama Krew');
            $table->longText('foto')->nullable();
            $table->string('jabatan')->default('koordinator program');
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
        Schema::dropIfExists('krews');
    }
};
