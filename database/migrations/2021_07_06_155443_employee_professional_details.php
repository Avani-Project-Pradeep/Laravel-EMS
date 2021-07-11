<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmployeeProfessionalDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::connection('mysql')->create('employee_professional_details', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedBigInteger('employee_id');
            $table->string('employee_email');

            $table->date('doj');
            $table->string('designation');
            $table->string('company_name');
            $table->string('department');

            $table->string('reporting_manager');
            $table->string('division');
            $table->string('shift');
            $table->string('employee_type');
            $table->string('employee_status');
            $table->tinyInteger('status')->default('1');
            $table->string('work_experience')->nullable();
            $table->string('skills')->nullable();
            $table->text('project')->nullable();
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
