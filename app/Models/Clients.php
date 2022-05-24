<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\Address;

class Clients extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'company',        
        'phase',
        'status',
        'name_responsible',
        'type',
        'cnpj_cpf',       
        'social_reason',        
        'fantasy_name',        
        'cell_phone',
        'phone',
        'whatsapp_phone',
        'email',
        'email_finance',       
        'tracking_platform',
        'company_id'
        
    ];



    public function address()
    {
        return $this->hasOne(Address::class);
    }

    public function company()
    {
        return $this->belongsTo(Companies::class);
    }

    public function vehicles()
    {
        return $this->hasMany(Vehicles::class);
    }

    public function serviceOrderMaintenances()
    {
        return $this->hasMany(ServiceOrderMaintenances::class);
    }

    public function serviceOrderSales()
    {
        return $this->hasMany(ServiceOrderSales::class);
    }


}//end class 
