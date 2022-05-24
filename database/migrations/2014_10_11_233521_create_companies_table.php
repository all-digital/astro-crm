<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('cnpj');
            $table->string('social_Reason');
            $table->string('fantasy_name');
            $table->string('status');
            $table->string('name_responsible');
            $table->string('last_name_responsible');
            $table->string('email_responsible');
            $table->string('color');
            $table->string('logo');
            $table->string('monthly_payment');
            $table->string('activation');
            $table->string('price_per_plate');
            $table->string('user_limit');
            $table->string('price_per_extra_user');          

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
        Schema::dropIfExists('companies');
    }
}
