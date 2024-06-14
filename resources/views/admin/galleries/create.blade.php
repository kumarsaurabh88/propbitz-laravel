@extends('layouts.admin')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

@section('content')

<div class="card">
    <div class="card-header">
     Testimonials
    </div>

    <div class="card-body">
        <form action="{{ route("admin.galleries.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
           
             <div class="form-group ">
                <label for="name">Title*</label>
               <input type="text" id="name" name="title" class="form-control"  required>
                   
            </div>
           <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                 <label for="name">Page *</label>
                 
                   
                           <select class="form-control" name="name">
                               <option value="media">Media</option>
                               <option value="cancer-awareness">Cancer-awareness</option>
							    <option value="about-us">about-us</option>
                                <option value="cancer-patient-navigation-program">cancer-patient-navigation-program</option>
                                <option value="cancer-relief">cancer-relief</option>
                                <option value="cancer-scholarship">cancer-scholarship</option>
                                <option value="cancer-screening">cancer-screening</option>
                                 <option value="cancer-treatment">cancer-treatment</option>
                                  <option value="covid-relief">covid-relief</option>
                                  <option value="covid-relief-hygiene">covid-relief-hygiene</option>
                                    <option value="covid-relief-kit">covid-relief-kit</option>
                                    <option value="covid-relief-mission">covid-relief-mission</option>
                                    <option value="covid-relief-kit-project-1">covid-relief-kit-project-1</option>
                                    <option value="breast-cancer">breast-cancer</option>
                                    <option value="pediatric-screening">pediatric-screening</option>
                                    
                                    <option value="covid-relief-project-2">covid-relief-project-2</option>
                                    
                                    
                           </select>
                
                
                </div>
         
        <div class="form-group " >
                <label for="name"> image* size(424 x 600)</label>
               
                <input required type="file" class=" img form-control" name="image[]" placeholder="image" multiple>
            </div>
     
            <div>
                <input class="btn btn-danger" id="leftButton" type="submit" value="{{ trans('global.save') }}">
                  <input class="btn btn-danger" type="button" value="Back" onClick="window.location.href = '{{ url("/admin/galleries") }}'">
            
            </div>
        </form>


    </div>
</div>

@endsection