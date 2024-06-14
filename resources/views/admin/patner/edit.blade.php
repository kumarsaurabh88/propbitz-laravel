@extends('layouts.admin')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

@section('content')

<div class="card">
    <div class="card-header">
       Gallery Edit  
    </div>

    <div class="card-body">
        <form action="{{ route("admin.patner.update", [$patner->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
              
           <div class="form-group ">
                <label for="name">Patner Title*</label>
               <input type="text" id="name" name="title" value="{{$patner->title}}" class="form-control"  required>
                   
            </div>
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                
                 <label for="name">Patner Type *</label>
                 
                   
                           <select class="form-control" name="type" >
                               <option value="government-partner" {{$patner->type=="government-partner"? 'selected' : '' }}>Government Partner</option>
                                <option value="corporate-partner"{{$patner->type=="corporate-partner"? 'selected' : '' }}>Corporate Partner</option>
                                <option value="institutions-organizations"{{$patner->type=="institutions-organizations"? 'selected' : '' }}>institutions & organizations</option>
                                <option value="hospital-partners"{{$patner->type=="hospital-partners"? 'selected' : '' }}>Hospital Partners</option>
                                
                                    
                           </select>
                               
                           
                
                
                </div>
            
             <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
               <label for="name"> logo* size(100 x 100)</label>
                <input type="file" name="image" class="img form-control">
                 <img src="{{ URL::to('/') }}/public/uploads/patner/{{ $patner->image }}" class="img-thumbnail"  width="100" />
                               
            </div>
            <div>
                <input class="btn btn-danger" type="submit" id="leftButton" value="{{ trans('global.save') }}">
                  <input class="btn btn-danger" type="button" value="Back" onClick="window.location.href = '{{ url("/admin/patner") }}'">
            
            </div>
        </form>


    </div>
</div>

@endsection