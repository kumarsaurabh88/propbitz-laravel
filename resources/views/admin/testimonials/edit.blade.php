@extends('layouts.admin')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

@section('content')

<div class="card">
    <div class="card-header">
       Ambassador Edit  
    </div>

    <div class="card-body">
        <form action="{{ route("admin.testimonials.update", [$testimonial->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            
              <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Name*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($testimonial) ? $testimonial->name : '') }}" required>
               
            </div>
            
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">occupation*</label>
                <input type="text" id="occupation" name="occupation" class="form-control" value="{{ old('occupation', isset($testimonial) ? $testimonial->occupation : '') }}" required>
               
            </div>
            
        <!--    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Type*</label>
                 <select id="type" name="type" class="form-control select2"  >
                     <option value="{{ old('type', isset($testimonial) ? $testimonial->type : '') }}">{{ old('type', isset($testimonial) ? $testimonial->type : '') }}</option>
                          <option value="celebrity">celebrity</option>
                          <option value="customer">customer</option>
                     
             
               
            </div>-->

            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Description*</label>
                 <textarea  name="description" rows="4" cols="50" class="form-control">{{$testimonial->description}}
                     </textarea>
                    
                    <script>
                                CKEDITOR.replace('description');
                            </script>
            </div>
            
             <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name"> Profile image*(216*216 px)</label>
                <img src="{{ URL::to('/') }}/public/uploads/{{ $testimonial->image }}" class="img-thumbnail" width="100" />
                <input type="file" name="image" class="form-control"> 
            </div>
            
            
            
          
       
           
          
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection