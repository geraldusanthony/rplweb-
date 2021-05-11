<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Suratket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_ket', function (blueprint $table){
            $table->char('nim');
            $table->integer('semester');
            $table->integer('tahun');
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
