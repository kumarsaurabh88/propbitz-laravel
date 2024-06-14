<?php
namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Hash;

class Receipt extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    protected $guarded = ['id'];
    protected $table = 'receipts';
    
    
    /*public function isa_application()
    {
        return $this->belongsTo(ISAapplication::class, 'user_id','user_id');
    }*/

    /*public function invoice()
    {
        return $this->belongsTo(Invoice::class, 'id','transaction_id');
    }*/

    /*public function user_info()
    {
        return $this->belongsTo(UserInfo::class, 'user_id','user_id');
    }*/

   /* public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id','id');
    }

    public function specialized_course()
    {
        return $this->belongsTo(SpecializedCourse::class, 'course_id','id');
    }
   
    public function course_category()
    {
        return $this->belongsTo(CourseCategory::class, 'course_category_id','id');
    }*/
    
}