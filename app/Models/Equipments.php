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
        'company_id'
    ];


    public function company()
    {
        return $this->belongsTo(Companies::class);
    }

}
