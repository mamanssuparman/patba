<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarUjiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_ujians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pelajarans_id');
            $table->string('nama_ujian','200');
            $table->dateTime('waktu_ujian');
            $table->dateTime('waktu_selesai');
            $table->double('score_nilai');
            $table->integer('jumlah_soal');
            $table->double('score_max');
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
        Schema::dropIfExists('daftar_ujians');
    }
}
