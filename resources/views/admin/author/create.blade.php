@extends('layouts.admin')
<!--<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>-->
<script src="https://cdn.ckeditor.com/4.19.1/full/ckeditor.js"></script>
@section('content')

<div class="card">
    <div class="card-header">
     Author
    </div>

    <div class="card-body">
        <form action="{{ route("admin.author.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
             <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Name*</label>
               <input type="text" id="title" name="name" class="form-control"  required>
                   
            </div>
            
             <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Designation*</label>
               <input type="text" id="title" name="designation" class="form-control"  >
                   
            </div>
            
            
             
             
             <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name"> Description*</label>
                {!! Form::textarea('description', old('description'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                  <script>
                                CKEDITOR.replace('description');
                            </script>
            </div>
        
             <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Featured Image*</label>
                <input type="file" name="image" required class="imgLeft form-control"> 
            </div>
            
            
          
            
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                 <input class="btn btn-danger" type="button" value="Back" onClick="window.location.href = '{{ url("/admin/author") }}'">
            </div>
        </form>


    </div>
</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 

@endsection