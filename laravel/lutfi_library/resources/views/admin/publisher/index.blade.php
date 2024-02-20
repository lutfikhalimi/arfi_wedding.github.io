@extends('layouts.admin')
@section('header', 'Publisher')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}} ">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

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
              <div class="card-body p-2">
                <table id="datatable" class="table table-striped table-bordered">
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

@endsection


@section('js')

<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<script type="text/javascript">
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

</script>
@endsection

