<?php
namespace App\Models;

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
class Pakage extends Authenticatable
{
    use Notifiable;
    use HasRoles; 
    protected $fillable = ['title','slug','tags','location','category','accommodation','description','description1','description2'];
     
    protected $table = 'pakages';



    public function firstimage()
    {
        return $this->belongsTo(Product_Image::class, 'id', 'pakage_id')->orderBy('id', 'asc');
    }
    

        public function Location()
    {
        return $this->belongsTo(Location::class, 'location');
    }
    
       public function Accommodation()
    {
        return $this->belongsTo(Accommodation::class, 'accommodation');
    }

        public function Category()
    {
        return $this->belongsTo(Category::class, 'category');
    }

    
    public function product_variants()
    {
        return $this->hasMany(ProductVariants::class, 'package_id');
        
    }

    public function variants_price()
    {
        return $this->belongsTo(ProductVariants::class,  'id','package_id')->orderBy('price', 'asc');
        
    }

    public function variants_price_desc()
    {
        return $this->belongsTo(ProductVariants::class,  'id','package_id')->orderBy('price', 'desc');
        
    }

}
