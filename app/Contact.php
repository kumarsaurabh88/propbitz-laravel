<?php
namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Hash;


class Contact extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    // protected $fillable = ['name','lastname','email','technology','industry','msg','mobile','source_url'];
    protected $guarded = [];
    
    
     
 
    
}