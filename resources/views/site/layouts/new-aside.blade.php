<aside class="blog-info">
   <div class="search-box">
      <form action="{{ route('news-search') }}" method="post" id="searchForm">
         {{ csrf_field() }}
         <div class="form-group">
            <input class="form-control" name="key" placeholder="Search..." type="search" />
            <button type="submit" id="searchFormBtn">
            <i class="fa fa-search" aria-hidden="true"></i>
            </button>
         </div>
      </form>
   </div>
   <div class="news-widget">
      <div class="title">
         <h4>Latest news</h4>
      </div>
      @foreach($latestNews as $latest)
      <?php 
         $image = \App\File::where('type','news')->where('value_id',$latest->id)->first();	
         ?>
      <div class="news-item">
         <figure>
            <a href="{{ route('news-single',['id' => $latest->id]) }}"><img style="width: 100%;" src="{{ asset('images/small/news/'.$image->path) }}" alt="{{ $latest->title }}"></a>
         </figure>
         <div class="text-box">
            <h5><a href="{{ route('news-single',['id' => $latest->id]) }}">{{ $latest->title }}</a></h5>
            <p>
               {{ $latest->created_at }}
            </p>
         </div>
      </div>
      @endforeach
   </div>
</aside>