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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->foreignId('user_id');
            $table->string('identitas');
            $table->string('nomor');
            $table->foreignId('category_id');
            $table->date('jadwal');
            $table->bigInteger('penumpangdibawah60');
            $table->bigInteger('penumpangdiatas60');
            $table->foreignId('harga');
            $table->bigInteger('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
};
