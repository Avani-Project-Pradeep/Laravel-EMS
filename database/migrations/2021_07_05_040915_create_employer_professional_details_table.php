<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployerProfessionalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('employer_professional_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employer_email');
            $table->foreign('employer_email')->references('email')->on('users')
                  ->onDelete('cascade')->onUpdate('cascade');

            $table->string('company_name');

            $table->string('company_website');
            $table->text('tc');
            $table->text('docs');
            $table->string('location');
            $table->string('designation')->nullable();

            $table->string('division')->nullable();
            $table->date('doj')->nullable();

            $table->string('skills')->nullable();

            $table->string('work_experience')->nullable();

            $table->string('bank_details')->nullable();


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
        Schema::dropIfExists('employer__professional__details');
    }
}
