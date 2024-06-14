<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Hash;


class Contact extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    protected $fillable = ['name','email','msg','mobile','source_url','company'];
    
    
     
 
    
}