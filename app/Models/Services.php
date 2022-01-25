<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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



}//end class
