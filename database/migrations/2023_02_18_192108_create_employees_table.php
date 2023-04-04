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

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employer_id')->nullable()->references('id')->on('employers');
            $table->string('employer_uuid')->nullable();
            $table->foreign('employer_uuid')->references('uuid')->on('employers');
            $table->string('uuid')->unique();
            $table->string('firstname');
            $table->string('paternalsurname');
            $table->string('maternalsurname')->nullable();
            $table->string('gender'); // M male or F female
            $table->string('phone')->nullable();
            $table->string('email')->nullable()->unique();
            $table->date('birthdate');
            $table->string('birthstate')->nullable();
            $table->string('matrimonialregime')->nullable(); //SP Separation of Property', 'CS conjugal society
            $table->string('maritalstatus')->nullable();            
            $table->string('rfc')->nullable();    
            $table->string('curp')->unique();
            $table->string('nss')->nullable();
            $table->boolean('fonacot')->default(false);
            $table->decimal('fonacot_total')->nullable();
            $table->decimal('fonacot_discount')->nullable();
            $table->boolean('infonavit')->default(false);
            $table->string('infonavit_creditnumber')->nullable();
            $table->decimal('infonavit_discount')->nullable();
            $table->string('infonavit_factor')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
