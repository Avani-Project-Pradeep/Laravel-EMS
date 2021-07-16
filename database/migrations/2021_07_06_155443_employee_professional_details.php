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

            $table->unsignedBigInteger('employee_id')->primary();

            $table->date('doj');
            $table->string('designation');
            $table->string('employer_name')->nullable();
            $table->string('employer_email');



            $table->string('company_name');



            $table->string('department');

            $table->string('reporting_manager');
            $table->string('division');
            $table->string('shift');
            $table->string('employee_type');
            $table->tinyInteger('employee_status');
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
