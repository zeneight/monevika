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
        <div class="col-md-12">
            <div class="callout callout-info">
                <p>Berikut adalah list data domian yang telah dilakukan monitoring. Untuk memfilter data pada tabel silahkan pilih pada combobox di bawah ini.</b></p>
            </div>
            <form>
                <input style="height:0px; top:-1000px; position:absolute" type="text" value="">
                <div class="col-md-6">
                    <!-- <hr> -->
                    <span class="label label-primary">Tanggal Input</span>
                    <div class="input-group"> 
                        <div class="input-group-addon"> 
                            <i class="glyphicon glyphicon-calendar"></i> 
                        </div>
                        <input tabindex="-1" type="text" class="form-control pull-right" id="datesearch" placeholder="** Cari berdasar tanggal">
                    </div>

                    <!-- <hr> -->
                </div>
                
            </form>
        </div>
        <div class="col-md-12">
            <hr>
            <table id="example" class='table table-striped table-bordered'>
                <thead>
                    <tr>
                        <!-- <th>No</th> -->
                        <th>Tanggal Input</th>
                        <th>Aplikasi/Domain</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection