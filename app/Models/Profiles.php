<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Profiles extends Model
{
    use HasFactory;
   

    protected $fillable = [
        'login',
        'profile', 
        'companie',
        'superiors',
        'status',
        'avatar',
        'company_id',
        'user_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function company()
    {
        return $this->belongsTo(Companies::class);
    }

}//end class

