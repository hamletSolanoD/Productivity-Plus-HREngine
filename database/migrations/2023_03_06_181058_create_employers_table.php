<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->boolean('outsource');
            $table->string('uuid');
            $table->string('persontype');//M moral F fisica
            $table->string('rfc');      
            $table->string('firstname')->nullable();
            $table->string('paternalsurname')->nullable();
            $table->string('maternalsurname')->nullable();
            $table->string('gender')->nullable();
            $table->string('birthdate')->nullable();
            $table->string('employerregistry')->nullable();
            $table->string('businessname');
            $table->string('tradename');
            $table->string('legalrepresentative')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('outsourceat')->nullable();
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
        Schema::dropIfExists('employers');
    }
}
