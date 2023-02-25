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
            /*
            $table->boolean('rfc')->default(false);
            $table->string('rfc_value')->nullable();
            $table->string('rfc_uuid')->nullable();
            $table->boolean('curp')->default(false);
            $table->string('curp_value');
            $table->string('curp_uuid')->nullable();
            $table->boolean('nss')->default(false);
            $table->string('nss_value')->nullable();
            $table->string('nss_uuid')->nullable();
            $table->boolean('fonacot')->default(false);
            $table->decimal('fonacot_total', 16, 2)->nullable();
            $table->decimal('fonacot_discount', 16, 2)->nullable();
            $table->string('fonacot_uuid')->nullable();
            $table->boolean('infonavit')->default(false);
            $table->string('infonavit_creditnumber')->nullable();
            $table->decimal('infonavit_discount', 16, 2)->nullable();
            $table->decimal('infonavit_factor')->nullable();
            $table->string('infonavit_uuid')->nullable();
            $table->boolean('bankcontract')->default(false);
            $table->string('bankcontract_interbankkey')->nullable();
            $table->string('bankcontract_uuid')->nullable();
            $table->boolean('jobapplication')->default(false);
            $table->string('jobapplication_uuid')->nullable();
            $table->boolean('birthcertificate')->default(false);
            $table->string('birthcertificate_uuid')->nullable();
            $table->boolean('studycertificate')->default(false);
            $table->string('studycertificate_uuid')->nullable();
            $table->boolean('proofofaddress')->default(false);
            $table->string('proofofaddress_uuid')->nullable();
            $table->boolean('workcontract')->default(false);
            $table->string('workcontract_uuid')->nullable();
            $table->boolean('workregulation')->default(false);
            $table->string('workregulation_uuid')->nullable();
            $table->boolean('bankpolicy')->default(false);
            $table->string('bankpolicy_uuid')->nullable();
            $table->boolean('idcard')->default(false);
            $table->string('idcard_uuid')->nullable();
            $table->boolean('infonavitprequalification')->default(false);
            $table->string('infonavitprequalification_uuid')->nullable();
            $table->boolean('fonacotdisclaimer')->default(false);
            $table->string('fonacotdisclaimer_uuid')->nullable();
            $table->boolean('agreementformat')->default(false);
            $table->string('agreementformat_uuid')->nullable();
            $table->boolean('settlementreceipt')->default(false);
            $table->string('settlementreceipt_uuid')->nullable();
            $table->boolean('administrativerecord')->default(false);
            $table->string('administrativerecord_uuid')->nullable();
            */
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
