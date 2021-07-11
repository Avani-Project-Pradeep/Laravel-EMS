<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmployeePersonalDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('employee_personal_details', function (Blueprint $table) {
           
            $table->increments('id');
            $table->unsignedBigInteger('employee_id');
            $table->string('employee_email');
            $table->string('first_name')->nullable();
 
            $table->string('last_name')->nullable();
 
            $table->text('image')->nullable();
            
 
            $table->string('city');
            $table->string('state');
            $table->date('dob')->nullable();
 
            $table->string('gender')->nullable();
 
            $table->string('address')->nullable();
 
            $table->string('education')->nullable();

            $table->string('bloodtype')->nullable();

            $table->string('phone')->nullable();

            $table->string('emergency_phone_number')->nullable();

            $table->string('pan')->nullable();

            $table->string('aadhar')->nullable();

            $table->string('permanent_address')->nullable();

            $table->string('current_address')->nullable();






 

    
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
        //
    }
}
