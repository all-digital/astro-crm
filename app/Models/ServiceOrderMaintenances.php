<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOrderMaintenances extends Model
{
    use HasFactory;

    protected $fillable = [
        'client',
        'status',
        'company',
        'subtype',        
        'type_order_of_service',
        'vehicles',
        'equipments',
        'simcard',
        'services',       
        'cost',        
        'new_equipment',        
        'new_simcard',
        'address_client',
        'zip_code_client',
        'city_client',
        'country_client',       
        'responsible_for_insert'                   
    ];


    public function client()
    {
        return $this->belongsTo(Clients::class);

    }


}// end class

