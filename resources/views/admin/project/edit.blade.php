@extends('layouts.admin')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

@section('content')

<div class="card">
    <div class="card-header">
        Project Edit
    </div>

    <div class="card-body">
        <form action="{{ route("admin.project.update", [$project->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            
              <div class="row">
              <div class="form-group col-md-4  {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Title*</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', isset($project) ? $project->title : '') }}" required>
               
            </div>

            <div class="form-group col-md-4  {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Location*</label>
                <input type="text" id="title" name="location" class="form-control" value="{{ old('title', isset($project) ? $project->location : '') }}" required>
               
            </div>
            <!-- <div class="form-group col-md-4  {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Purpose*</label>
                <input type="text" id="title" name="purpose" class="form-control" value="{{ old('title', isset($project) ? $project->purpose : '') }}" required>
               
            </div> -->
            <div class="col-md-4 form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Category*</label>
               <select name="category_id" class="form-control mb-0 " id="category">
                    <option disabled="" selected="" class="invalid">Select one</option>
                    @foreach($category as $cats)
                    <option value="{{$cats->id}}" <?php if($cats->id == $project->category_id){ echo 'selected';} ?>>{{$cats->name}}</option>
                    @endforeach
                    
                </select>
                   
            </div>

                
                <div class="form-group col-md-4 {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name"> Date*</label>
                <input type="date" name="dates" class="form-control" value="{{ date("Y-m-d", strtotime($project->created_at))}}" />
                   </div>

                   <div class="form-group col-md-4 {{ $errors->has('name') ? 'has-error' : '' }}">
                        <label for="name">Project Image * </label>
                        <input type="file" name="image" class="imgLeft form-control"> 
                    </div>
                    @if(@$project->image)
                    <div class="col-md-4">
                        <img src="{{ URL::to('/') }}/uploads/Project/{{ $project->image }}" class="img-thumbnail" width="350px" height="300px" />
                    </div>
                    @endif
              </div>
                
           
            <input class="btn btn-danger" id="rightButton" type="submit" value="{{ trans('global.save') }}">
          
           <div>
        </form>


    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
<!-- <script type="text/javascript">

    $(document).ready(function(){
        $("#rightButton").prop('disabled', false);
      //  $(".imgCenter").prop('disabled', true);
       
        var _URL = window.URL || window.webkitURL;
    
        
        $(".imgLeft").change(function(){
            var file, img;
            if ((file = this.files[0])) {
                img = new Image();
                
                img.onload = function(){
                    if(this.width > 350 || this.height > 300 ){
                        alert("Please upload image in this dimension: 350x300px and uploaded size is " + this.width+'x'+this.height+' px');
                        
                        $("#rightButton").prop('disabled', true);
                    }
                    else if(this.width < 350 || this.height < 300){
                        alert("Please upload image in this dimension: 350x300px and uploaded size is " + this.width+'x'+this.height+' px');
                         
                        $("#rightButton").prop('disabled', true);
                    }
                    else if(this.width === 350 && this.height === 300){
                        $("#rightButton").prop('disabled', false); 
                    }
                };
                img.onerror = function() {
                     alert( "not a valid file: " + file.type);
                };
                img.src = _URL.createObjectURL(file);
            }
        });
        
        $(".imgCenter").change(function() {
                var file_center, img_center;
                if ((file_center = this.files[0])) {
                    img_center = new Image();
                    
                    img_center.onload = function(){
                    if(this.width > 1349 || this.height > 400 ){
                        alert("Please upload image in this dimension: 1349x400px and uploaded size is " + this.width+'x'+this.height+' px');
                        
                        $("#rightButton").prop('disabled', true);
                    }
                    else if(this.width < 1349 || this.height < 400){
                        alert("Please upload image in this dimension: 1349x400px and uploaded size is " + this.width+'x'+this.height+' px');
                       
                        $("#rightButton").prop('disabled', true);
                    }
                    else if(this.width === 1349 && this.height === 400){
                       $("#rightButton").prop('disabled', false);
                        }
                    };
                    img_center.onerror = function() {
                        alert( "not a valid file: " + file_center.type);
                    };
                    img_center.src = _URL.createObjectURL(file_center);
                }
            });
        
             
    }); 
</script>-->
@endsection