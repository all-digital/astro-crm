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
            $table->string('cnpj')->nullable();
            $table->string('social_Reason')->nullable();
            $table->string('fantasy_name')->nullable();
            $table->string('status')->nullable();
            $table->string('name_responsible')->nullable();
            $table->string('last_name_responsible')->nullable();
            $table->string('email_responsible')->nullable();
            $table->string('color')->nullable();
            $table->string('logo')->nullable();
            $table->string('monthly_payment')->nullable();
            $table->string('activation')->nullable();
            $table->string('price_per_plate')->nullable();
            $table->string('user_limit')->nullable();
            $table->string('price_per_extra_user')->nullable();
            $table->string('responsible_to_insert')->nullable(); 
            $table->string('responsible_last_updated')->nullable();                  

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
