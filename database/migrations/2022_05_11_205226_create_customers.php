<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('status');
            $table->string('name_responsible');
            $table->string('type');
            $table->string('cnpj_cpf');
            $table->string('social_reason');
            $table->string('fantasy_name');
            $table->string('name');
            $table->string('cell_phone');
            $table->string('phone');
            $table->string('whatsapp_phone');
            $table->string('email');
            $table->string('email_finance');
            $table->string('tracking_platform');

           $table->unsignedBigInteger('company_id');
           $table->foreign('company_id')->references('id')->on('companies');    

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
        Schema::dropIfExists('customers');
    }
}
