<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimoniProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimoni_produks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('jenisproduct');
            $table->string('id_user');
            $table->string('picture');
            $table->string('name');
            $table->string('desc');
            $table->string('show');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testimoni_produks');
    }
}
