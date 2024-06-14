@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} Student
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            Student application No.
                        </th>
                        <td>
                            {{ $student->application_no }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Student Name
                        </th>
                        <td>
                            {{ $student->first_name }} {{ $student->last_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            DOB
                        </th>
                        <td>
                            {{ $student->dob}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Gender
                        </th>
                        <td>
                            {{ $student->gender}}
                        </td>
                    </tr>
                    
                    
                    <tr>
                        <th>
                        Blood Group
                        </th>
                        <td>
                            {{ $student->blood_group}}
                        </td>
                    </tr>
                    
                    
                    <tr>
                        <th>
                       Religion
                        </th>
                        <td>
                            {{ $student->region}}
                        </td>
                    </tr>
                    
                    
                    
                    <tr>
                        <th>
                           Present School
                        </th>
                        <td>
                            {{ $student->present_school}}
                        </td>
                    </tr>
                     <tr>
                        <th>
                           Present School City
                        </th>
                        <td>
                            {{ $student->present_school_city}}
                        </td>
                    </tr>
                     <tr>
                        <th>
                           Present Class Studying
                        </th>
                        <td>
                            {{ $student->present_class}}
                        </td>
                    </tr>
                   
                    <tr>
                        <th>
                           Admission For Class
                        </th>
                        <td>
                           {{$student->ad_class}}
                        </td>
                    </tr>
                </tbody>
            </table>
            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>


    </div>
    
    <div class="card-header">
        Student Father Detail
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <?php
                 $student_father='App\Student_Father'::where('student_id',$student->id)->first();
                             $student_mother='App\Student_Mother'::where('student_id',$student->id)->first();
                          
                ?>
                <tbody>
                    
                    <tr>
                        <th>
                         Name
                        </th>
                        <td>
                            {{ $student_father->first_name }} {{ $student_father->last_name }}
                        </td>
                    
                        <th>
                            Email
                        </th>
                        <td>
                            {{ $student_father->email}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Occupation
                        </th>
                        <td>
                           {{$student_father->occupation}}
                        </td>
                    
                        <th>
                            Income
                        </th>
                        <td>
                           {{$student_father->income}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Mobile
                        </th>
                        <td>
                           {{$student_father->mobile}}
                        </td>
                    </tr>
                </tbody>
            </table>
            
        </div>


    </div>
    <div class="card-header">
        Student Mother Detail
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                
                <tbody>
                    
                    <tr>
                        <th>
                         Name
                        </th>
                        <td>
                            {{ $student_mother->first_name }} {{ $student_mother->last_name }}
                        </td>
                    
                        <th>
                            Email
                        </th>
                        <td>
                            {{ $student_mother->email}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Occupation
                        </th>
                        <td>
                           {{$student_mother->occupation}}
                        </td>
                    
                        <th>
                            Income
                        </th>
                        <td>
                           {{$student_mother->income}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Mobile
                        </th>
                        <td>
                           {{$student_mother->mobile}}
                        </td>
                    </tr>
                </tbody>
            </table>
            
        </div>


    </div>
</div>
@endsection