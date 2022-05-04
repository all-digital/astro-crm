<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'price_per_extra_user'    
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function service()
    {
        return $this->hasMany(Services::class);
    }

    public function equipment()
    {
        return $this->hasMany(Equipments::class);
    }

    public function address()
    {
        return $this->hasOne(Address::class,'company_id');
    }

    public function profile()
    {
        return $this->hasMany(Profiles::class);
    }

}//end class 
