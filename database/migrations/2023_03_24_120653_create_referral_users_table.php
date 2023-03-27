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
        Schema::create('referral_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_parent_id');
            $table->unsignedBigInteger('user_id');
            $table->string('slug')->nullable()->comment('Адресс реферальной ссылки');
            $table->dateTime('time_first_open_url')->nullable()->comment('Дата и время первого открытия ссылки');
            $table->dateTime('time_register')->nullable()->comment('Дата и время регистрации');
            $table->dateTime('time_first_application')->nullable()->comment('Дата и время первой заявки');

            $table->foreign('user_parent_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('referral_users');
    }
};
