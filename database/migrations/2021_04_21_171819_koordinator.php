<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Koordinator extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('koordinator', function (blueprint $table){
            $table->char('id_koor');
            $table->string('nama');
            $table->string('nik_koor');
            $table->string('email');
            $table->string('password');
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
