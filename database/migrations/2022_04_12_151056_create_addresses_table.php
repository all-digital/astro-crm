<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();

            $table->string('address');
            $table->string('number_address',45);
            $table->string( 'zip_code',45);
            $table->string('city');
            $table->string('country');
            $table->string('state');
            $table->string('complement');

            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->nullable()->default(null);
            
            // $table->unsignedBigInteger('company_id');
            // $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade')->nullable()->default(null);

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
        Schema::dropIfExists('addresses');
    }
}
