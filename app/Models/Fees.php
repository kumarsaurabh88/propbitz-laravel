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
class Fees extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    protected $guarded = ['id'];
    protected $table = 'fees';
    
    
    public function fees_type()
    {
        return $this->belongsTo(Fees_Type::class, 'fees_type_id');
    }
   
    public function sch_class()
    {
        return $this->belongsTo(Sch_Class::class, 'sch_class_id');
    }
   
    
}