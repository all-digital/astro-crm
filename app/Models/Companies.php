<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;

    protected $fillable = [
        'cnpj',
        'social_Reason',
        'fantasy_name',
        'status',
        'name_responsible',
        'last_name_responsible',
        'email_responsible',
        'color',
        'logo',
        'monthly_payment',
        'activation',
        'price_per_plate',
        'user_limit',
        'price_per_extra_user',
        'user_id'
    ];


    public function service()
    {
        return $this->hasMany(Services::class);
    }

    public function equipment()
    {
        return $this->hasMany(Equipaments::class);
    }

}//end class 
