@extends('dashboard.template')

@section('content')
<style>
    .btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#img-upload{
    width: 100%;
}
    </style>
    @include('partials.error')
<div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                  <form method="post" action="{{ route('cars.update',['car'=>$car->id]) }}" enctype="multipart/form-data" id="form">
                  <input name="_method" type="hidden" value="PUT">
                  {{ csrf_field() }}
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name="name" value="{{ $car->name }}">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Price</label>
                          <input type="number" class="form-control" name="price" value="{{ $car->price }}">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group" id="typeMain">
                          <label class="bmd-label-floating">Type</label>
                          <input type="checkbox" data-toggle="toggle" data-on="Sell" data-off="Rent" class="form-control" data-size="mini" name="type" value="{{ $car->type}}" id="typeValue" {{ $car->type != "sell" ? '' : 'checked' }}>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Description</label>
                          <!-- <div class="form-group"> -->
                            <textarea class="form-control" rows="5" name="description">{{ $car->description }}</textarea>
                          <!-- </div> -->
                        </div>
                      </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                            <label class="bmd-label-floating">Sale</label>
                            <input id="sale" type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No" class="form-control" data-size="mini" {{ $car->sale != null ? 'checked' : '' }}>
                            </div>
                        </div>
                        <div class="col-md-4" id="saleprice" style="display:{{ $car->sale != null ? '' : 'none' }};">
                            <div class="form-group">
                                <input type="number" placeholder="Sale amount" value="{{ $car->sale }}" class="form-control" name="sale" id="saleAmount">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <label class="bmd-label-floating">Publish</label>
                            <input type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No" class="form-control" data-size="mini" name="publish" {{ $car->publish == 1 ? 'checked' : '' }}>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Upload Image</label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        Browse… <input type="file" name="image" id="imgInp">
                                    </span>
                                </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <img id='img-upload' src="{{ asset('images/cars/'.$image->path) }}"/>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary pull-right" value="Create car">
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
@stop

@section('js')
<script>
$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
        });

        function changeTypeValue(){
            if(document.getElementById('type').checked){
                alert('checked');
            }else{
                alert('not checked');
            }
        }
        
        $('#sale').change(function(){
            $('#saleprice').toggle();
        });

		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
    });

    var typeValue = document.getElementById('typeValue');
    document.getElementById('typeMain').addEventListener("click", function() {
        if(typeValue.checked){
            typeValue.value = "rent";
        }else{
            typeValue.value = "sell";
        }
    });
    var form = document.getElementById('form');
    var saleAmountHidden = document.getElementById('saleprice');
    var saleAmount = document.getElementById('saleAmount');
    form.addEventListener('submit', function() {
        if(saleAmountHidden.style.display == "none"){
            alert("emptying");
            saleAmount.value = "";
        }
    });
    </script>
@stop