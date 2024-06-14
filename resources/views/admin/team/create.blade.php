@extends('layouts.admin')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

@section('content')

<div class="card">
    <div class="card-header">
     Team
    </div>

    <div class="card-body">
        <form action="{{ route("admin.team.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
             <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Name*</label>
               <input type="text" id="name" name="name" class="form-control"  required>
                   
            </div>
            
            
             <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Occupation*</label>
               <input type="text" id="occupation" name="occupation" class="form-control "  required>
                   
            </div>
            
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Type*</label>
              
                    <select id="type" name="type" class="form-control select2"  required>
                            <option value="">Select One</option>
                            <option value="board_of_trustees">Board Of Trustees</option>
                            <option value="board_of_advisors">Board Of Advisors</option>
                            <option value="consultative_council">Consultative Council</option>
                            <option value="our_team">Our Team</option>
                            <option value="management_team">Management Team</option>
                    </select>
            </div>
            
            
             
          
             <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name"> Description*</label>
                {!! Form::textarea('description', old('description'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                  <script>
                                CKEDITOR.replace('description');
                            </script>
            </div>
        
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Profile image*</label>
                <input type="file" name="image" class="form-control"> 
            </div>
            
              <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">linkedin*</label>
               <input type="text" id="linkedin" name="linkedin" class="form-control"  >
                   
            </div>
            
                 <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">twitter*</label>
               <input type="text" id="twitter" name="twitter" class="form-control"  >
                   
            </div>
            
              <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">instagram*</label>
               <input type="text" id="instagram" name="instagram" class="form-control"  >
                   
            </div>

            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                 <input class="btn btn-danger" type="button" value="Back" onClick="window.location.href = '{{ route("admin.team.index") }}'">
            </div>
        </form>


    </div>
</div>
@endsection