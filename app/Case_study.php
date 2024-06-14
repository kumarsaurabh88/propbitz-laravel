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
class Case_study extends Authenticatable
{
    use Notifiable;
    use HasRoles;


protected $table = 'case_study';

    protected $fillable = ['title','category_id','description','slug','type','image','image1','author_id','tags','created_at'];
    
    
     public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
 
   public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }
    
     public function tag()
    {
        return $this->belongsTo(Tag::class, 'tags');
    }
    
    
}