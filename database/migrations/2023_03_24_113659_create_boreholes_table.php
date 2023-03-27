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
        Schema::create('boreholes', function (Blueprint $table) {
            $table->id();
            $table->string('x')->nullable()->comment('координата х');
            $table->string('y')->nullable()->comment('координата y');
            $table->string('z')->nullable()->comment('координата z (высота)');
            $table->string('depth')->nullable()->comment('глубина');
            $table->string('name_company')->nullable()->comment('Название компании');
            $table->string('phone_company')->nullable()->comment('телефон компании');
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
        Schema::dropIfExists('boreholes');
    }
};
