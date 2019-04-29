@extends('site/layouts/master')

@section('title')
Cars
@stop

@section('content')
<section class="shop-section">
   <div class="container">
      <div class="row">
         <div class="col-md-9">
            <div class="product-wraper">
               @foreach($cars as $car)
               <?php 
                  $image = \App\File::where('type','car')->where('value_id',$car->id)->first();
                  ?>
               <div class="col-md-4">
                  <div class="product">
                     <div class="img-box">
                     <a style="opacity: 0;" href="{{ route('car-single',['id' => $car->id]) }}">
                     <center><img style="width: 100%;" src="{{ asset('images/small/cars/'.$image->path) }}" alt="{{ $car->name }}"/></center>
                     </a> 
                     </div>
                     <div class="text-box">
                        <h4 style="color: #fbad1a;">{{ $car->name }}</h4>
                        <p>{{ strlen($car->description) > 60 ? substr($car->description,0,59).'...' : $car->description }}</p>
                        @if($car->sale > 0)
                        <p> <section style="text-decoration-line: line-through; text-decoration-color: red;">${{ $car->price }}</section>-->{{ $car->price - ($car->price/100 * $car->sale) }}</p> 
                        @else
                        <p>${{ $car->price }}</p>
                        @endif
                        <a class="btn hvr-bounce-to-right" type="button" data-toggle="modal" data-target="#exampleModalCenter" href="#">ADD TO CARD</a>
                        @include('site.layouts.car-modal')
                     </div>
                  </div>
               </div>
               @endforeach	
            </div>
            {{ $cars->links('site.layouts.pagination') }}
         </div>
         <div class="col-md-3">
            @include('site.layouts.cars-aside')
         </div>
      </div>
   </div>
</section>
@stop

@section('js')
<script src="{{ asset('site/plugins/jquery.min.js') }}"></script>
<script src="{{ asset('site/plugins/owl.carousel.min.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="{{ asset('site/plugins/bootstrap.min.js') }}"></script>
<script src="OwlCarousel/dist/owl.carousel.min.js') }}"></script>
<script src="{{ asset('site/plugins/waypoints.min.js') }}"></script>
<script src="{{ asset('site/plugins/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('site/plugins/theme.js') }}"></script>
<script>
   $(function() {
     $( "#slider-range" ).slider({
       range: true,
       min: 0,
       max: 500,
       values: [ 100, 300 ],
       slide: function( event, ui ) {
         $( "#amount" ).html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
   $( "#amount1" ).val(ui.values[ 0 ]);
   $( "#amount2" ).val(ui.values[ 1 ]);
       }
     });
     $( "#amount" ).html( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
   });
   
    var orderBtn = document.getElementById("btnSubmit");
    var orderForm = document.getElementById("orderForm");
   
    // orderBtn.addEventListener("onclick", function() {
   function sendForm() {
        var inpname = document.getElementById("inpname");
        var familyName = document.getElementById("inpfam");
        var inppassport = document.getElementById("inppass");
        var inpcar_id = document.getElementById("inpcar_id");
        var csrf = document.querySelectorAll("input[name=_token]")[0];
        
        $.ajax({
                    url: '{{ route("send-form") }}',
                    type: 'POST',
                    data: {_token: csrf.value, name: inpname.value, familyname: familyName.value, passport: inppassport.value, car_id: inpcar_id.value},
                    success: function (data) { 
                        inpname.value = " ";
                        familyName.value = " ";
                        inppassport.value = " ";
                        $("#exampleModalCenter").modal("hide");
                        var code_modal = $("#codeModal")
                        code_modal.modal("show");
                        $("#code-content").text(data);
                    },
                    error: function(data) {
                       alert(inpname.value);
                       alert(familyName.value);
                       alert(inppassport.value);
                        console.log(data);
                    }
                }); 
   }
    // });
   
</script>
@stop