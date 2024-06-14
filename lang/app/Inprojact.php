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
class Inprojact extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    
    

    protected $fillable = [ 'p_category', 'p_title', 'p_discription', 'p_image','project_id'];
    
    
     public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
 
   
    
    
}