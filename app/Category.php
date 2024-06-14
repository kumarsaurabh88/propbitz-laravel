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
class Category extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    protected $fillable = ['name','sections','image','slug'];
    
    public function correct_size($photo) {
    $maxHeight = 100;
    $maxWidth = 100;
    list($width, $height) = getimagesize($photo);
    return ( ($width <= $maxWidth) && ($height <= $maxHeight) );
}
    /**
     * Hash password
     * @param $input
     */
   
    
}
