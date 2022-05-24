<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOrderSales extends Model
{
    use HasFactory;

    protected $fillable = [
        'client',
        'status',
        'company',        
        'type_order_of_service',
        'vehicles',
        'equipments',
        'simcard',
        'services',       
        'adhesion_fee',        
        'monthly_payment',        
        'recurrence',        
        'responsible_for_insert',
        'services_order_sale',
        'subtype',       
        'address_client',
        'zip_code_customer',
        'city_client',
        'country_client',
        'client_id'            
    ];


    public function client()
    {
        return $this->belongsTo(Clients::class);

    }
}//end class
