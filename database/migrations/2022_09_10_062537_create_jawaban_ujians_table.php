<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanUjiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_ujians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('soal_ujian_id');
            $table->foreignId('jawabans_id');
            $table->enum('jawaban_pilih',['1','0'])->default('0');
            $table->integer('jawaban_oders');
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
        Schema::dropIfExists('jawaban_ujians');
    }
}
