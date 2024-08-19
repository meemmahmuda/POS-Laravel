@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Dashboard</li>
@endsection

@section('content')
<!-- Small boxes (Stat box) -->
<div class="row" style="padding-top: 20px;">

<div class="col-lg-3 col-xs-6">
    <!-- small box -->

    <div class="small-box" style="background-color: #007bff; border-radius: 5px; color: #fff; position: relative;">
        <div class="inner" style="padding: 15px;">
            <h3 style="font-size: 28px; font-weight: bold;">{{ $kategori }}</h3>
            <p style="font-size: 16px;">Total Categories</p>
        </div>
        <div class="icon" style="position: absolute; top: -55px; right: -5px;">
            <i class="fa-solid fa-layer-group" 
            style="font-size: 50px; color: #007bff; background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);">
            </i>
        </div>
        <a href="{{ route('kategori.index') }}" class="small-box-footer" style="display: block; padding: 10px; color: #fff; background-color: rgba(0, 0, 0, 0.1); border-top: 1px solid rgba(0, 0, 0, 0.1); text-align: center; text-decoration: none;">
            View <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div>

    <!-- ./col --><!-- visit "codeastro" for more projects! -->
    <div class="col-lg-3 col-xs-6">
    <!-- small box -->
        <div class="small-box" style="background-color: #D980FA; border-radius: 5px; color: #fff; position: relative;">
            <div class="inner" style="padding: 15px;">
                <h3 style="font-size: 28px; font-weight: bold;">{{ $produk }}</h3>
                <p style="font-size: 16px;">Total Product</p>
            </div>
            <div class="icon" style="position: absolute; top: -55px; right: -5px;">
                <i class="fa-brands fa-product-hunt" 
                style="font-size: 50px; color: #D980FA; background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);">
                </i>
            </div>
            <a href="{{ route('produk.index') }}" class="small-box-footer" style="display: block; padding: 10px; color: #fff; background-color: rgba(0, 0, 0, 0.1); border-top: 1px solid rgba(0, 0, 0, 0.1); text-align: center; text-decoration: none;">
                View <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>


    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
    <!-- small box -->
        <div class="small-box" style="background-color: #f39c12; border-radius: 5px; color: #fff; position: relative;">
        <div class="inner" style="padding: 15px;">
            <h3 style="font-size: 28px; font-weight: bold;">{{ $member }}</h3>
            <p style="font-size: 16px;">Total Member</p>
        </div>
        <div class="icon" style="position: absolute; top: -55px; right: -5px;">
            <i class="fa fa-id-card" 
               style="font-size: 50px; color: #f39c12; background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);">
            </i>
        </div>
        <a href="{{ route('member.index') }}" class="small-box-footer" style="display: block; padding: 10px; color: #fff; background-color: rgba(0, 0, 0, 0.1); border-top: 1px solid rgba(0, 0, 0, 0.1); text-align: center; text-decoration: none;">
            View <i class="fa fa-arrow-circle-right"></i>
        </a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box" style="background-color: #28a745; border-radius: 5px; color: #fff; position: relative; ">
        <div class="inner" style="padding: 20px;">
            <h3 style="font-size: 28px; font-weight: bold; margin: 0;">{{ $supplier }}</h3>
            <p style="font-size: 16px; margin-top: 5px;">Total Supplier</p>
        </div>
        <div class="icon" style="position: absolute; top: -55px; right: -5px;">
            <i class="fa-solid fa-boxes-packing" 
               style="font-size: 50px; color: #28a745; background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);">
            </i>
        </div>
        <a href="{{ route('supplier.index') }}" class="small-box-footer" style="display: block; padding: 10px; color: #fff; background-color: rgba(0, 0, 0, 0.1); border-top: 1px solid rgba(0, 0, 0, 0.1); text-align: center; text-decoration: none; ">
            View <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div>

<!-- /.row -->

<div class="row">

