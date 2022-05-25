<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Address extends Model
{
    use HasFactory;

    protected $fillable = ['address','number_address','zip_code','city','country','state','complement','user_id', 'company_id','client_id'];


    public function user()
    {
        return $this->belongsTo(User::class,);
    }

    public function client()
    {
        return $this->belongsTo(Clients::class);
    }

    public function company()
    {
        return $this->belongsTo(Companies::class);
    }


}//end 
