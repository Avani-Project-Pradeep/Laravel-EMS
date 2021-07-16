<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmployeeRegistration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('employee_registration', function (Blueprint $table) {
            $table->string('first_name');
             $table->string('last_name');
            $table->text('image')->nullable();
            $table->string('phone_number');
            $table->string('email')->primary();
            $table->string('city');
            $table->string('state');
            $table->string('address');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();


    });

}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

