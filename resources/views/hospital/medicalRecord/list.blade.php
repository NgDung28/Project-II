@extends('hospital.layout.index')

@section('content')
    {{--{!! Form::model($medical, ['route'=>]) !!}--}}
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách bệnh án</h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $er)
                        {{$er}}<br>
                    @endforeach
                </div>
            @endif

            @if(session('thongBao'))
                <div class="alert alert-success">
                    {{session('thongBao')}}
                </div>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;
                    </button>
                    <strong>{{session()->get('success')}}</strong>
                </div>
            @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Số lưu trữ</th>
                    <th>Tên bệnh nhân</th>
                    <th>Loại bệnh án</th>
                    <th>Cập nhật</th>
                    <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($medical as $i => $hp)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{{ $hp{'soLuuTru'} }}</td>
                        <td>{{ $hp{'phanHanhChinh'}{'hoTen'} }}</td>
                        <td>{{ $hp{'tenBenhAn'} }}</td>
                        <td class="center"><i class="fa fa-pencil  fa-fw"></i>
                            <a href="hospital/medicalRecord/suaBenhAn-{{$hp['_id']}}"> Sửa</a>
                        </td>
                        <td class="center"><i class="fa fa-trash-o fa-fw"></i>
                            <a href="hospital/medicalRecord/xoaBenhAn-{{$hp['_id']}}">{!! MedicalController::xoaBenhAn($hp['_id']) !!}</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
    </div>
    @endsection
