<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('company')->nullable();
            $table->string('phase')->nullable();
            $table->string('status')->nullable();
            $table->string('name_responsible')->nullable();
            $table->string('type')->nullable();
            $table->string('cnpj_cpf')->nullable();
            $table->string('social_reason')->nullable();
            $table->string('fantasy_name')->nullable();            
            $table->string('cell_phone')->nullable();
            $table->string('phone')->nullable();
            $table->string('whatsapp_phone')->nullable();
            $table->string('email')->nullable();
            $table->string('email_finance')->nullable();
            $table->string('tracking_platform')->nullable();
            $table->string('responsible_last_updated')->nullable();

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
        Schema::dropIfExists('clients');
    }
}
