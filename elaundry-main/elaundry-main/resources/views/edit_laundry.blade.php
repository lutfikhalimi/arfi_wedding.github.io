@extends('template/frame')
@section('content-wrapper')


    <div class="container-xxl flex-grow-1">
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal Menambahkan Data!</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


    <h4 class="fw-bold py-3 mb-2 mt-0"><span class="text-muted fw-light">Admin /</span> Edit Laundry</h4>
    <!-- DataTable with Buttons -->
    <div class="card p-4">
      <div class="card-datatable table-responsive pt-0">
        <div class="row">
        </div>       
        
        <form action="{{url('/laundry/'.$id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('put')
          @foreach ($laundry as $data)
          
          <label>Foto Laundry</label>
          <hr>

          <div class="form-group">
            @foreach ($laundry as $data)
                @php
                    if ($data->foto === null) {
                        $path="noimage.jpg";                                        
                    } else {
                        $path="/storage/".$data->foto;                                        
                    }
                @endphp
              
            <img src="{{url($path)}}" class="rounded mx-auto d-block mb-2 border" id="photopreview" style="width:300px;height:200px;">
            <input type="hidden" name="foto_lama" class="form-control" value="{{$data->foto}}">
            @endforeach
            <input type="file" name="foto" class="form-control mx-auto d-block" onchange="showPreview(event);">
          </div>
          <br>
          <div class="form-group mb-2">
            <label class="font-weight-bold">Nama Laundry</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Laundry" maxlength="200" value="{{$data->nama}}">
            </div>
              <div class="form-group mb-2">
                  <label class="font-weight-bold">Desa</label>
                  <input type="text" name="desa" class="form-control" placeholder="Desa" maxlength="200" value="{{$data->desa}}">
              </div>
              <div class="form-group mb-2">
                <label class="font-weight-bold">Kecamatan</label>
                <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" maxlength="200" value="{{$data->kecamatan}}">
            </div>
              <div class="form-group mb-2">
                <label class="font-weight-bold">Kabupaten</label>
                <input type="text" name="kabupaten" class="form-control" placeholder="Kabupaten" maxlength="200" value="{{$data->kabupaten}}">
            </div>
              <div class="form-group mb-2">
                <label class="font-weight-bold">Provinsi</label>
                <input type="text" name="provinsi" class="form-control" placeholder="Provinsi" maxlength="200" value="{{$data->provinsi}}">
            </div>
            <div class="form-group mb-2">
              <label class="font-weight-bold">Alamat</label>
              <textarea name="alamat" class="form-control" cols="30" rows="10">{{$data->alamat}}</textarea>
            </div>
            @endforeach
            <div class="form-group mb-2">
              <label class="font-weight-bold">Admin</label>
              <select name="id_user" class="form-control select2"
              data-allow-clear="true">
                  @foreach ($laundry as $data)
                  <option selected hidden value="{{$data->id_user}}">{{$data->email_admin}}</option>
                  @endforeach
                  @foreach ($user as $data)
                  <option value="{{$data->id}}">{{$data->email}}</option>
                  @endforeach
              </select>
          </div>
            <div class="form-group mb-2">
              <label class="font-weight-bold">Status Laundry</label>
              <select name="status_pengajuan" class="form-control ">
                @foreach ($laundry as $data)
                @php
                    $status=$data->status_pengajuan;
                    $tampil_status="";
                    if ($status==0) {
                      $tampil_status="Close";
                    }elseif ($status==1) {
                      $tampil_status="Antrian";
                    }else {
                      $tampil_status="Approved";
                    }
                @endphp
                <option selected hidden value="{{$data->status_pengajuan}}">{{$tampil_status}}</option>
                @endforeach                  
                  <option value="0">Close</option>
                  <option value="1">Antrian</option>
                  <option value="2">Approved</option>
              </select>
          </div>
              <div class="form-group mb-2">
                  <label class="font-weight-bold">Hidden Status</label>
                  <select name="hidden" class="form-control">
                    @foreach ($laundry as $data)
                    @php
                    $hidden=$data->hidden;
                    $tampil_hidden="";
                    if ($hidden==0) {
                      $tampil_hidden="Hidden";
                    }else {
                      $tampil_hidden="Show";
                    }
                @endphp
                    <option selected hidden value="{{$data->hidden}}">{{$tampil_hidden}}</option>
                    @endforeach                          
                      <option value="0">Hidden</option>
                      <option value="1">Show</option>
                  </select>
              </div>
          <div class="form-group mt-2">
            <button type="submit" class="btn btn-primary form-control">Edit Laundry</button>
          </div>
  </form>
       
      </div>
    </div>

    <!--/ DataTable with Buttons -->
  </div>

  
  
  <script>
    function showPreview(event){
       if(event.target.files.length > 0){
           var src = URL.createObjectURL(event.target.files[0]);
           var preview = document.getElementById("photopreview");
           preview.src = src;
           preview.style.display = "block";
       }
       }
</script>
  @endsection
