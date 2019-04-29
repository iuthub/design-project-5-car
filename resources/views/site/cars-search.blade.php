@extends('site/layouts/master')

@section('title')
Search cars
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
                  <a href="{{ route('car-single',['id' => $car->id]) }}" style="background-color: white; opacity: 0;">
               <div class="col-md-4">
               <div class="product">
                     <div class="img-box"><img style="width: 100%;" src="{{ asset('images/cars/'.$image->path) }}" alt="img"/></div>
                     <div class="text-box">
                        <h4 style="color: #fbad1a;">{!! $car->name !!}</h4>
                        <p>{{ strlen($car->description) > 60 ? substr($car->description,0,59).'...' : $car->description }}</p>
                        <p>${{ $car->price }}</p>
                        <a class="btn hvr-bounce-to-right" href="#">ADD TO CARD</a>
                     </div>
                  </div>
               </div>
               </a>
               @endforeach	
            </div>
            <div class="navigation">
               <ul>
                  <li><a href="">1</a> </li>
                  <li><a href="">2</a> </li>
                  <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i></a> </li>
               </ul>
            </div>
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
</script>
@stop