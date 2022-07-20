<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

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

    public function vehicleEquipment()
    {
        return $this->belongsTo(Vehicles::class,'vehicle_id');
    }

    public function simcardEquipment()
    {
        return $this->belongsTo(Simcards::class, 'simcard_id');
    }



         //Accessor
    
         public function getCreatedAtAttribute($value)
         {
            $created_at = Carbon::parse($value, 'UTC');
            $value = $created_at->isoFormat('DD/MM/YYYY HH:mm');
     
            return $value;
            
         }
     
         public function getUpdatedAtAttribute($value)
         {
            $updated_at = Carbon::parse($value, 'UTC');
            $value = $updated_at->isoFormat('DD/MM/YYYY HH:mm');
            
            return $value;
            
         }

}
