<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'last_name',
        'email',        
        'login',
        'avatar',
        // 'company',
        'status',
        'password',
        'responsible_last_updated',
        'superiors_id',  
        'last_acess',     
        'company_id'        
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function company()
    {
        return $this->belongsTo(Companies::class);
    }

    //Relations permission rules
    public function roles()
    {
        return $this->belongsToMany(Role::class,'user_roles','user_id','role_id' );
    }

    public function address()
    {
        return $this->hasOne(Address::class);
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

     //methods

     //metodo para registrar sempre o ultimo acesso do usuario..
     public function registerAccess()
     {
        // return $this->update([
        //     'last_acess' => date('YmdHis'),
        // ]);

        $this->last_acess = date('YmdHis');
        $this->timestamps = false;

        return $this->save();

     }//end methods

    
}//end class
