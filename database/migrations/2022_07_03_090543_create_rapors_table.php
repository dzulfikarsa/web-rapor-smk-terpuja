<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rapor', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('nis_siswa');
            $table->foreign('nis_siswa')->references('nis')->on('siswa')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_mapel');
            $table->foreign('id_mapel')->references('id')->on('mapel')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('nilai');
            $table->string('huruf');
            $table->string('predikat');
            $table->timestamps();
            $table->primary(['nis_siswa','id_mapel']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rapor');
    }
};
