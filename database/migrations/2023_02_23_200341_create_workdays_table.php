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
            $table->string('employee_uuid');
            $table->string('client_uuid')->nullable();
            $table->string('company_uuid')->nullable();
            //$table->string('uuid');
            $table->string('status');
            $table->date('date');
            $table->dateTime('start');
            //quitar
            $table->dateTime('pause')->nullable();            
            $table->dateTime('resume')->nullable();
            $table->dateTime('end')->nullable();
            $table->integer('minutes')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->string('place')->nullable();
            //start end
            //activity 
            //description
            //status start end
            //activity files id uuid file
            //type work / brake 
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
