<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->string('id_user');
            $table->string('namaproduct');
            $table->string('jenisproduct');
            $table->string('penyelenggara');
            $table->text('desc');
            $table->string('kuota');
            $table->date('tanggal');
            $table->string('lokasi');

            $table->string('name');
            $table->string('no_telp');
            $table->string('email');
            $table->text('alasan');
            $table->string('status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftars');
    }
}
