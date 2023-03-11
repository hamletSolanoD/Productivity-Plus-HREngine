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
            $table->integer('employeecontract_id')->nullable();
            $table->string('employeecontract_uuid')->nullable();
            /*
            $table->foreignId('employeecontract_id')->nullable()->references('id')->on('employeecontracts');
            $table->string('employeecontract_uuid')->nullable();
            $table->foreign('employeecontract_uuid')->references('uuid')->on('employeecontracts');
            */
            $table->integer('employeeaddress_id')->nullable();
            $table->string('employeeaddress_uuid')->nullable();
            /*
            $table->foreignId('employeeaddress_id')->nullable()->references('id')->on('employeeaddress');
            $table->string('employeeaddress_uuid')->nullable();
            $table->foreign('employeeaddress_uuid')->references('uuid')->on('employeeaddress');
            */
            $table->integer('employeebeneficiary_id')->nullable();
            $table->string('employeebeneficiary_uuid')->nullable();
            /*
            $table->foreignId('employeebeneficiary_id')->nullable()->references('id')->on('employeebeneficiares');
            $table->string('employeebeneficiary_uuid')->nullable();
            $table->foreign('employeebeneficiary_uuid')->references('uuid')->on('employeebeneficiares');
            */
            $table->integer('employeesalary_id')->nullable();
            $table->string('employeesalary_uuid')->nullable();
            /*
            $table->foreignId('employeesalary_id')->nullable()->references('id')->on('employeesalaries');
            $table->string('employeesalary_uuid')->nullable();
            $table->foreign('employeesalary_uuid')->references('uuid')->on('employeesalaries');
            */
            $table->foreignId('employer_id')->nullable()->references('id')->on('employers');
            $table->string('employer_uuid')->nullable();
            $table->foreign('employer_uuid')->references('uuid')->on('employers');
            $table->string('uuid')->unique();
            $table->string('firstname');
            $table->string('paternalsurname');
            $table->string('maternalsurname')->nullable();
            $table->string('gender'); // M male or F female
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->date('birthdate');
            $table->string('birthstate')->nullable();
            $table->string('matrimonialregime')->nullable(); //SP Separation of Property', 'CS conjugal society
            $table->string('maritalstatus')->nullable();            
            $table->string('rfc')->nullable();    
            $table->string('curp')->nullable();
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
