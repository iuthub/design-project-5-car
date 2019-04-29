<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form action="" method="post" id="orderForm">
               {{ csrf_field() }}
               <label for="name">Name</label>
               <input type="text" name="name" class="form-control" id="inpname" placeholder="Name"><br>
               <label for="familyname">Family Name</label>
               <input type="text" name="familyname" class="form-control" id="inpfam" placeholder="Family Name"><br>
               <label for="passport">Passport</label>
               <input type="text" name="passport" class="form-control" id="inppass" placeholder="Passport">
               <input type="hidden" name="car_id" id="inpcar_id" value="{{ $car->id }}">
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" id="btnSubmit" onclick="sendForm()" class="btn btn-primary">Save changes</button>
         </div>
      </div>
   </div>
</div>
<!-- Modal for showing code -->
<div class="modal fade" id="codeModal" tabindex="-1" role="dialog" aria-labelledby="codeModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="codeModalLongTitle">Your unique code is:</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <center>
               <h1 id="code-content"></h1>
            </center>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>