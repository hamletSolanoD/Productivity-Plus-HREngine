<?php
/*
╔══════════════════════════════════════════════════╗
║        © 2023 Productivity Plus HR Engine        ║
╠══════════════════════════════════════════════════╣
║   In memory of Patricia Ivonne Alvarez Avitia!   ║
╚══════════════════════════════════════════════════╝
*/
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
            $table->foreignId('employer_id')->nullable()->references('id')->on('employers');
            $table->string('employer_uuid')->nullable();
            $table->foreign('employer_uuid')->references('uuid')->on('employers');
            $table->foreignId('employee_id')->nullable()->references('id')->on('employees');
            $table->string('employee_uuid')->nullable();
            $table->foreign('employee_uuid')->references('uuid')->on('employees');
            $table->string('uuid')->unique();
            $table->string('status');
            $table->date('date');
            $table->dateTime('start');
            $table->dateTime('end')->nullable();
            $table->integer('minutes')->nullable();
            $table->string('timezone');
            $table->double('latitude');
            $table->double('longitude');
            $table->string('place');
            $table->double('latitude_out')->nullable();
            $table->double('longitude_out')->nullable();
            $table->string('place_out')->nullable();
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
