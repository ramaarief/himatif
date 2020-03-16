<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProkerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proker', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Proker', 70);
            $table->date('Tanggal_Pelaksanaan');
            $table->string('Tempat', 50);
            $table->bigInteger('kapel_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('kapel_id')->references('id')->on('member')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proker');
    }
}
