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
                  <h4 class="card-title">Create News</h4>
                  <p class="card-category">Complete your news</p>
                </div>
                <div class="card-body">
                  <form method="post" action="{{ route('news.store') }}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Title</label>
                          <input type="text" class="form-control" name="title">
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Body</label>
                            <textarea class="form-control" rows="5" name="body"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
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
                              <img id='img-upload'/>
                          </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                            <label class="bmd-label-floating">Publish</label>
                            <input type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No" class="form-control" data-size="mini" name="published">
                        </div>
                      </div>
                    </div>
                    <input type="submit" class="btn btn-primary pull-right" value="Create news">
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

    </script>
@stop