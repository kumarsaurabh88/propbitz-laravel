@extends('layouts.admin')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

@section('content')

<div class="card">
    <div class="card-header">
     Blog
    </div>

    <div class="card-body">
        <form action="{{ route("admin.news.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
             <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Title*</label>
               <input type="text" id="title" name="title" class="form-control"  required>
                   
            </div>

            <!-- <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Slug*</label>
               <input type="text" id="slug" name="slug" class="form-control"  required>
                   
            </div> -->

             <!-- <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Category*</label>
               <select name="category_id" class="form-control mb-0 " id="category">
                                            <option disabled="" selected="" class="invalid">Select one</option>
                                            @foreach($category as $post)
                                            <option value="{{$post->id}}">{{$post->name}}</option>
                                            @endforeach
                                            
                                        </select>
                   
            </div> -->
             
             <!-- <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Author*</label>
               <select name="author" class="form-control mb-0 " id="category">
                                            <option disabled="" selected="" class="invalid">Select one</option>
                                            @foreach($author as $post)
                                            <option value="{{$post->id}}">{{$post->name}}</option>
                                            @endforeach
                                            
                                        </select>
                   
            </div> -->
            
             <!-- <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Tag*</label>
              <select name="tags[]" id="tags" class="form-control select2" multiple="multiple" required>
                    @foreach($tags as $id => $tags)
                        <option value="{{$tags->id }}">{{ $tags->name }}</option>
                    @endforeach
                </select>
             </div> -->
             
             
             <div class="form-group col-md-4 {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name"> Date*</label>
                <input type="date" name="dates" class="form-control" value="<?php date('Y-m-d'); ?>" /></br>
                   
             <!-- <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name"> Description*</label>
                {!! Form::textarea('description', old('description'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                  <script>
                                CKEDITOR.replace('description');
                            </script>
            </div> -->
        
             <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">News Image*</label>
                <input type="file" name="image" required class="imgLeft form-control"> 
            </div>
            <!-- <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Banner image *</label>
                <input type="file" name="image1" class="imgCenter form-control"> 
            </div> -->
            
            
          
            
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