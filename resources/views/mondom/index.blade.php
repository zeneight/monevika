<!-- First you need to extend the CB layout -->
@extends('crudbooster::admin_template')
@section('content')
<!-- Your custom  HTML goes here -->
<div class="box">
    <div class="box-body">
        <div class="col-md-12">
            <div class="pull-left"><br></div>
            <div class="pull-right"></div>
        </div>
        <div class="col-md-6 callout callout-info">
            <div class="col-md-6 no-padding">
                Tanggal Terakhir Dicek: <br><b>{{ Carbon\Carbon::now()->format('d/m/Y') }}</b>
            </div>
            <div class="col-md-6">
                Web Aktif/Tidak Aktif: <br><b>{{$online+$offline}} / {{$taktif}}</b>
            </div>
        </div>
        <div class="col-md-3">
            <div class="callout callout-success">
                <p>
                    Web Online: <br><b>{{ $online }}</b> dari total {{$online+$offline}}
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="callout callout-danger">
                <p>
                    Web Down: <br><b>{{ $offline }} </b> dari total {{$online+$offline}}
                </p>
            </div>
        </div>
        <hr>
        <div class="col-md-12">
            <table id="example" class='table table-striped table-bordered'>
                <thead>
                    <tr>
                        <!-- <th>No</th> -->
                        <th style="width:2%;text-align:right"></th>
                        <th>Domain</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection