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
            $table->string('employer_name');
            $table->string('department');
            $table->string('employer_email');
            $table->string('reporting_manager');
            $table->string('division');
            $table->string('shift');
            $table->string('employee_type');
            $table->string('employee_status');
            $table->string('work_experience');
            $table->string('skills');
            $table->text('project');
            







        

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
