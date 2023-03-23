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

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->boolean('active');
            $table->string('type');//e => employee,  b => empoyeer,  a => admin
            $table->foreignId('employee_id')->nullable()->references('id')->on('employees');
            $table->string('employee_uuid')->nullable();
            $table->foreign('employee_uuid')->references('uuid')->on('employees');
            $table->foreignId('employer_id')->nullable()->references('id')->on('employers');
            $table->string('employer_uuid')->nullable();
            $table->foreign('employer_uuid')->references('uuid')->on('employers');
            $table->string('name');
            $table->string('uuid')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
