@extends('dashboard.template')

@section('content')
<div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">News</h4>
                  <p class="card-category"> Here are list of all news</p>
                  <a href="{{ route('news.create') }}"><i class="material-icons" style="float: right;color:white;">add</i></a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">

                      <thead class=" text-primary">
                        <th>ID</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th></th>
                      </thead>
                      <tbody>
                      @foreach($news as $new)
                        <tr>
                          <td>{{ $new->id }}</td>
                          <td>{{ $new->title }}</td>
                          <td>{{ $new->body }}</td>
                          <th>
                              <!-- <button class="btn btn-primary">sdf</button> -->
                              <a href="{{ route('news.edit',['news' => $new->id]) }}"><i class="material-icons">edit</i></a>
                              <form method="post" action="{{ route('news.destroy',['news' => $new->id]) }}" id="deleteNewsForm{{ $new->id }}">
                              {{ csrf_field() }}
                              <input name="_method" type="hidden" value="DELETE">
                              <i class="material-icons del" onclick="deleteNews({{ $new->id }})">delete</i>
                              </form>
                          </th>
                        </tr>
                        @endforeach
                      </tbody>

                    </table>
                    {{ $news->links() }}
                  </div>
                </div>
              </div>
            </div>
@stop

@section('js')
<script>
  function deleteNews(id) {
    form = document.getElementById('deleteNewsForm'+id)
    form.submit();
  }
</script>
@stop