@extends('layouts.admin')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

@section('content')

<div class="card">
    <div class="card-header">
       Slider Edit  
    </div>

    <div class="card-body">
        <form action="{{ route("admin.community.update", [$community->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
             <div class="form-group ">
                <label for="name">Title*</label>
                
               <input type="text" id="name" name="title" class="form-control" value="{{ old('title', isset($community) ? $community->title : '') }}" required>
                   
            </div>
            
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name"> Description*</label>
<textarea  name="description" rows="4" cols="50" class="form-control">{{$community->description}}</textarea>
                  <script>
                                CKEDITOR.replace('description');
                            </script>
            </div>
              <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name"> image * Size(190 × 181 px)</label>
            
                 <img id="blah" src="{{ URL::to('/') }}/public/uploads/{{ $community->image }}" width="100" height="100" /><br>
    &nbsp;&nbsp;&nbsp;&nbsp; <input type="file" name="image"
    onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
            </div>
               <div class="form-group ">
                <label for="name">Link URL*</label>
                
               <input type="url" id="name" name="link_url" class="form-control" value="{{ old('link_url', isset($community) ? $community->link_url : '') }}" required>
                   
            </div>
            <div>
                <input class="btn btn-danger" type="submit"  value="{{ trans('global.save') }}">
                  <input class="btn btn-danger" type="button" value="Back" onClick="window.location.href = '{{ url("/admin/community") }}'">
            
            </div>
        </form>


    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@endsection