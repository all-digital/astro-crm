<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name','company','description','responsible_for_insert','responsible_last_updated','date_last_updated','company_id'];


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

}
