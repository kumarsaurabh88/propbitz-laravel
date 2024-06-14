@extends('layouts.admin')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

@section('content')

<div class="card">
    <div class="card-header">
        Section content Edit
    </div>

    <div class="card-body">
        <form action="{{ route("admin.sectioncontent.update", [$sectioncontent->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            
              <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">title*</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', isset($sectioncontent) ? $sectioncontent->title : '') }}" required>
               
            </div>
            
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                 <label for="name">Page</label>
                 <input type="text" readonly id="page" name="page" class="form-control" value="{{ old('title', isset($sectioncontent) ? $sectioncontent->page : '') }}" required>  </div>
            
            
                 <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                 <label for="name">Section *</label>
                  <input type="text" readonly id="page" name="section" class="form-control" value="{{ old('title', isset($sectioncontent) ? $sectioncontent->section : '') }}" required>  </div>
                </select>  </div>
            
        
            
                </div>
                
           
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Description*</label>
                 <textarea  name="description" rows="4" cols="50" class="form-control">{{$sectioncontent->description}}
                     </textarea>
                    
                   <script>
                                CKEDITOR.replace('description');
                            </script>
            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name"> Image * @if($sectioncontent->section=='get-involved') Size (555*376) @else size(444*552) @endif </label>
                <input type="file" name="image" class="imgLeft form-control"> 
            </div>
            @if(@$sectioncontent->image)
            <div class="col-md-12 pl-0">
                <img src="{{ URL::to('/') }}/public/uploads/{{ $sectioncontent->image }}" class="img-thumbnail" width="350px" height="300px" />
            </div>
            @endif
            
            
            @if($sectioncontent->section=='get-involved')
           <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Video Link  </label>
            <input type="text" id="video" name="video" class="form-control" value="{{ old('title', isset($sectioncontent) ? $sectioncontent->video : '') }}" > 
            </div>
            @endif
          
            <div>
            <input class="btn btn-danger" id="rightButton" type="submit" value="{{ trans('global.save') }}">
           <!-- <a href="https://veganaffair.88gravity.com/admin/blog" class="btn btn-info" role="button">Back</a>-->
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