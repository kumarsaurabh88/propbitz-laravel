<?php
namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Hash;


class General_form extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    protected $fillable = ['name','email','mobile','gender','occupation','msg','associated','source_url'];
    
  		
     
 
    
}