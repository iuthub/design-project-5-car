@extends('site/layouts/master')

@section('title')
About
@stop

@section('content')
<section class="overview">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="small-images">
               <div class=""><img style="width: 100%;" src="{{ asset('images/photo_2019-04-29_13-02-31.jpg') }}" alt="awsome image"/></div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="title">
               <h2>Company overview</h2>
            </div>
            <p>Fusce non faucibus lorem. Cras eu velit id diam cursus tincidunt in ut dui. Quisque quis augue placerat, pulvinar dui aliquam, convallis sapien. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla feugiat cursus egestas. </p>
            <p class="bold">Vestibulum tincidunt neque id quam tristique pulvinar non in nulla. 
               Tincidunt neque id quam tristique pulvinar non in nulla. 
               Curabitur sem dolor, ultricies nec purus eu, convallis cursus leo. 
            </p>
            <p>Fusce non faucibus lorem. Cras eu velit id diam cursus tincidunt in ut dui. Quisque quis augue placerat, pulvinar dui aliquam, convallis sapien. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla feugiat cursus egestas. </p>
            <ul>
               <li><i class="fa fa-caret-right" aria-hidden="true"></i>Cras eu velit id diam cursus tincidunt in ut dui. </li>
               <li><i class="fa fa-caret-right" aria-hidden="true"></i>Quisque quis augue placerat, pulvinar dui aliquam, convallis sapien.  </li>
               <li><i class="fa fa-caret-right" aria-hidden="true"></i>Orci varius natoque penatibus et magnis dis </li>
               <li> <i class="fa fa-caret-right" aria-hidden="true"></i>  Parturient montes, nascetur ridiculus mus. Nulla feugiat cursus egestas.</li>
            </ul>
         </div>
      </div>
   </div>
</section>
@stop

@section('js')
<script src="{{ asset('site/plugins/jquery.min.js') }}"></script>
<script src="{{ asset('site/plugins/owl.carousel.min.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js') }}"></script>
<script src="{{ asset('site/plugins/bootstrap.min.js') }}"></script>
<script src="OwlCarousel/dist/owl.carousel.min.js') }}"></script>
<script src="{{ asset('site/plugins/waypoints.min.js') }}"></script>
<script src="{{ asset('site/plugins/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('site/plugins/theme.js') }}"></script>
@stop