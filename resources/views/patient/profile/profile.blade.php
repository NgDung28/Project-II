@extends('patient.layout.index')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User Profile
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <div class="form-group">
                        <p>1.Họ tên: </p>
                        <p>2.Ngày sinh: </p>
                        <p>3.Giới tính: </p>
                        <p>4.Nghề nghiệp: </p>
                        <p>5.Dân tộc: </p>
                        <p>6.Địa chỉ: </p>
                        <p>7.Nơi làm việc: </p>
                        <p>8.Điện thoại: </p>
                    </div>
                    <div class="form-group">
                        <label>Mô tả thêm:</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    </div>
@endsection