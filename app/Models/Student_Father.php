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
class Student_Father extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    protected $guarded = ['id'];
    protected $table = 'student_father';
    
    public function student_father()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
    
   
    
}