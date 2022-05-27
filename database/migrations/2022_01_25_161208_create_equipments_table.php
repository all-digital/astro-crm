<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipments', function (Blueprint $table) {
            $table->id();   
            $table->string('company')->nullable();
            $table->string('client')->nullable(); 
            $table->string('vehicle')->nullable();      
            $table->string('status')->nullable();
            $table->string('provider')->nullable();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('imei')->nullable();
            $table->string('simcard')->nullable();            
            $table->string('responsible_for_insert')->nullable();

            $table->unsignedBigInteger('company_id')->nullable();
            $table->foreign('company_id')->references('id')->on('companies');

            $table->unsignedBigInteger('simcard_id')->nullable();
            $table->foreign('simcard_id')->references('id')->on('simcards');

            $table->unsignedBigInteger('vehicle_id')->nullable();
            $table->foreign('vehicle_id')->references('id')->on('vehicles');

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
        Schema::dropIfExists('equipments');
    }
}
