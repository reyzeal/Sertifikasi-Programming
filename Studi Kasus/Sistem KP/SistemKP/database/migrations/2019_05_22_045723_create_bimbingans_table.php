<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBimbingansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('bimbingans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('internship_id');
            $table->unsignedBigInteger('dosen_id');
            $table->string('keterangan')->nullable();
            $table->timestamp('waktu')->nullable();
            $table->timestamps();

            $table->foreign('internship_id')->references('id')->on('internships');
            $table->foreign('dosen_id')->references('id')->on('dosens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bimbingans');
    }
}
