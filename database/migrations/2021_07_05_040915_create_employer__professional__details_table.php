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
            $table->unsignedBigInteger('user_id');

            $table->string('company_website');
            $table->text('tc');
            $table->text('docs');
            $table->string('phone');
            $table->string('location');
            $table->string('designation')->nullable();

            $table->string('division')->nullable();
            $table->date('doj')->nullable();
 
            $table->string('skills')->nullable();
 
            $table->string('work_experience')->nullable();
 
            $table->string('bank_details')->nullable();
 
            $table->foreign('user_id')->references('id')->on('users')

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
        Schema::dropIfExists('employer__professional__details');
    }
}
