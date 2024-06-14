@extends('layouts.admin')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

@section('content')

<div class="card">
    <div class="card-header">
        Blog Edit
    </div>

    <div class="card-body">
        <form action="{{ route("admin.project.update", [$project->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            
              <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">title*</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', isset($project) ? $project->title : '') }}" required>
               
            </div>
            
                
           
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Description*</label>
                 <textarea  name="description" rows="4" cols="50" class="form-control">{{$project->description}}
                     </textarea>
                    
                   <script>
                                CKEDITOR.replace('description');
                            </script>
            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Featured Image * </label>
                <input type="file" name="image" class="imgLeft form-control"> 
            </div>
            @if(@$project->image)
            <div class="col-md-12 pl-0">
                {{-- <img src="{{ URL::to('/') }}/public/uploads/project/{{ $project->image }}" class="img-thumbnail" width="350px" height="300px" /> --}}
                <img src="{{ URL::to('/') }}/public/uploads/Project/{{ $project->image }}" class="img-thumbnail" width="350px" height="300px" />
                
            </div>
            @endif
           <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Banner image  </label>
                <input type="file" name="image1" class="imgCenter form-control"> 
            </div>
            @if(@$project->image1)
            <div class="col-md-12 pl-0">
                {{-- <img src="{{ URL::to('/') }}/public/uploads/project/{{ $project->image1 }}" class="img-thumbnail" width="400px" height="400px" /> --}}
                <img src="{{ URL::to('/') }}/public/uploads/Project/{{ $project->image1 }}" class="img-thumbnail" width="400px" height="400px" />

            </div>
            @endif
            <div>
                 <table class="table table-bordered" id="dynamicTable">  
            <tr>
                <th>category</th>
                <th>title</th>
               <th>discription</th>
                 <th>image</th>
               
                
                <th>Action</th>
            </tr>
            @if($inprojacts)
            @foreach($inprojacts as $key=> $in_projacts)
            @php
            $faq_key = $key
            @endphp
            <tr>  
                <td><input type="text" name="p_category[{{$key}}]" value="{{$in_projacts->p_category}}" placeholder="Enter your category" class="form-control" /></td> 
                 <td><input type="text" name="p_title[{{$key}}]" value="{{$in_projacts->p_title}}" placeholder="Enter your title" class="form-control" /></td>  
                <td><input type="text" name="p_discription[{{$key}}]" value="{{$in_projacts->p_discription}}" placeholder="Enter your discription" class="form-control" /></td> 
                <td><input type="file" name="p_image[{{$key}}]" value="{{$in_projacts->p_image}}" placeholder="Enter your image" class="form-control" /></td>  
            </tr>  
            
            @endforeach
            @endif
            
            <tr><td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td> </tr> 
        </table> 
            <input class="btn btn-danger" id="rightButton" type="submit" value="{{ trans('global.save') }}">
           <!-- <a href="https://veganaffair.88gravity.com/admin/blog" class="btn btn-info" role="button">Back</a>-->
           <div>
               
              
               
               
               
        </form>


    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
 <script type="text/javascript">
   
    var i = {{isset($faq_key) ? $faq_key : 0}};
       
    $("#add").click(function(){
   
        ++i;
   
        $("#dynamicTable").append('<tr><td><input type="text" name="p_category['+i+']" placeholder="Enter your category" class="form-control" /></td><td><input type="text" name="p_title['+i+']" placeholder="Enter your title" class="form-control" /></td><td><input type="text" name="p_discription['+i+']" placeholder="Enter your desription" class="form-control" /></td><td><input type="file" name="p_image['+i+']" placeholder="Enter your title" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
    });
   
    $(document).on('click', '.remove-tr', function(){  
         $(this).parents('tr').remove();
    });  
   
</script>
 
 
 
 
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