@extends('layouts.admin')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

@section('content')

<div class="card">
    <div class="card-header">
        Blog Edit
    </div>

    <div class="card-body">
        <form action="{{ route("admin.fees_type.update", [$fees_type->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            
              <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">title*</label>
                <input type="text" id="title" name="name" class="form-control" value="{{ old('name', isset($fees_type) ? $fees_type->name : '') }}" required>
               
            </div>
            
            
           <div>
            <input class="btn btn-danger" id="rightButton" type="submit" value="{{ trans('global.save') }}">
            <a href="{{url('/admin/fees_type')}}" class="btn btn-info" role="button">Back</a>
           <div>
        </form>


    </div>
</div>

@endsection