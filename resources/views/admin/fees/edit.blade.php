@extends('layouts.admin')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

@section('content')

<div class="card">
    <div class="card-header">
        Fees Edit
    </div>

    <div class="card-body">
        <form action="{{ route("admin.fees.update", [$fees->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            
              <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">title*</label>
                <input type="text" id="title" name="name" class="form-control" value="{{ old('name', isset($fees) ? $fees->name : '') }}" required>
               
            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                 <label for="name">Class*</label>
                  <select name="sch_class_id"  class="form-control select2"  required>
                    @foreach($sch_class as $id => $sch_class)
                        <option value="{{ $id }}" {{ $fees->sch_class_id == $id ? 'selected' : '' }}>{{ $sch_class }}</option>
                      
                    @endforeach
                </select>  </div>
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                 <label for="name">Fees Type*</label>
                  <select name="fees_type_id"  class="form-control select2"  required>
                    @foreach($fees_type as $id => $fees_type)
                        <option value="{{ $id }}" {{ $fees->fees_type_id == $id ? 'selected' : '' }}>{{ $fees_type }}</option>
                      
                    @endforeach
                </select>  </div>
                 <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Fees Amount*</label>
                <input type="text" id="title" name="amount" class="form-control" value="{{ old('amount', isset($fees) ? $fees->amount : '') }}" required>
               
            </div>
            
           <div>
            <input class="btn btn-danger" id="rightButton" type="submit" value="{{ trans('global.save') }}">
            <a href="{{url('/admin/fees')}}" class="btn btn-info" role="button">Back</a>
           <div>
        </form>


    </div>
</div>

@endsection