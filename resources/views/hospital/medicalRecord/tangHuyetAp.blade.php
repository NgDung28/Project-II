@extends('hospital.layout.index')

@section('content')
    <div>
        <form action="hospital/medicalRecord/them-{{"bệnh tăng huyết áp"}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <div id="thongTinChung">
                <div id="page-wrapper">
                    <div class="container-fluid">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                <center>THÔNG TIN BỆNH NHÂN</center>
                                <br>
                            </h1>
                            <br><br>
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
                        </div>
                        <div style="padding-bottom:20px">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-4">Bệnh viện</div>
                                        <div class="col-sm-8"><input class="form-control" name="benhVien">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">Khoa</div>
                                        <div class="col-sm-8"><input class="form-control" name="khoa"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">Giường</div>
                                        <div class="col-sm-8" name="giuong"><input class="form-control" name="giuong">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-5">
                                    <div class="row">
                                        <div class="col-sm-4">Số lưu trữ</div>
                                        <div class="col-sm-8" name="soLuuTru"><input class="form-control"
                                                                                     name="soLuuTru"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">Mã YT</div>
                                        <div class="col-sm-8" name="maYT"><input class="form-control" name="maYT">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3>Phần hành chính</h3>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-4">1.Họ tên</div>
                                        <div class="col-sm-8"><input class="form-control" name="ten">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4">3.Giới tính</div>
                                        <div class="col-sm-8">
                                            <label class="radio-inline">
                                                <input name="gioiTinh" value="Nam"
                                                       type="radio">1.Nam
                                            </label>
                                            <label class="radio-inline">
                                                <input name="gioiTinh" value="Nu"
                                                       type="radio">2.Nữ
                                            </label>
                                        </div>
                                    </div>

                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4">5.Dân tộc</div>
                                        <div class="col-sm-8"><input class="form-control" name="danToc">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4">7.Địa chỉ</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">Số nhà</div>
                                        <div class="col-sm-4"><input class="form-control" name="soNha">
                                        </div>
                                        <div class="col-sm-2">Thôn, phố</div>
                                        <div class="col-sm-4"><input class="form-control" name="thon">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">Xã, phường</div>
                                        <div class="col-sm-4"><input class="form-control" name="xa"/>
                                        </div>
                                        <div class="col-sm-2">Quận, huyện</div>
                                        <div class="col-sm-4"><input class="form-control" name="huyen"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">Tỉnh, thành phố</div>
                                        <div class="col-sm-4"><input class="form-control" name="tinh"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-5">
                                    <div class="row">
                                        <div class="col-sm-4">2.Ngày sinh</div>
                                        <div class="col-sm-8"><input class="form-control" name="ngaySinh"/>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4">4.Nghề nghiệp</div>
                                        <div class="col-sm-8"><input class="form-control" name="ngheNghiep"/>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4">6.Ngoại kiều</div>
                                        <div class="col-sm-8"><input class="form-control" name="ngoaiKieu"/>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4">8.Nơi làm việc</div>
                                        <div class="col-sm-8"><input class="form-control" name="noiLv"/>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4">9.Ngày vào viện</div>
                                        <div class="col-sm-8"><input class="form-control" name="ngayVaoVien"/>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4">10.Điện thoại</div>
                                        <div class="col-sm-8"><input class="form-control" name="dienThoai"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 50px;"></div>
                            <div align="center">
                                <div align="center">
                                    <a>
                                        <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                                    </a>
                                    <a>
                                        <button id="hideThongTinChung" type="button" class="btn btn-primary"
                                                style="float: right">Khám sơ bộ -->
                                        </button>
                                    </a>
                                </div>

                            </div>

                            <div style="height: 100px"></div>
                        </div>
                    </div>

                </div>
            </div>

            <div id="khamSoBo">
                <div id="page-wrapper">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <center>KHÁM SƠ BỘ BỆNH TĂNG HUYẾT ÁP</center>
                            <br>
                        </h1>
                        <br><br>
                    </div>
                    <h3>I.Lý do vào viện</h3>
                    <textarea class="form-control" style="height: 100px; width: 500px;" name="lyDo"></textarea>
                    <h3>II.Hỏi bệnh</h3>
                    @foreach($question['hoiBenh'] as $i => $que)
                        <p><strong>{{$i+1}}.{{$que['text']}}</strong></p>
                        <label class="radio-inline">
                            <input name="hoiBenh{{$i}}" value="Co"
                                   type="radio">Có
                        </label>
                        <label class="radio-inline">
                            <input name="hoiBenh{{$i}}" value="Khong"
                                   type="radio">Không
                        </label>
                        <label class="radio-inline">
                            <input name="hoiBenh{{$i}}" value="ChuaChon"
                                   type="radio">Chưa chọn
                        </label>
                    @endforeach

                    <h3>III.Khám bệnh</h3>
                    <h4>a.Khám toàn thân</h4>
                    <label>- Mạch(lần/phút): &nbsp;&nbsp;&nbsp;&nbsp;</label><input type="input" name="mach"/><br>
                    <label>- Nhiệt độ(oC): &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="input"
                                                                                                          name="nhietDo"/><br>
                    <label>- Huyết áp(mmHg):&nbsp;&nbsp;&nbsp;</label><input type="input" name="huyetAp"/><br>
                    <label>- Nhịp thở(lần/phút):</label><input type="input" name="nhipTho"/><br>
                    <label>- Cân nặng(kg):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input
                            type="input" name="canNang"/><br>
                    <label>- Chiều cao(m):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input
                            type="input" name="chieuCao"/><br><br>

                    <h4>b.Khám các bộ phận</h4>
                    <p>Tim mạch, thận, mắt, não: (tìm tổn thương cơ quan đích do tăng huyết áp)</p>
                    <textarea class="form-control" style="height: 100px; width: 500px;" name="khamBoPhan"></textarea>
                    <br>
                    <div align="center">
                        <br>
                        <a>
                            <button id="r_thongTinChung" type="button" class="btn btn-primary" style="float: left">
                                <--Thông
                                tin chung
                            </button>
                        </a>
                        <a>
                            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                        </a>
                        <a>
                            <button id="hideKhamSoBo" type="button" class="btn btn-primary" style="float: right">
                                XÉT NGHIỆM
                                -->
                            </button>
                        </a>
                    </div>
                    <div style="height: 100px"></div>
                </div>
            </div>

            <div id="chuanDoan">
                <div id="page-wrapper">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <center>XÉT NGHIỆM</center>
                            <br>
                        </h1>
                        <br><br>
                    </div>
                    <h3>IV.XÉT NGHIỆM</h3>
                    <h4>A.Xét nghiệm thường quy</h4>
                    <label>- Công thức máu: xem hồng cầu, bạch cầu, hemoglobin:</label>
                    <textarea class="form-control" style="height: 100px; width: 500px;" name="congThucMau"></textarea><br>

                    <label>- Sinh hóa máu</label>
                    <textarea class="form-control" style="height: 100px; width: 500px;" name="sinhHoaMau"></textarea><br>

                    <label>- Chỉ số xét nghiệm đánh giá rối loạn lipit máu:</label>
                    @foreach($question['xetNghiem']['thuongQuy'] as $i => $que)
                        <p><strong>{{$que['_id']}}.{{$que['text']}}</strong></p>
                        <label class="radio-inline">
                            <input name="thuongQuy{{$i}}" value="Co" type="radio">Bình thường
                        </label>
                        <label class="radio-inline">
                            <input name="thuongQuy{{$i}}" value="Khong" type="radio">Không bình thường
                        </label>
                        <label class="radio-inline">
                            <input name="thuongQuy{{$i}}" value="ChuaChon" type="radio">Chưa chọn
                        </label>
                    @endforeach
                    <br>


                    <h4>B.Xét nghiệm chuyên sâu</h4>
                    @foreach($question['xetNghiem']['chuyenSau'] as $i => $que)
                        <p><strong>{{$que['_id']}}.{{$que['text']}}</strong></p>
                        <label class="radio-inline">
                            <input name="chuyenSau{{$i}}" value="Co" type="radio">Bình thường
                        </label>
                        <label class="radio-inline">
                            <input name="chuyenSau{{$i}}" value="Khong" type="radio">Không bình thường
                        </label>
                        <label class="radio-inline">
                            <input name="chuyenSau{{$i}}" value="ChuaChon" type="radio">Chưa chọn
                        </label>
                    @endforeach

                    <div style="height: 100px"></div>
                    <div align="center">
                        <a>
                            <button id="r_khamSoBo" type="button" class="btn btn-primary" style="float: left"><--Khám sơ
                                bộ
                            </button>
                        </a>
                        <button type="submit" class="btn btn-primary">HOÀN THÀNH</button>
                    </div>
                    <div style="height: 100px"></div>
                    <!-- /.row -->
                    <!-- /.container-fluid -->
                </div>
            </div>

        </form>
    </div>

@endsection