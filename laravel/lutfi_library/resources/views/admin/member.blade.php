@extends('layouts.admin')
@section('header', 'Member')

@section('css')

@endsection


@section('content')
<div id="controller">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="#" @click="addData()" class="btn btn-sm btn primary pull-right">Create New Member</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table id="example2" class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 30px">No</th>
                                <th>Nama</th>
                                <th class="text-center">Gender</th>
                                <th class="text-center">Phone_Number</th>
                                <th class="text-center">Address</th>
                                <th class="text-center">Email</th>
                                <th class="text-center" style="width: 200px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($members as $key => $member)
                            <tr>
                                <td>{{ $key+1}}</td>
                                <td>{{ $member->name }}</td>
                                <td class="text-center">{{ $member->gender }}</td>
                                <td class="text-center">{{ $member->phone_number }}</td>
                                <td class="text-center">{{ $member->address }}</td>
                                <td class="text-center">{{ $member->email }}</td>
                                <td class="text-center">
                                    <a href="#" @click="editData($event, {{ json_encode($member) }})" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" :action="actionUrl" autocomplete="off">
                <div class="modal-header">
                    <h4 class="modal-title">Member</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" @click="closeModal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" v-model="data.name" required>
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <input type="text" name="gender" class="form-control" v-model="data.gender" required>
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" name="phone_number" class="form-control" v-model="data.phone_number" required>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" v-model="data.address" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" v-model="data.email" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal" @click="closeModal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
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

@section('js')
<script type="text/javascript">
    var controller = new Vue({
        el: '#controller',
        data: {
            data: {},
            actionUrl: "{{ url('members')}}"
        },
        methods: {
            addData() {
                $('#modal-default').modal();
            },
            editData(event, member) {
                // Menghentikan event default agar tidak refresh halaman
                event.preventDefault();
                // Menetapkan data dari member ke data Vue
                this.data = member;
                // Membuka modal
                $('#modal-default').modal();
            },
            closeModal() {
                // Menutup modal
                $('#modal-default').modal('hide');
            }
        },
    });
</script>
@endsection
