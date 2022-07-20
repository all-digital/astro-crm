<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

    public function equipmentSimcard()
    {
        // return $this->belongsTo(Equipments::class);
        return $this->hasOne(Equipments::class,'simcard_id');
    }

    public function client()
    {
        return $this->belongsTo(Clients::class);
    }

    public function company()
    {
        return $this->belongsTo(Companies::class);
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

   
}//end class
