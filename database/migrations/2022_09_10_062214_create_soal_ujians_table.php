<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalUjiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soal_ujians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ujians_id');
            $table->foreignId('soals_id');
            $table->double('nilai')->default('0');
            $table->timestamp('waktu_tampil');
            $table->integer('ujian_order_soal');
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
        Schema::dropIfExists('soal_ujians');
    }
}
