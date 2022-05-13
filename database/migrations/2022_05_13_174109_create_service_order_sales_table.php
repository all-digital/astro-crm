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
            $table->string('customer');
            $table->string('status');
            $table->string('company');
            $table->string('type_order_of_service');
            $table->string('vehicles');
            $table->string('equipments');
            $table->string('simcard');
            $table->string('services');
            $table->string('adhesion_fee');
            $table->string('monthly_payment');
            $table->string('recurrence');
            $table->string('customer_adress');
            $table->string('responsible_for_insert');
            $table->string('services_order_sale');
            $table->string('subtype');
            $table->string('adress_customer');
            $table->string('zip_code_customer');
            $table->string('city_customer');
            $table->string('country_customer');

            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers');           
           
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
