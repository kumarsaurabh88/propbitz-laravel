<?php
namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Hash;


class Career extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    // protected $fillable = ['name','email','mobile','resume'];
    protected $guarded = [];
    
    
     
 
    
}