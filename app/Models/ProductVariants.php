<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Hash;

class ProductVariants extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    protected $table = 'product_variants';
    protected $guarded = [];
    public $timestamps = false;

    public function Package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }
}


