@extends('layouts.admin')
<script src="https://cdn.ckeditor.com/4.19.1/full/ckeditor.js"></script>

@section('content')

<div class="card">
    <div class="card-header">
        News & PR Edit
    </div>

    <div class="card-body">
        <form action="{{ route("admin.news.update", [$case_study->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            
              <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">title*</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', isset($case_study) ? $case_study->title : '') }}" required>
               
            </div>
            
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">slug*</label>
                <input type="text" id="slug" name="slug" class="form-control" value="{{ old('title', isset($case_study) ? ucwords(str_replace('-', ' ', $case_study->slug )) : '') }}" required>
               
            </div>
             <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Type*</label>
             <select class="form-control" name="type" required>
                 <option value="">select one</option>
                               <option value="news"{{@$case_study->type=="news"? 'selected' : '' }}>News</option>
                               <option value="press-releases" {{@$case_study->type=="press-releases"? 'selected' : '' }}>Press Releases</option>
                            <option value="press-coverage" {{@$case_study->type=="press-coverage"? 'selected' : '' }}>press-coverage</option>
                           </select>
             </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                 <label for="name">Category*</label>
                  <select name="category_id"  class="form-control select2"  required>
                    @foreach($category as $id => $categories)
                        <option value="{{ $id }}" {{ $case_study->category_id == $id ? 'selected' : '' }}>{{ $categories }}</option>
                      
                    @endforeach
                </select>  </div>
            
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                 <label for="name">Author*</label>
                  <select name="author"  class="form-control select2"  required>
                    @foreach($author as $id => $authors)
                        <option value="{{ $id }}" {{ @$case_study->author_id == $id ? 'selected' : '' }}>{{ $authors }}</option>
                      
                    @endforeach
                </select>  </div>
                
                
               
                
                
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                 <label for="name">Tags*</label>
                           <?php 
                    $tag_ids = explode(",",$case_study->tags);
                    ?>
                 <select name="tags[]" id="tags" class="form-control select2" multiple="multiple" required>
                    @foreach($tags as $id => $tags )
                        <option value="{{ $id }}" {{ in_array($id, $tag_ids) ? 'selected':''}}>{{ $tags }}</option>
                    @endforeach
                </select>
                
                </div>
                
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name"> Date*</label>
                <input type="date" name="dates" class="form-control" value="{{ date("Y-m-d", strtotime($case_study->created_at))}}" />
                   </div>
                
           
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Description*</label>
                 <textarea  name="description" rows="4" cols="50" class="form-control">{{$case_study->description}}
                     </textarea>
                    
                   <script>
                                CKEDITOR.replace('description');
                            </script>
            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Featured Image size(388*265 px)* </label>
                <input type="file" name="image" class="imgLeft form-control"> 
            </div>
            @if(@$case_study->image)
            <div class="col-md-12 pl-0">
                <img src="{{ URL::to('/') }}/public/uploads/news/{{ $case_study->image }}" class="img-thumbnail" width="350px" height="300px" />
            </div>
            @endif
           <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Banner image  size(1083*588 px) </label>
                <input type="file" name="image1" class="imgCenter form-control"> 
            </div>
            @if(@$case_study->image1)
            <div class="col-md-12 pl-0">
                <img src="{{ URL::to('/') }}/public/uploads/news/{{ $case_study->image1 }}" class="img-thumbnail" width="400px" height="400px" />
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