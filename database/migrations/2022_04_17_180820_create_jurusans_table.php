<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJurusansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurusans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_jurusan');
            $table->text('desc_jurusan');
            $table->text('alasan1');
            $table->text('alasan2');
            $table->text('alasan3');
            $table->text('alasan4');
            $table->text('prospek1');
            $table->text('prospek2');
            $table->text('prospek3');
            $table->text('prospek4');
            $table->text('prospek5');
            $table->text('prospek6');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jurusans');
    }
}
