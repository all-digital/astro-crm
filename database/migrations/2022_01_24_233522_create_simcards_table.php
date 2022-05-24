<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimcardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simcards', function (Blueprint $table) {
            $table->id();
            $table->string('company')->nullable();
            $table->string('status')->nullable(); 
            $table->string('responsible_for_insert')->nullable();
            $table->string('provider')->nullable();
            $table->string('brand')->nullable();
            $table->string('number_of_line')->nullable();
            $table->string('iccid')->nullable();
            $table->string('avatar')->nullable();


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
        Schema::dropIfExists('simcards');
    }
}
