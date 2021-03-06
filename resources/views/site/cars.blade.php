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
                        <p>{{ str_limit($car->description, $limit = 40, $end = '...') }}</p>
                        @if($car->sale > 0)
                        <div class="sale" style="display: flex;">
                           <p> <section style="text-decoration-line: line-through; text-decoration-color: red; padding-right: 10px;">${{ $car->price }} </section>  --> {{ $car->price - ($car->price/100 * $car->sale) }}</p> 
                        </div>
                        @else
                           <p>${{ $car->price }}</p>
                        @endif
                        <a class="btn hvr-bounce-to-right" type="button" data-toggle="modal" data-target="#exampleModalCenter" onclick="authenticate()" href="#">ADD TO CARD</a>
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
<script src="{{ asset('site/plugins/bootstrap.min.js') }}"></script>
<script>
   
   
   function authenticate() {
      @if(!Auth::check())
         window.location.href = "/login";
      @endif
   }

    var orderBtn = document.getElementById("btnSubmit");
    var orderForm = document.getElementById("orderForm");
   
    
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
    
   
</script>
@stop