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
            $table->boolean('active');
            $table->boolean('outsource')->nullable();
            $table->string('uuid')->unique();
            $table->string('outsourceat')->nullable();
            $table->string('persontype');//M moral F fisica
            $table->string('rfc');
            $table->string('employerregistry')->nullable();
            $table->string('tradename')->unique();
            $table->string('businessname')->nullable();
            $table->string('firstname')->nullable();
            $table->string('paternalsurname')->nullable();
            $table->string('maternalsurname')->nullable();
            $table->string('gender')->nullable();//M male F female
            $table->string('birthdate')->nullable();
            $table->string('legalrepresentative')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
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
