<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vas', function (Blueprint $table) {
            $table->id();
            $table->string('kode',16)->nullable();
            $table->string('no_induk',30)->nullable();
            $table->string('nama',30)->nullable();
            $table->string('tahun',30)->nullable();
            $table->string('nominal',30)->nullable();
            $table->string('nominal_bayar',30)->nullable();
            $table->string('semester',30)->nullable();
            $table->string('tgl_bayar')->nullable();
            $table->string('status',30)->nullable();

            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users');
            $table->unsignedBigInteger('prodi')->nullable();
            $table->foreign('prodi')->references('id')->on('reffprodis');
            $table->unsignedBigInteger('jenis')->nullable();
            $table->foreign('jenis')->references('id')->on('reffjenis');
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
        Schema::dropIfExists('vas');
    }
}
