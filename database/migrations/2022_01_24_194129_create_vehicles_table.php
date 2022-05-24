<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();

            $table->string('company')->nullable();
            $table->string('status')->nullable();
            $table->string('responsible_for_insert')->nullable();
            $table->string('date_of_insert')->nullable();
            $table->string('type')->nullable();
            $table->string('model')->nullable();
            $table->string('brand')->nullable();
            $table->string('year')->nullable();
            $table->string('value')->nullable();
            $table->string('equipment')->nullable();

            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
          
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
        Schema::dropIfExists('vehicles');
    }
}
