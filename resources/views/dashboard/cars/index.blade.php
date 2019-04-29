@extends('dashboard.template')

@section('content')
<div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Cars</h4>
                  <p class="card-category"> Here are list of all cars</p>
                  <a href="{{ route('cars.create') }}"><i class="material-icons" style="float: right;color:white;">add</i></a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">

                      <thead class=" text-primary">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Descirption</th>
                        <th>Type</th>
                        <th>Price</th>
                        <th></th>
                      </thead>
                      <tbody>
                      @foreach($cars as $car)
                        <tr>
                          <td>{{ $car->id }}</td>
                          <td>{{ $car->name }}</td>
                          <td>{{ $car->description }}</td>
                          <td>{{ $car->type }}</td>
                          <td class="text-primary">{{ $car->price }}</td>
                          <th>
                              <!-- <button class="btn btn-primary">sdf</button> -->
                              <a href="{{ route('cars.edit',['car' => $car->id]) }}"><i class="material-icons">edit</i></a>
                              <form method="post" action="{{ route('cars.destroy',['car' => $car->id]) }}" id="deleteCarForm{{ $car->id }}">
                              {{ csrf_field() }}
                              <input name="_method" type="hidden" value="DELETE">
                              <i class="material-icons del" onclick="deleteCar({{ $car->id }})">delete</i>
                              </form>
                          </th>
                        </tr>
                        @endforeach
                      </tbody>

                    </table>
                  </div>
                  <div class="container">
                  {{ $cars->links() }}
                  </div>
                </div>
              </div>
            </div>
@stop

@section('js')
<script>
  function deleteCar(id) {
    form = document.getElementById('deleteCarForm'+id)
    form.submit();
  }
</script>
@stop