<div class="col-lg-3 col-xs-6" style="margin-top: 20px; margin-left: 17px;">
        <!-- small box -->
        <div class="small-box" style="background-color: #f39c12; border-radius: 5px; color: #fff; position: relative;">
            <div class="inner" style="padding: 15px;">
            <h3 style="font-size: 28px; font-weight: bold;">
                <h3 style="font-size: 28px; font-weight: bold;">{{ $penjualan }}</h3>

                <p style="font-size: 16px;">Sales</p>
            </div>
            <div class="icon" style="position: absolute; top: -55px; right: -5px;">
            <i class="fa-solid fa-money-bill-trend-up" 
               style="font-size: 50px; color: #f39c12; background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);">
            </i>
            </div>
            <a href="{{ route('penjualan.index') }}" class="small-box-footer" style="display: block; padding: 10px; color: #fff; background-color: rgba(0, 0, 0, 0.1); border-top: 1px solid rgba(0, 0, 0, 0.1); text-align: center; text-decoration: none;">
                View <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->

    <div class="col-lg-3 col-xs-6" style="margin-top: 20px; margin-left: 17px; margin-right: 17px;">
    <!-- small box -->
    <div class="small-box" style="background-color: #e74c3c; border-radius: 5px; color: #fff; position: relative;">
    <div class="inner" style="padding: 15px;">
        <h3 style="font-size: 28px; font-weight: bold;">
            <h3 style="font-size: 28px; font-weight: bold;">
            {{ $pengeluaran }}
            </h3>
        <p style="font-size: 16px;">Total Expenses</p>
    </div>
    <div class="icon" style="position: absolute; top: -55px; right: -5px;">
        <i class="fa-solid fa-hand-holding-dollar" 
           style="font-size: 50px; color: #e74c3c; background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);">
        </i>
    </div>
    <a href="{{ route('pengeluaran.index') }}" class="small-box-footer" style="display: block; padding: 10px ; color: #fff; background-color: rgba(0, 0, 0, 0.2); border-top: 1px solid rgba(0, 0, 0, 0.2); text-align: center; text-decoration: none;">
        View <i class="fa fa-arrow-circle-right"></i>
    </a>
</div>

</div>
    <!-- ./col -->
    <!-- visit "codeastro" for more projects! -->
    <div class="col-lg-3 col-xs-6" style="margin-top: 20px; margin-left: 17px; margin-right: 17px;">
        <!-- small box -->
        <div class="small-box" style="background-color: #9980FA; border-radius: 5px; color: #fff; position: relative;">
            <div class="inner" style="padding: 15px;">
            <h3 style="font-size: 28px; font-weight: bold;">
                <h3 style="font-size: 28px; font-weight: bold;">{{ $pembelian }}</h3>

                <p style="font-size: 16px;">Total Purchase</p>
            </div>
            <div class="icon" style="position: absolute; top: -55px; right: -5px;">
                <i class="fa-solid fa-shop-lock" style="font-size: 50px; color: #9980FA; background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);"></i>
            </div>
            <a href="{{ route('pembelian.index') }}" class="small-box-footer" style="display: block; padding: 10px ; color: #fff; background-color: rgba(0, 0, 0, 0.2); border-top: 1px solid rgba(0, 0, 0, 0.2); text-align: center; text-decoration: none;">View <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->

    <!-- visit "codeastro" for more projects! -->
</div>
<!-- Main row -->
<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Income Chart {{ tanggal_indonesia($tanggal_awal, false) }} - {{ tanggal_indonesia($tanggal_akhir, false) }}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="chart">
                            <!-- Sales Chart Canvas -->
                            <canvas id="salesChart" style="height: 280px;"></canvas>
                        </div>
                        <!-- /.chart-responsive -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row (main row) -->
@endsection

@push('scripts')
<!-- ChartJS -->
<script src="{{ asset('AdminLTE-2/bower_components/chart.js/Chart.js') }}"></script>
<script>
$(function() {
    // Get context with jQuery - using jQuery's .get() method.
    var salesChartCanvas = $('#salesChart').get(0).getContext('2d');
    // This will get the first returned node in the jQuery collection.
    var salesChart = new Chart(salesChartCanvas);

    var salesChartData = {
        labels: {{ json_encode($data_tanggal) }},
        datasets: [
            {
                label: 'Pendapatan',
                fillColor           : 'rgba(60,141,188,0.9)',
                strokeColor         : 'rgba(60,141,188,0.8)',
                pointColor          : '#3b8bba',
                pointStrokeColor    : 'rgba(60,141,188,1)',
                pointHighlightFill  : '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data: {{ json_encode($data_pendapatan) }}
            }
        ]
    };

    var salesChartOptions = {
        pointDot : false,
        responsive : true
    };

    salesChart.Line(salesChartData, salesChartOptions);
});
</script>
@endpush