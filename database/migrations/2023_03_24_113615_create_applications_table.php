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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('location')->nullable()->comment('ФИО');
            $table->string('type_boreholes')->nullable()->comment('тип скважины');
            $table->string('construction_borehole_pipes')->nullable()->comment('Конструкция труб скважины');
            $table->string('equipment')->nullable()->comment('Какая техника заедет');
            $table->dateTime('date_start')->nullable()->comment('С какой даты Вы готовы к проведению работ');
            $table->string('material')->nullable()->comment('Материал');
            $table->text('comment')->nullable()->comment('Комментарий');
            $table->unsignedTinyInteger('active')->default(1)->comment('Активна/нет');

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
        Schema::dropIfExists('applications');
    }
};
