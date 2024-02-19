@extends('layouts.admin')
@section('header', 'Author')


@section('content')
<style>
    .btn-group .btn {
        margin-inline: 5px; /* Sesuaikan jarak spasi yang diinginkan */
    }
</style>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <a href="{{ url('publishers/create')}}" class="btn btn-sm btn-primary pull-right">Create New Author</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Nama</th>
                      <th class="text-center">Email</th>
                      <th class="text-center">Phone_Number</th>
                      <th class="text-center">Address</th>
                      <th class="text-center">Created_At</th>
                      <th class="text-center" colspan="2">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($authors as $key => $author)
                    <tr>
                    <td>{{ $key+1}}</td>
                    <td>{{ $author->name }}</td>
                    <td class="text-center">{{ $author->email }}</td>
                    <td class="text-center">{{ $author->phone_number }}</td>
                    <td>{{ $author->address }}</td>
                    <td class="text-center">{{ date('d M Y | H:i:s', strtotime($author->created_at)) }}</td>
                      <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Edit and Delete Buttons">
                            <a href="{{ url('authors/'.$author->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                    
                        <form action="{{ url('authors', ['id' => $author->id]) }}"  method="post">
                            <input class="btn btn-danger btn-sm" type="submit" value="Delete" onclick="return confirm('Are You Sure ?')">
                            @method('delete')
                            @csrf
                            </form>
                          </div>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->

@endsection
