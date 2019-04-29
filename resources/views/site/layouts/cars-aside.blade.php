<aside class="blog-info">
   <div class="search-box">
      <form action="{{ route('cars-search') }}" method="post" id="searchForm">
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
         <h4>Popular Products</h4>
      </div>
      @foreach($popularCars as $popularCar)
      <?php 
         $image = \App\File::where('type','car')->where('value_id',$popularCar->id)->first();
      ?>
      <div class="news-item">
         <figure>
            <a href="{{ route('car-single',['id' => $popularCar->id]) }}"><img style="height: 100%; width: 100%;" src="{{ asset('images/small/cars/'.$image->path) }}" alt="{{ $popularCar->name }}"></a>
         </figure>
         <div class="text-box">
            <h5><a href="{{ route('car-single',['id' => $popularCar->id]) }}">{!! $popularCar->name !!}</a></h5>
            <p>
               ${{ $car->price }}
            </p>
         </div>
      </div>
      @endforeach
   </div>
   <div class="instigram-widget">
      <div class="title">
         <h4>Filter</h4>
      </div>
      <form action="{{ url('/cars') }}" method="post">
      {{ csrf_field() }}
        <div class="form-group">
            <label for="sel1">Select list:</label>
            <select class="form-control" name="type" id="sel1">
                <option>Buy</option>
                <option>Rent</option>
            </select>
        </div>
        <div class="form-group">
            <label for="formControlRange">Price Range</label>
            <input type="range" name="priceRange" class="form-control-range" id="formControlRange" min="0" max="{{ $maxPrice }}">
            <div id="price-range" style="display: inline-flex;">
                <p>0</p>
                <p style="float: right">{{ $maxPrice }}</p>
            </div>
        </div>
        <input type="submit" value="Apply" class="btn btn-primary">
      </form>
   </div>
</aside>
<script>

    var form = document.getElementById("searchForm");
    var btn = document.getElementById("searchFormBtn");

    btn.addEventListener("onclick", function() {
        form.submit();
    });

</script>