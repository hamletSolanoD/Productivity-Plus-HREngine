<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkdaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workdays', function (Blueprint $table) {
            $table->id();
            $table->integer('employer_id');
            $table->string('employer_uuid');
            $table->integer('employee_id');
            $table->string('employee_uuid');
            $table->string('uuid');
            $table->string('status');
            $table->date('date');
            $table->dateTime('start');
            $table->dateTime('end')->nullable();
            $table->integer('minutes')->nullable();
            $table->string('timezone')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->string('place')->nullable();
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
        Schema::dropIfExists('workdays');
    }
}
