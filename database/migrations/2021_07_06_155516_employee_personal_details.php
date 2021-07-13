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

            $table->unsignedBigInteger('employee_id')->primary();
            $table->string('first_name')->nullable();

            $table->string('last_name')->nullable();

            $table->text('image')->nullable();

            $table->text('employee_email')->nullable();

            $table->string('city')->nullable();
            $table->string('state')->nullable();
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

            $table->foreign('employee_id')
                ->references('employee_id')
                ->on('employee_professional_details')
                ->onUpdate('cascade')
                ->onDelete('cascade');









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
