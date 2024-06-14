@extends('layouts.admin')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

@section('content')

<div class="card">
    <div class="card-header">
       Team Edit  
    </div>

    <div class="card-body">
        <form action="{{ route("admin.team.update", [$team->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            
              <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Name*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($team) ? $team->name : '') }}" required>
               
            </div>
            
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">occupation*</label>
                <input type="text" id="occupation" name="occupation" class="form-control" value="{{ old('occupation', isset($team) ? $team->occupation : '') }}" required>
               
            </div>
            
                   <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Type*</label>
              <select id="type" name="type" class="form-control select2"  required>
                          <option value="">Select One</option>
                          <option value="board_of_trustees"{{$team->type=="board_of_trustees"? 'selected' : '' }}>Board Of Trustees</option>
                           <option value="board_of_advisors"{{$team->type=="board_of_advisors"? 'selected' : '' }}>Board Of Advisors</option>
                            <option value="consultative_council"{{$team->type=="consultative_council"? 'selected' : '' }}>Consultative Council</option>
                          <option value="our_team"{{$team->type=="our_team"? 'selected' : '' }}>Our Team</option>
                          <option value="management_team"{{$team->type=="management_team"? 'selected' : '' }}>Management Team</option>
                        
                </select>
                </div>

            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Description*</label>
                 <textarea  name="description" rows="4" cols="50" class="form-control">{{$team->description}}
                     </textarea>
                    
                    <script>
                                CKEDITOR.replace('description');
                            </script>
            </div>
            
             <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name"> Profile image *</label>
                <img src="{{ URL::to('/') }}/public/uploads/team/{{ $team->image }}" class="img-thumbnail" width="100" />
                <input type="file" name="image" class="form-control"> 
            </div>
            
                 <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">linkedin*</label>
               <input type="text" id="linkedin" name="linkedin" value="{{ old('linkedin', isset($team) ? $team->linkedin : '') }}" class="form-control"  >
                   
            </div>
            
                 <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">twitter*</label>
               <input type="text" id="twitter" value="{{ old('twitter', isset($team) ? $team->twitter : '') }}" name="twitter" class="form-control"  >
                   
            </div>
            
              <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">instagram*</label>
               <input type="text" id="instagram" value="{{ old('instagram', isset($team) ? $team->instagram : '') }}" name="instagram" class="form-control"  >
                   
            </div>
            
            
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection