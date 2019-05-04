@extends('dashboard.template')

@section('content')
<div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Forms</h4>
                  <p class="card-category"> Here are list of all forms</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">

                      <thead class=" text-primary">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Family Name</th>
                        <th>Passport</th>
                        <th>Code</th>
                        <th></th>
                      </thead>
                      <tbody>
                      @foreach($forms as $form)
                        <tr>
                          <td>{{ $form->id }}</td>
                          <td>{{ $form->name }}</td>
                          <td>{{ $form->familyname }}</td>
                          <td>{{ $form->passport }}</td>
                          <td class="text-primary">{{ $form->code }}</td>
                          <th>
                              <form method="post" action="{{ route('form-delete',['id' => $form->id]) }}" id="deleteFormForm{{ $form->id }}">
                              {{ csrf_field() }}
                              <input name="_method" type="hidden" value="DELETE">
                              <i class="material-icons del" onclick="deleteForm({{ $form->id }})">delete</i>
                              </form>
                          </th>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{ $forms->links() }}
                  </div>
                </div>
              </div>
            </div>
@stop

@section('js')
<script>
  function deleteForm(id) {
    form = document.getElementById('deleteFormForm'+id)
    form.submit();
  }
</script>
@stop