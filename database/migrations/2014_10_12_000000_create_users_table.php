<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('alamat',100)->nullable();
            $table->unsignedBigInteger('kota')->nullable();
            $table->string('token')->nullable();
            // $table->unsignedBigInteger('role_id')->nullable();
            $table->string('no_rekening')->nullable();
            $table->enum('status', ['actived', 'blocked', 'pending'])->default('pending');      
            $table->string('ip_address')->nullable();    
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('kota')->references('id')->on('reffkotas')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
