@extends('layouts.admin')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

@section('content')

<div class="card">
    <div class="card-header">
     Hospital
    </div>

    <div class="card-body">
        <form action="{{ route("admin.hospital.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
             <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="Hospital Name">Hospital Name*</label>
               <input type="text" id="name" name="name" class="form-control"  required>
                   
            </div>

           <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="Address">Address*</label>
               <input type="text" id="address" name="address" class="form-control"  required>
                   
            </div>
           
             
             <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="State">State*</label>
               <input type="text" id="state" name="state" class="form-control"  required>
                   
            </div>
        
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="city">City*</label>
               <input type="text" id="city" name="city" class="form-control"  required>
                   
            </div>
        
           
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="website">website*</label>
               <input type="url" id="website" name="website" class="form-control" >
                   
            </div>
        
            
          
            
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                 <input class="btn btn-danger" type="button" value="Back" onClick="window.location.href = '{{ url("/admin/hospital") }}'">
            </div>
        </form>


    </div>
</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZsojtmwI_i4tfDpuCHcCS1MrBgAEfx2k&libraries=places"></script>
<script type="text/javascript">

    google.maps.event.addDomListener(window, 'load', function () {
        var options = {
  types: ['address'],
 componentRestrictions: {country: "in"} // 2-letters code
};
        var places = new google.maps.places.Autocomplete(document.getElementById('address'), options);
        google.maps.event.addListener(places, 'place_changed', function () {
            var place = places.getPlace();
            var address = place.formatted_address;
            var latitude = place.geometry.location.lat();
            var longitude = place.geometry.location.lng();
            var latlng = new google.maps.LatLng(latitude, longitude);
            var geocoder = geocoder = new google.maps.Geocoder();
            geocoder.geocode({ 'latLng': latlng }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                var all_data = geocodeResponseToCityState(results);
                function geocodeResponseToCityState(results) { //will return and array of matching {city,state} objects
                  var parsedLocalities = [];
                  if(results.length) {
                    for(var i = 0; i < results.length; i++){
                      var result = results[i];
                      
                      var locality = {};
                      for(var j=0; j<result.address_components.length; j++){
                        var types = result.address_components[j].types;
                        for(var k = 0; k < types.length; k++) {
                          if(types[k] == 'locality') {
                            locality.city = result.address_components[j].long_name;
                           } else if(types[k] == 'administrative_area_level_1') {
                            locality.state = result.address_components[j].long_name;
                           } else if(types[k] == 'country'){
                               locality.country = result.address_components[j].long_name;
                           } else if(types[k] == 'postal_code') {
                               locality.zip_code = result.address_components[j].long_name;
                           }
                        }
                      }
                      parsedLocalities.push(locality);
                
                      //check for additional cities within this zip code
                      if(result.postcode_localities){
                        for(var l = 0; l<result.postcode_localities.length;l++) {
                          parsedLocalities.push({city:result.postcode_localities[l],state:locality.state,country:locality.country,zip_code:locality.zip_code});
                        }
                      }
                    }
                  } else {
                    console.log('error: no address components found');
                  }
                  return parsedLocalities;
                }
                    var address = results[0].formatted_address;
                    var pin = all_data[0].zip_code;
                    var country = all_data[0].country;
                    var state = all_data[0].state;
                    var city = all_data[0].city;
                    
                    document.getElementById('city').value = city;
                    document.getElementById('state').value = state;
                    document.getElementById('country').value = country;
                    document.getElementById('zip-code').value = pin;
                

                        
                        
                    }
                }
            });
        });
    });
    </script>
    
@endsection