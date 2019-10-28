<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('nim')->unique();
            $table->string('kelamin');
            $table->string('alamat');
            $table->string('hp');
            $table->string('email')->unique();
            $table->unsignedBigInteger('partner_id')->nullable();
            $table->unsignedBigInteger('internship_id')->nullable();
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

        Schema::dropIfExists('mahasiswas');
    }
}
