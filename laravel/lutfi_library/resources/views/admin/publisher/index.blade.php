@extends('layouts.admin')
@section('header', 'Publisher')


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
                <a href="{{ url('publishers/create')}}" class="btn btn-sm btn-primary pull-right">New Publisher</a>
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
                  @foreach($publishers as $key => $publisher)
                    <tr>
                    <td>{{ $key+1}}</td>
                    <td>{{ $publisher->name }}</td>
                    <td class="text-center">{{ $publisher->email }}</td>
                    <td class="text-center">{{ $publisher->phone_number }}</td>
                    <td>{{ $publisher->address }}</td>
                    <td class="text-center">{{ date('d M Y | H:i:s', strtotime($publisher->created_at)) }}</td>
                      <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Edit and Delete Buttons">
                            <a href="{{ url('publishers/'.$publisher->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                    
                        <form action="{{ url('publishers', ['id' => $publisher->id]) }}"  method="post">
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
