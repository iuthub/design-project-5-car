@extends('site/layouts/master')

@section('title')
News
@stop

@section('content')
<section class="news-section">
   <div class="container">
      <div class="row">
         <div class="col-md-9">
            <div class="left-wraper" >
               <div class="news_one-single">
                  <div class="img-box image">
                     <img src="{{ asset('images/news/'.$image->path) }}" alt="" />
                  </div>
                  <div class="text-box">
                     <h4>{{ $news->title }}</h4>
                     <p >
                        <a class="path" href="" ><i class="fa fa-clock-o" aria-hidden="true"></i>{{ $news->created_at }} </a>
                     </p>
                     <div class="text">
                        <p>
                           {{ $news->body }}
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3">
            @include('site.layouts.new-aside')
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
<script src="{{ asset('OwlCarousel/dist/owl.carousel.min.js') }}"></script>
<script src="{{ asset('site/plugins/waypoints.min.js') }}"></script>
<script src="{{ asset('site/plugins/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('site/plugins/theme.js') }}"></script>
<script>
   var mixer = mixitup('.thm-container');
   var mixer = mixitup(containerEl);
   
   var mixer = mixitup(containerEl, {
   	selectors : {
   		target : '.blog-item'
   	},
   	animation : {
   		duration : 300
   	}
   });
   
</script>
@stop