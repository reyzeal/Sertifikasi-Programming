<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('internships', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('instansi');
            $table->string('bagian');
            $table->string('pembimbing');
            $table->unsignedBigInteger('dosen_id');
            $table->timestamp('mulai')->nullable();
            $table->timestamp('akhir')->nullable();
            $table->string('pengantar')->nullable();
            $table->string('laporan')->nullable();
            $table->timestamp('disetujui')->nullable();
            $table->timestamps();

            $table->foreign('dosen_id')->references('id')->on('dosens');
        });
        Schema::table('mahasiswas',function(Blueprint $table){
          $table->foreign('partner_id')->references('id')->on('mahasiswas');
          $table->foreign('internship_id')->references('id')->on('internships');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswas',function(Blueprint $table){
          $table->dropForeign(['partner_id','internship_id']);
        });
        Schema::dropIfExists('internships');
    }
}
