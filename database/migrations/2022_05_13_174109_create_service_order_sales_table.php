<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceOrderSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_order_sales', function (Blueprint $table) {
            $table->id();
            $table->string('client')->nullable();
            $table->string('status')->nullable();
            $table->string('company')->nullable();
            $table->string('type_order_of_service')->nullable();
            $table->string('vehicles')->nullable();
            $table->string('equipments')->nullable();
            $table->string('simcard')->nullable();
            $table->string('services')->nullable();
            $table->string('adhesion_fee')->nullable();
            $table->string('monthly_payment')->nullable();
            $table->string('recurrence')->nullable();            
            $table->string('responsible_for_insert')->nullable();
            $table->string('services_order_sale')->nullable();
            $table->string('subtype')->nullable();
            $table->string('address_client')->nullable();
            $table->string('zip_code_customer')->nullable();
            $table->string('city_client')->nullable();
            $table->string('country_client')->nullable();
                     
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
        Schema::dropIfExists('service_order_sales');
    }
}
