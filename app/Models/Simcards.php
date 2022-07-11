<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simcards extends Model
{
    use HasFactory;

    protected $fillable = [
        'company',
        'status',
        'responsible_for_insert',
        'provider',        
        'brand',
        'number_of_line',
        'iccid',
        'company_id',
        'responsible_last_updated',
        'client_id'                           
    ];

    public function equipment()
    {
        return $this->hasOne(Equipments::class ,'simcard_id');
    }

    public function client()
    {
        return $this->belongsTo(Clients::class);
    }

    public function company()
    {
        return $this->belongsTo(Companies::class);
    }

   
}//end class
