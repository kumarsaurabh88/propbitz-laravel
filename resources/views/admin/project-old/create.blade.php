@extends('layouts.admin')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

@section('content')

<div class="card">
    <div class="card-header">
     Projact
    </div>

    <div class="card-body">
        <form action="{{ route("admin.project.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
             <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Title*</label>
               <input type="text" id="title" name="title" class="form-control"  required>
                   
            </div>

           
             
             <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name"> Description*</label>
                {!! Form::textarea('description', old('description'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                  <script>
                                CKEDITOR.replace('description');
                            </script>
            </div>
        
        
        
        
        
        
        
        
             <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Featured Image*</label>
                <input type="file" name="image" required class="imgLeft form-control"> 
            </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Details image *</label>
                <input type="file" name="image1" class="imgCenter form-control"> 
            </div>
            
            
            
             <table class="table table-bordered" id="dynamicTable">  
            <tr>
                <th>projact Category</th>
                <th>projact  title</th>
                 <th>projact Discription</th>
                   <th>projact image</th>
                
                <th>Action</th>
            </tr>
            <tr>  
                <td><input type="text" name="p_category[]" placeholder="Enter your category" class="form-control" /></td>  
                <td><input type="text" name="p_title[]" placeholder="Enter your title" class="form-control" /></td>  
                 <td><input type="text" name="p_discription[]" placeholder="Enter your discription" class="form-control" /></td>
                  <td><input type="file" name="p_image[]" placeholder="Enter your discription" class="form-control" /></td>
                 
                <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
            </tr>  
        </table>
            
            
            
            
            
            
            
            
          
            
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                 <input class="btn btn-danger" type="button" value="Back" onClick="window.location.href = '{{ url("/admin/project") }}'">
            </div>
        </form>


    </div>
</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 

<script type="text/javascript">
   
    var i = 0;
       
    $("#add").click(function(){
   
        ++i;
   
        $("#dynamicTable").append('<tr><td><input type="text" name="p_category['+i+']" placeholder="Enter your category" class="form-control" /></td><td><input type="text" name="p_title['+i+']" placeholder="Enter your title" class="form-control" /></td><td><input type="text" name="p_discription['+i+']" placeholder="Enter your discription" class="form-control" /></td><td><input type="file" name="p_image['+i+']" placeholder="Enter your answer" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
    });
   
    $(document).on('click', '.remove-tr', function(){  
         $(this).parents('tr').remove();
    });  
   
</script>
@endsection