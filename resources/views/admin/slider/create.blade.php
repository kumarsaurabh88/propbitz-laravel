@extends('layouts.admin')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

@section('content')

<div class="card">
    <div class="card-header">
     Testimonials
    </div>

    <div class="card-body">
        <form action="{{ route("admin.slider.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group ">
                <label for="name"> First Title*</label>
               <input type="text" id="name" name="up_title" class="form-control"  required>
                   
            </div>
             <div class="form-group ">
                <label for="name">Title*</label>
               <input type="text" id="name" name="title" class="form-control"  required>
                   
            </div>
            
            <div class="form-group ">
                <label for="name"> Sub Title*</label>
               <input type="text" id="name" name="sub_title" class="form-control"  required>
                   
            </div>
            
           <img id="blah"  width="100" height="100" />
    
        <div class="form-group ">
                <label for="name"> image*</label>
                 <input type="file" required class="img form-control" name="image"
    onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
            </div>

  <div class="form-group ">
                <label for="name">First Button Title</label>
               <input type="text" id="name" name="button_name1" class="form-control"  required>
                   
            </div>
              <div class="form-group ">
                <label for="name">First Button url</label>
               <input type="text" id="name" name="button_name1_url" class="form-control"  required>
                   
            </div>
            <div class="form-group ">
                <label for="name">Second Button Title</label>
               <input type="text" id="name" name="button_name2" class="form-control"  required>
                   
            </div>
              <div class="form-group ">
                <label for="name">Second Button Url</label>
               <input type="text" id="name" name="button_name2_url" class="form-control"  required>
                   
            </div>
            <div>
                <input class="btn btn-danger"  type="submit" value="{{ trans('global.save') }}">
                  <input class="btn btn-danger" type="button" value="Back" onClick="window.location.href = '{{ url("/admin/slider") }}'">
            
            </div>
        </form>


    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@endsection