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
class News extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    // protected $fillable = ['title','category_id','description','slug','image','author_id','tags','created_at'];
    protected $guarded = [];
    
    
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