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
class Sch_Class extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    protected $guarded = ['id'];
    protected $table = 'sch_class';
    
}