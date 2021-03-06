@extends('site/layouts/master')

@section('title')
News
@stop

@section('content')
<section class="news-section">
   <div class="container">
      <div class="row">
         <div class="col-md-9">
            <div class="news-wraper">
               @foreach($news as $new)
               <?php 
                  $image = \App\File::where('type','news')->where('value_id',$new->id)->first();	
                  ?>
               <div class="col-md-6">
                  <div class="news-box">
                     <div class="img-box">
                        <img style="width: 100%;" src="{{ asset('images/news/'.$image->path) }}" alt="img"/>
                     </div>
                     <div class="text-box">
                        <div class="header">
                           <h4>{{ $new->title }}</h4>
                           <p>
                              {{ $new->created_at }}
                           </p>
                        </div>
                        <div class="text">
                           <p>
                              {{ $new->body }}
                           </p>
                           <a href="{{ route('news-single',['id' => $new->id]) }}">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
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
<script src="{{ asset('site/plugins/bootstrap.min.js') }}"></script>
<script>
   var mixer = mixitup('.thm-container');
   var mixer = mixitup(containerEl);
   
   var mixer = mixitup(containerEl, {
   selectors: {
   target: '.blog-item'
   },
   animation: {
   duration: 300
   }
   });
   
</script>
@stop