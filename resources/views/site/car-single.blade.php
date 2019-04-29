@extends('site.layouts.master')

@section('title')
Cars
@stop

@section('content')
<section class="shop-section">
   <div class="container">
   <div class="row">
      <div class="col-md-9">
         <div class="detailed-product">
            <div class="col-md-6">
               <div class="img-box"><img style="width: 100%;" src="{{ asset('images/cars/'.$image->path) }}" alt="{{ $car->name }}"/> </div>
            </div>
            <div class="col-md-6">
               <div class="text-box">
                  <h3>{{ $car->name }}</h3>
                  <p>${{ $car->price }}</p>
                  <p class="description">{{ $car->description }}</p>
                  <a class="btn hvr-bounce-to-right" data-toggle="modal" data-target="#exampleModalCenter" href="#">ADD TO CARD</a>
                  @include('site.layouts.car-modal')
                  <div class="tag">
                     <p>Category:<a href="#"> {{ $car->type == 'sell' ? 'Buy' : 'Rent' }}</a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-3">
         @include('site.layouts.cars-aside')
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
@stop