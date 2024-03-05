@extends('layouts.admin')
@section('header', 'Home')

@section('content')
<!-- Small boxes (Stat box) -->


<div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $total_books }}</h3>
                  <p>Total Buku</p>
              </div>
              <div class="icon">
                <i class="fa fa-book"></i>
              </div>
              <a href="{{ url('buku')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $total_anggota }}</h3>
                  <p>Total Anggota</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ url('anggota')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $total_penerbit }}</h3>
                  <p>Data Penerbit</p>
              </div>
              <div class="icon">
                <i class="fa fa-book"></i>
              </div>
              <a href="{{ url('penerbit')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $total_peminjaman }}</h3>
                  <p>Data Peminjaman</p>
              </div>
              <div class="icon">
                <i class="fa fa-book"></i>
              </div>
              <a href="{{ url('peminjaman')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Grafik Penerbit</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
              </div>
              <div class="card-body">
                <canvas id="donutChart" style="min-height: 250px; height: 25px; max-height: 250px; max-width: 100px;"></canvas>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Grafik Peminjaman</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
              </div>
              <div class="card-body">
                <div class="chart">
                    <canvas id="barChart" style="min-height: 250px; height: 25px; max-height: 250px; max-width: 100px;"></canvas>
                </div>
              </div>
            </div>
          </div>
</div>

@endsection
<script src="{{ asset('assets..../.../plusins/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('assets..../.../plusins/jquery/jquery.min.js')}}"></script>
<script type="text/javascript">

  var label_donut = '{ !! json_encode($label_donut) !!}';
  var label_donut = '{ !! json_encode($label_donut) !!}';
  $(function () {
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData = {
      labels: JSON.parse (label_donut),
      datasets:[
        {
          data: JSON.parse(data_donut),
          backgroundColor : ['#56954', '#00a65a', '#56954', '#00a65a', '#56954', '#00a65a'],
        }
      ]
    }
    var donutOptions = {
      maintainAspectRatio : false,
      esponsive : true,
    }
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })

    var areaChartData = {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label : 'Digital goods',
          backgroundcolor : 'rgba(60, 141, 188, 0, 9)',
          data : [28, 48, 40, 19, 86, 27, 90]
        },
      ]
    }

    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0]=temp1
    barChartData.datasets[1]=temp0

    var barChartOptions = {
      responsive : true,
      maintainAspectRatio : false,
      datasetFill : false
    }
  }
  
  )
</script>