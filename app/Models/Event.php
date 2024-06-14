<?php
namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Hash;

/**
 * Class User
 *
 * @package App
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
*/ 
class Event extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    protected $fillable = ['title','description','slug','type','year','image','image1','video','client','pax','location','quotes','quotes_writer','slider_image','assignment','atmosphere_title','atmosphere_description','euphoria_title','euphoria_description'];
    
    

    
    
}