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
        'price_per_extra_user',
        'responsible_to_insert'   
    ];

    public function user()
    {
        return $this->hasMany(User::class,'company_id');
    }

    public function client()
    {
        return $this->hasMany(Clients::class,'company_id');
    }

    public function address()
    {
        return $this->hasOne(Address::class,'company_id');
    }

    public function services()
    {
        return $this->hasMany(Services::class,'company_id');
    }

    public function equipments()
    {
        return $this->hasMany(Equipments::class,'company_id');
    }

    public function simcards()
    {
        return $this->hasMany(Simcards::class,'company_id');
    }

    public function category()
    {
        return $this->hasOne(Category::class,'company_id');
    }
   

}//end class 
