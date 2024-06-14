@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Tags
    </div>

    <div class="card-body">
        <form action="{{ route("admin.tags.update", [$tag->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.user.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($tag) ? $tag->name : '') }}" required>
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.user.fields.name_helper') }}
                </p>
            </div>
            
            
           
            <div>
                <input class="btn btn-danger"  type="submit" value="{{ trans('global.save') }}">
                <input class="btn btn-danger" type="button" value="Back" onClick="window.location.href = '{{url("admin/tags")}}'">
            </div>
        </form>


    </div>
</div>


@endsection