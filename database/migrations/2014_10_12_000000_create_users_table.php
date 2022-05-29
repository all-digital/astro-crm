<?php

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
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('login')->nullable();            
            $table->string('responsible_last_updated')->nullable();
            $table->string('superiors_id')->nullable();
            $table->string('status')->nullable();
            $table->string('avatar')->nullable(); 
           
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies');


            $table->string('password');                  
            $table->timestamp('email_verified_at')->nullable();
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
