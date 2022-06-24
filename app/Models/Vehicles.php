<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use Carbon\Carbon;

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
        'responsible_last_updated',
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


     //Accessor
    
    //  public function getCreatedAtAttribute($value)
    //  {
    //     $created_at = Carbon::parse($value, 'UTC');
    //     $value = $created_at->isoFormat('DD/MM/YYYY HH:mm');
 
    //     return $value;
        
    //  }
 
    //  public function getUpdatedAtAttribute($value)
    //  {
    //     $updated_at = Carbon::parse($value, 'UTC');
    //     $value = $updated_at->isoFormat('DD/MM/YYYY HH:mm');
        
    //     return $value;
        
    //  }



}// end class 

