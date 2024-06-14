@extends('layouts.admin')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

@section('content')

<div class="card">
    <div class="card-header">
    Ymc communities 
    </div>

    <div class="card-body">
        <form action="{{ route("admin.community.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
             <div class="form-group ">
                <label for="name">Title*</label>
               <input type="text" id="name" name="title" class="form-control"  required>
                   
            </div>
            
               <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name"> Description*</label>
                {!! Form::textarea('description', old('description'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                  <script>
                                CKEDITOR.replace('description');
                            </script>
            </div>
            
            
            
           <img id="blah"  width="100" height="100" />
    
        <div class="form-group ">
                <label for="name"> image*</label>
                 <input type="file" required class="img form-control" name="image"
    onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
            </div>
          <div class="form-group ">
                <label for="name">link url</label>
               <input type="text" id="link_url" name="link_url" class="form-control"  >
                   
            </div>
            <div>
                <input class="btn btn-danger"  type="submit" value="{{ trans('global.save') }}">
                  <input class="btn btn-danger" type="button" value="Back" onClick="window.location.href = '{{ url("/admin/ymc_communities") }}'">
            
            </div>
        </form>


    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@endsection