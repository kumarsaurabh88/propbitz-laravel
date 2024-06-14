@extends('layouts.admin')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

@section('content')

<div class="card">
    <div class="card-header">
     Fees 
    </div>

    <div class="card-body">
        <form action="{{ route("admin.fees.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
             <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Title*</label>
               <input type="text" id="title" name="name" class="form-control"  required>
                   
            </div>
            
             <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Class*</label>
                 {!! Form::select('sch_class_id', $sch_class, old('sch_class_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                   
            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Fees Type*</label>
                 {!! Form::select('fees_type_id', $fees_type, old('fees_type_id'), ['class' => 'form-control select2', 'required' => '']) !!}
                   
            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Fees Amount*</label>
               <input type="text" id="title" name="amount" class="form-control"  required>
                   
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                 <input class="btn btn-danger" type="button" value="Back" onClick="window.location.href = '{{ url("/admin/fees") }}'">
            </div>
        </form>


    </div>
</div>

 
@endsection