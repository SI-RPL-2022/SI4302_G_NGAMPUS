<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKampusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kampuses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_kampus');
            $table->text('desc_kampus');
            $table->string('picture');
            $table->string('biaya');
            $table->string('fakultas1');
            $table->string('jurusan1');
            $table->string('fakultas2');
            $table->string('jurusan2');
            $table->string('fakultas3');
            $table->string('jurusan3');
            $table->string('fakultas4');
            $table->string('jurusan4');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kampuses');
    }
}
