<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployerPersonalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('employer_personal_details', function (Blueprint $table) {
            $table->increments('id');

            $table->string('employer_email');

            $table->foreign('employer_email')->references('email')->on('users')

            ->onDelete('cascade')->onUpdate('cascade');


            $table->string('first_name')->nullable();
 
            $table->string('last_name')->nullable();
 
            $table->string('image')->nullable();
           
            $table->string('phone');

 
            $table->string('city');
            $table->string('state');
            $table->date('dob')->nullable();
 
            $table->string('gender')->nullable();
 
            $table->string('address')->nullable();
 
            $table->string('education')->nullable();
 

    
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
        Schema::dropIfExists('employer__personal__details');
    }
}
