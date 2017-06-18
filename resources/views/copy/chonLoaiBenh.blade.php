@extends('hospital.layout.index')

@section('content')

    <div id="page-wrapper">
        <h1 class="page-header">
            <center>CHỌN LOẠI BỆNH</center>
        </h1>
        <hr>
        <div style="text-align: center;">
            <a href="hospital/medicalRecord/khamSoBoLaoPhoi">
                <button type="button" class="btn btn-default btn-lg" style="width: 300px">Lao phổi</button>
            </a>


            <br><br>
            <a href="hospital/medicalRecord/daiThaoDuong">
                <button type="button" class="btn btn-default btn-lg" style="width: 300px">Đái tháo đường</button>
            </a>
            <br>
            <br>
            <a href="hospital/medicalRecord/henPheQuan">
                <button type="button" class="btn btn-default btn-lg" style="width: 300px">Hen phế quản</button>
            </a>
            <br><br>
            <a href="hospital/medicalRecord/tangHuyetAp">
                <button type="button" class="btn btn-default btn-lg" style="width: 300px">Tăng huyết áp</button>
            </a>
        </div>
        <br>
        {{--<div align="center">--}}
        {{--<br>--}}
        {{--<?php--}}
        {{--echo '<a href="hospital/medicalRecord/khamSoBoLaoPhoi"><button type="button" class="btn btn-primary">Khám sơ bộ</button></a>';--}}
        {{--?>--}}
        {{--</div>--}}

        <div style="height: 100px"></div>
    </div>
@endsection