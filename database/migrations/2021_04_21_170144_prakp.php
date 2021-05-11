<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Prakp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_prakp', function (blueprint $table){
            $table->char('nim');
            $table->char('nik');
            $table->integer('semester');
            $table->integer('tahun'); 
            $table->string('status_prakp');
            $table->string('tools');
            $table->string('spesifikasi');
            $table->string('penguji');
            $table->string('ruang');
            $table->string('lembaga');
            $table->string('pimpinan');
            $table->string('alamat');
            $table->char('notelp'); 
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
