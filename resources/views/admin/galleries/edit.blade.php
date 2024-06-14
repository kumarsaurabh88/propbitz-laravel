@extends('layouts.admin')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

@section('content')

<div class="card">
    <div class="card-header">
       Gallery Edit  
    </div>

    <div class="card-body">
        <form action="{{ route("admin.galleries.update", [$gallery->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
              
           
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                 
                 
                 <label for="name">Page *</label> 

                 <input type="text" name="title" class="form-control"  value="{{$gallery->title}}" placeholder="enter image caption">

             </div>

                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                 
                 
                            <label for="name">Page *</label>
                 
                           <select class="form-control" name="name">
                                <option value="about-us" {{$gallery->name=="about-us"? 'selected' : '' }}>about-us</option>
                               <option value="media" {{$gallery->name=="media"? 'selected' : '' }}>Media</option>
                               
                               
                               <option value="cancer-awareness" {{$gallery->name=="Cancer-awareness"? 'selected' : '' }}>Cancer-awareness</option>
                                <option value="cancer-patient-navigation-program"{{$gallery->name=="cancer-patient-navigation-program"? 'selected' : '' }}>cancer-patient-navigation-program</option>
                                <option value="cancer-relief"{{$gallery->name=="cancer-relief"? 'selected' : '' }}>cancer-relief</option>
                                <option value="cancer-scholarship"{{$gallery->name=="cancer-scholarship"? 'selected' : '' }}>cancer-scholarship</option>
                                <option value="cancer-screening" {{$gallery->name=="cancer-screening"? 'selected' : '' }}>cancer-screening</option>
                                 <option value="cancer-treatment" {{$gallery->name=="cancer-treatment"? 'selected' : '' }}>cancer-treatment</option>
                                  <option value="covid-relief"{{$gallery->name=="covid-relief"? 'selected' : '' }}>covid-relief</option>
                                  <option value="covid-relief-hygiene"{{$gallery->name=="covid-relief-hygiene"? 'selected' : '' }}>covid-relief-hygiene</option>
                                    <option value="covid-relief-kit"{{$gallery->name=="covid-relief-kit"? 'selected' : '' }}>covid-relief-kit</option>
                                    <option value="covid-relief-mission"{{$gallery->name=="covid-relief-mission"? 'selected' : '' }}>covid-relief-mission</option>
                                    <option value="covid-relief-kit-project-1"{{$gallery->name=="covid-relief-kit-project-1"? 'selected' : '' }}>covid-relief-kit-project-1</option>
                                    <option value="covid-relief-project-2"{{$gallery->name=="covid-relief-project-2"? 'selected' : '' }}>covid-relief-project-2</option>
                                       <option value="breast-cancer"{{$gallery->name=="breast-cancer"? 'selected' : '' }}>breast-cancer</option>
                                    <option value="pediatric-screening"{{$gallery->name=="pediatric-screening"? 'selected' : '' }}>pediatric-screening</option>
                           </select>
                               
                           
                
                
                </div>
            
             <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
               <label for="name"> image* size(424 x 600)</label>
                <input type="file" name="image" class="img form-control">
                 <img src="{{ URL::to('/') }}/public/uploads/gallery/{{ $gallery->image }}" class="img-thumbnail"  width="100" />
                               
            </div>
            <div>
                <input class="btn btn-danger" type="submit" id="leftButton" value="{{ trans('global.save') }}">
                  <input class="btn btn-danger" type="button" value="Back" onClick="window.location.href = '{{ url("/admin/galleries") }}'">
            
            </div>
        </form>


    </div>
</div>

@endsection