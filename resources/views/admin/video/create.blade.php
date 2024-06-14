@extends('layouts.admin')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

@section('content')

<div class="card">
    <div class="card-header">
    Video Gallery
    </div>

    <div class="card-body">
        <form action="{{ route("admin.video.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
             <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Title*</label>
               <input type="text" id="title" name="title" class="form-control"  required>
                   
            </div>

             <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Page*</label>
               <select name="page"  required class="form-control mb-0 " id="page">
        <option disabled="" selected="" class="invalid">Select one</option>
                                           
         <option value="media">Media</option>
                   </select>
                   
            </div>
             
             <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name"> Image </label>
                <input type="file" name="image"  class="imgLeft form-control" Required> 
            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Video Link </label>
                <input type="text"  name="video" class="imgCenter form-control" Required> 
            </div>
            
            
          
            
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                 <input class="btn btn-danger" type="button" value="Back" onClick="window.location.href = '{{ url("/admin/video") }}'">
            </div>
        </form>


    </div>
</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 

@endsection