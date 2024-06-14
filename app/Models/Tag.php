<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Hash;

class Tag extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    protected $fillable = ['name','slug'];
    
}
