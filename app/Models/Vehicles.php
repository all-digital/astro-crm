<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    use HasFactory;

    protected $fillable = [
        'company',
        'status',
        'responsible_for_insert',        
        'date_of_insert',
        'type',
        'model',
        'brand',
        'year',       
        'license_plate',
        'value',
        'equipment',
        'client_id'               
        
    ];

    public function client()
    {
        return $this->belongsTo(Clients::class);
    }

    public function equipment()
    {
        return $this->hasOne(Equipments::class,'vehicle_id');
    }



}// end class 

