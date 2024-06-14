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
class Slider extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    protected $fillable = ['up_title','image','title','sub_title','button_name1','button_name1_url','button_name2','button_name2_url'];
    
  
 
    
}