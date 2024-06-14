<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Hash;


class Career extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    // protected $fillable = ['name','email','mobile','resume'];
    
    protected $guarded = [];
     
    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }
    
}