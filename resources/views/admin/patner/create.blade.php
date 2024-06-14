@extends('layouts.admin')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

@section('content')

<div class="card">
    <div class="card-header">
     Testimonials
    </div>

    <div class="card-body">
        <form action="{{ route("admin.patner.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
           
            <div class="form-group ">
                <label for="name">Patner Title*</label>
               <input type="text" id="name" name="title" class="form-control"  required>
                   
            </div>
           <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                 <label for="name">Patner Type *</label>
                 
                   
                           <select class="form-control"  name="type" required>
                                <option value="">Select One</option>
                               <option value="government-partner">Government Partner</option>
                               <option value="corporate-partner">Corporate Partner</option>
                                <option value="institutions-organizations">Institutions & Organizations</option>
                                <option value="hospital-partners">Hospital Partners</option>
                           </select>
                
                
                </div>
         
        <div class="form-group " >
                <label for="name">Patner Logo * size(100 x 100)</label>
               
                <input required type="file" class=" img form-control" name="image[]" placeholder="image" required="" multiple>
            </div>
     
            <div>
                <input class="btn btn-danger" id="leftButton" type="submit" value="{{ trans('global.save') }}">
                  <input class="btn btn-danger" type="button" value="Back" onClick="window.location.href = '{{ url("/admin/patner") }}'">
            
            </div>
        </form>


    </div>
</div>

@endsection