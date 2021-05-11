<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_kp', function (blueprint $table){
          $table->char('nim');
          $table->char('nik'); 
          $table->integer('semester');
          $table->integer('tahun');
          $table->string('judul_kp');
          $table->string('status_kp');
          $table->string('status_ujian');
          $table->string('jadwal_ujian');
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
        //
    }
}
