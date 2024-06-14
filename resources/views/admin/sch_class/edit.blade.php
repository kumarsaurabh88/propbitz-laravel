@extends('layouts.admin')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

@section('content')

<div class="card">
    <div class="card-header">
        Class Edit
    </div>

    <div class="card-body">
        <form action="{{ route("admin.sch_class.update", [$sch_class->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            
              <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">title*</label>
                <input type="text" id="title" name="name" class="form-control" value="{{ old('name', isset($sch_class) ? $sch_class->name : '') }}" required>
               
            </div>
            
            
           <div>
            <input class="btn btn-danger" id="rightButton" type="submit" value="{{ trans('global.save') }}">
            <a href="{{url('/admin/sch_class')}}" class="btn btn-info" role="button">Back</a>
           <div>
        </form>


    </div>
</div>

@endsection