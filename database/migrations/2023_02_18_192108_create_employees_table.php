<?php

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
            $table->string('uuid');
            $table->integer('employeecontract_id')->nullable()->unsigned();
            //$table->foreignId('employeecontract_id')->nullable()->references('id')->on('employeecontract');
            $table->integer('employeeaddress_id')->nullable()->unsigned();
            //$table->foreignId('employeeaddress_id')->nullable()->references('id')->on('employeeaddress');
            $table->integer('employeebeneficiary_id')->nullable()->unsigned();
            //$table->foreignId('employeebeneficiary_id')->nullable()->references('id')->on('employeebeneficiary');
            $table->integer('employeesalary_id')->nullable()->unsigned();
            //$table->foreignId('employeesalary_id')->nullable()->references('id')->on('employeesalary');
            $table->integer('company_id')->nullable()->unsigned();
            $table->string('company_uuid')->nullable();
            $table->integer('customer_id')->nullable()->unsigned();
            $table->string('customer_uuid')->nullable();
            $table->string('type'); //I internal (company) C Client (client) E External (company and client)
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
