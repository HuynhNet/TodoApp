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

            $table->unsignedBigInteger('ma_quyen');
            $table->foreign('ma_quyen')->references('id')
                ->on('quyens')->onUpdate('cascade')
                ->onDelete('cascade');

            $table->unsignedBigInteger('ma_trang_thai');
            $table->foreign('ma_trang_thai')->references('id')
                ->on('trang_thais')->onUpdate('cascade')
                ->onDelete('cascade');

            $table->string('username');
            $table->string('password');
            $table->string('phone');
            $table->string('email');
            $table->date('birthday');
            $table->string('gender');

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
