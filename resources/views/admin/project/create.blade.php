@extends('layouts.admin')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

@section('content')

<div class="card">
    <div class="card-header">
     Project
    </div>

    <div class="card-body">
        <form action="{{ route("admin.project.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
             <div class="row">
                <div class="col-md-4 form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name">Title*</label>
                   <input type="text" id="title" name="title" class="form-control"  required>
                       
                 </div>
                 <div class="col-md-4 form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name">Location*</label>
                   <input type="text" id="location" name="location" class="form-control"  required>
                       
                 </div>
                 {{-- <div class="col-md-4 form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name">Purpose</label>
                   <input type="text" id="purpose" name="purpose" class="form-control">
                       
                 </div> --}}
                 <div class="col-md-4 form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name">Category*</label>
                   <select name="category_id" class="form-control mb-0 " id="category">
                        <option disabled="" selected="" class="invalid">Select one</option>
                        @foreach($category as $post)
                        <option value="{{$post->id}}">{{$post->name}}</option>
                        @endforeach
                        
                    </select>
                       
                </div>
                <div class="form-group col-md-4 {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name"> Date*</label>
                    <input type="date" name="dates" class="form-control" value="<?php date('Y-m-d'); ?>" /></br>
                 </div>
                 <div class="form-group col-md-4 {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name">Project Image*</label>
                    <input type="file" name="image" required class="imgLeft form-control"> 
                </div>
             </div>
            
            
            
            
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                 <input class="btn btn-danger" type="button" value="Back" onClick="window.location.href = '{{ url("/admin/news") }}'">
            </div>
        </form>


    </div>
</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 

@endsection