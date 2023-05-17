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

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('workday_id')->references('id')->on('workdays');
            $table->string('workday_uuid');
            $table->foreign('workday_uuid')->references('uuid')->on('workdays');
            $table->string('uuid')->unique();
            $table->string('type'); // a => activity, b => break
            $table->string('status');
            $table->dateTime('start');
            $table->dateTime('date');
            $table->dateTime('end')->nullable();
            $table->integer('minutes')->nullable();
            $table->string('timezone');
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('place')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->string('place_end')->nullable();
            $table->double('latitude_end')->nullable();
            $table->double('longitude_end')->nullable();
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
        Schema::dropIfExists('activities');
    }
}
