<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Services extends Model
{
    use HasFactory;

    protected $fillable = [
        'company',       
        'status',
        'category',
        'name',
        'price',
        'responsible_for_insert',
        'company_id'
    ];


    
    
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
