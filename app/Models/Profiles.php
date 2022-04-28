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
        'user_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


}//end class

