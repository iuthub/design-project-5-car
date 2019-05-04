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
                  <a class="btn hvr-bounce-to-right" data-toggle="modal" data-target="#exampleModalCenter" onclick="authenticate()" href="#">ADD TO CARD</a>
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