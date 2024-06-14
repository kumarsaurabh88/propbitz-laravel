<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Crypt;
use Response;
use DB;
use App\Blog;
use App\Seo;

use App\Http\Controllers\Traits\MasterTrait;

class StudentController extends Controller
{
   use MasterTrait;
   public function admission(Request $request){
           $addmission='App\Primary_detail'::create($request->all()); 
           $student='App\Student'::create([
                'primary_persion_id'=> $addmission->id,
                'application_no'=>'SCR-'.time(),
            ]);
           return redirect('admission-form-step-2/'.$student->id);
        
    }
    public function admission_edit(Request $request, $id){
           $student_data='App\Student'::findOrFail($id);
           $addmission='App\Primary_detail'::where('id',$student_data->primary_persion_id)->first(); 
           $addmission_data='App\Primary_detail'::findOrFail($addmission->id);
           $addmission_data->update($request->all());
           return redirect('admission-form-step-2/'.$id);
        
    }
    public function admission2(Request $request,$id){
           //return $request->mother_home_mobile;
          $student_data='App\Student'::findOrFail($id);
           $form_data = array(
            'contact_person'=> $request->contact_person,
            'contact_email'=> $request->contact_email,
             );
           $student_data->update($form_data);
            $student_father_data='App\Student_Father'::where('student_id',$id)->value('id');
             $student_father='App\Student_Father'::findOrNew($student_father_data);
           //
          
                $student_father->first_name= $request->first_name;
                $student_father->last_name= $request->last_name;
                $student_father->education= $request->education;
                $student_father->income= $request->income;
                $student_father->occupation= $request->occupation;
                $student_father->email = $request->email;
                $student_father->mobile= $request->mobile;
                $student_father->home_mobile = $request->home_mobile;
                $student_father->student_id=$id;
            
            $student_father->save();
            
            //return $id;
            $student_mo_id='App\Student_Mother'::where('student_id',$id)->value('id');
             //dd($student_mo_id);
             $student_mother='App\Student_Mother'::findOrNew($student_mo_id);
             //return $student_mother;
           $student_mother->first_name= $request->mother_name;
                $student_mother->last_name= $request->mother_lname;
                $student_mother->education= $request->mother_education;
                $student_mother->income= $request->mother_income;
                $student_mother->occupation= $request->mother_occupation;
                $student_mother->email = $request->mother_email;
                $student_mother->mobile= $request->mother_mobile;
                $student_mother->home_mobile = $request->mother_home_mobile;
                
                $student_mother->student_id=$id;
            $student_mother->save();
            
           return redirect('admission-form-step-3/'.$id);
        
    }
    
    public function admission3(Request $request,$id){
           //return $request->all();
           $student='App\Student'::findOrFail($id);
           $form_data = array(
            'first_name'=> $request->first_name,
            'last_name'=> $request->last_name,
             'dob'=> $request->dob,
            'gender'=> $request->gender,
             'mobile'=> $request->mobile,
             'mobile_home'=> $request->mobile_home,
            'nationality'=> $request->nationality,
             'birth_place'=> $request->birth_place,
            'ad_class'=> $request->ad_class,
             'present_class'=> $request->present_class,
            'present_school'=> $request->present_school,
             'present_school_city'=> $request->present_school_city,
            'present_school_country'=> $request->present_school_country,
            'blood_group'=> $request->blood_group,
            'lang'=> $request->lang,
             'region'=> $request->region,
            'cast'=> $request->cast,
            'emergency_persion'=> $request->emergency_persion,
            'emergency_persion_name'=> $request->emergency_persion_name,
             'emergency_persion_mobile'=> $request->emergency_persion_mobile,
            'emergency_persion_address'=> $request->emergency_persion_address,
            'emergency_persion_relation'=> $request->emergency_persion_relation,
            'primary_persion_id'=> $request->id,
            
            
            
            
             );
           $student->update($form_data);
            $student_data='App\Student_address'::where('student_id',$id)->value('id');
             $student_address='App\Student_address'::findOrNew($student_data);
           //
          
                $student_address->residentail= $request->residentail;
                $student_address->bulding_no= $request->bulding_no;
                $student_address->area= $request->area;
                $student_address->area= $request->area;
                $student_address->landmark= $request->landmark;
                $student_address->city = $request->city;
                $student_address->country= $request->country;
                $student_address->pin_code= $request->pin_code;
                $student_address->socity_name= $request->socity_name;
                $student_address->student_id=$id;
            
            $student_address->save();
            return redirect('admission-form-step-4/'.$id);
        
    }
    public function admission4(Request $request,$id){
           //return $request->all();
                 $fileName1=null;
                 $fileName2=null;
                 $fileName3=null;
        if (request()->hasFile('tc')) {
            $file = request()->file('tc');
            $fileName1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('./public/uploads/', $fileName1);    
        }
        if (request()->hasFile('marksheet')) {
            $file = request()->file('marksheet');
            $fileName2 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('./public/uploads/', $fileName2);    
        }
        if (request()->hasFile('other')) {
            $file = request()->file('other');
            $fileName3 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('./public/uploads/', $fileName3);    
        }
                $student_data='App\Document'::where('student_id',$id)->value('id');
                $student_address='App\Document'::findOrNew($student_data);
                $student_address->tc= $fileName1;
                $student_address->marksheet= $fileName2;
                $student_address->other= $fileName3;
                $student_address->pick_up_persion= $request->pick_up_persion;
                $student_address->student_id=$id;
            
            $student_address->save();
            return redirect('admission-thankyou');
        
    }
    
}    