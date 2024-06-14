<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_Image extends Model
{
    protected $table = 'product_images';
    
    protected $fillable = [
       'url','url1','pakage_id'
    ];

    public function product()
    {
      return $this->belongsTo('App\Models\Pakage', 'pakage_id');
    }

}
