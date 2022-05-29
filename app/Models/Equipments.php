<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipments extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'responsible_for_insert',       
        'provider',
        'brand',
        'model',
        'imei',
        'simcard',
        'client',
        'vehicle',
        'company',
        'responsible_last_updated',
        'company_id',
        'simcard_id',
        'vehicle_id',
    ];


    public function company()
    {
        return $this->belongsTo(Companies::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicles::class);
    }

    public function simcard()
    {
        return $this->belongsTo(Vehicles::class);
    }

}
