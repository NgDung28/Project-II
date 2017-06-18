@extends('hospital.layout.index')

@section('content')
    <div>
        <form action="hospital/medicalRecord/sua-{{$record['_id']}}" method="POST">
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
                                        <div class="col-sm-8"><input class="form-control" name="benhVien"
                                                                     value="<?php echo $record['benhVien']?>">
                                        </div>
                                    </div>
                                    <div class=" row">
                                        <div class="col-sm-4">Khoa</div>
                                        <div class="col-sm-8"><input class="form-control" name="khoa"
                                                                     value="<?php echo $record['khoa']?>"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">Giường</div>
                                        <div class="col-sm-8" name="giuong"><input class="form-control"
                                                                                   name="giuong"
                                                                                   value="<?php echo $record['giuong']?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-5">
                                    <div class="row">
                                        <div class="col-sm-4">Số lưu trữ</div>
                                        <div class="col-sm-8" name="soLuuTru"><input class="form-control"
                                                                                     name="soLuuTru"
                                                                                     value="<?php echo $record['soLuuTru']?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">Mã YT</div>
                                        <div class="col-sm-8" name="maYT"><input class="form-control" name="maYT"
                                                                                 value="<?php echo $record['maYT']?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3>Phần hành chính</h3>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-4">1.Họ tên</div>
                                        <div class="col-sm-8"><input class="form-control" name="ten"
                                                                     value="<?php echo $record['phanHanhChinh']['hoTen']?>">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4">3.Giới tính</div>
                                        <div class="col-sm-8">
                                            <label class="radio-inline">
                                                <input name="gioiTinh" value="Nam"
                                                       <?php echo ($record{'phanHanhChinh'}{'gioiTinh'} == "Nam") ? 'checked="checked"' : '';?>
                                                       type="radio">1.Nam
                                            </label>
                                            <label class="radio-inline">
                                                <input name="gioiTinh" value="Nu"
                                                       <?php echo ($record{'phanHanhChinh'}{'gioiTinh'} == "Nữ") ? 'checked="checked"' : '';?>
                                                       type="radio">2.Nữ
                                            </label>
                                        </div>
                                    </div>

                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4">5.Dân tộc</div>
                                        <div class="col-sm-8"><input class="form-control" name="danToc"
                                                                     value="<?php echo $record['phanHanhChinh']['danToc']?>">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4">7.Địa chỉ</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">Số nhà</div>
                                        <div class="col-sm-4"><input class="form-control" name="soNha"
                                                                     value="<?php echo $record['phanHanhChinh']['diaChi']["soNha"]?>">
                                        </div>
                                        <div class="col-sm-2">Thôn, phố</div>
                                        <div class="col-sm-4"><input class="form-control" name="thon"
                                                                     value="<?php echo $record['phanHanhChinh']['diaChi']["thon"]?>"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">Xã, phường</div>
                                        <div class="col-sm-4"><input class="form-control" name="xa"
                                                                     value="<?php echo $record['phanHanhChinh']['diaChi']["xa"]?>"/>
                                        </div>
                                        <div class="col-sm-2">Quận, huyện</div>
                                        <div class="col-sm-4"><input class="form-control" name="huyen"
                                                                     value="<?php echo $record['phanHanhChinh']['diaChi']["huyen"]?>"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2">Tỉnh, thành phố</div>
                                        <div class="col-sm-4"><input class="form-control" name="tinh"
                                                                     value="<?php echo $record['phanHanhChinh']['diaChi']["tinh"]?>"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-1"></div>
                                <div class="col-sm-5">
                                    <div class="row">
                                        <div class="col-sm-4">2.Ngày sinh</div>
                                        <div class="col-sm-8"><input class="form-control" name="ngaySinh"
                                                                     value="<?php echo $record['phanHanhChinh']['ngaySinh']?>"/>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4">4.Nghề nghiệp</div>
                                        <div class="col-sm-8"><input class="form-control" name="ngheNghiep"
                                                                     value="<?php echo $record['phanHanhChinh']['ngheNghiep']?>"/>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4">6.Ngoại kiều</div>
                                        <div class="col-sm-8"><input class="form-control" name="ngoaiKieu"
                                                                     value="<?php echo $record['phanHanhChinh']['ngoaiKieu']?>"/>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4">8.Nơi làm việc</div>
                                        <div class="col-sm-8"><input class="form-control" name="noiLv"
                                                                     value="<?php echo $record['phanHanhChinh']['noiLamViec']?>"/>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4">9.Ngày vào viện</div>
                                        <div class="col-sm-8"><input class="form-control" name="ngayVaoVien"
                                                                     value="<?php echo $record['phanHanhChinh']['ngayVaoVien']?>"/>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4">10.Điện thoại</div>
                                        <div class="col-sm-8"><input class="form-control" name="dienThoai"
                                                                     value="<?php echo $record['phanHanhChinh']['dienThoai']?>"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 50px;"></div>
                            <div align="center">
                                <div align="center">
                                    <a>
                                        <button type="submit" class="btn btn-primary">Cập nhật</button>
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
                            <center>KHÁM SƠ BỘ BỆNH HEN PHẾ QUẢN VÀ VIÊM PHỔI TẮC NGHẼN</center>
                            <br>
                        </h1>
                        <br><br>
                    </div>
                    <h3>I.Lý do vào viện</h3>
                    <textarea class="form-control" name="lyDo"
                              style="height: 100px; width: 500px;">{{$record['lyDoVaoVien']}}</textarea>
                    <h3>II.Hỏi bệnh</h3>
                    <h4>A.Tiền sử bệnh</h4>
                    @foreach($question['hoiBenh'] as $i => $que)
                        <p><strong>{{$i+1}}.{{$que['text']}}</strong></p>
                        <label class="radio-inline">
                            <input name="hoiBenh{{$i}}" value="Co"
                                   type="radio" <?php echo ($record['hoiBenh'][$i]['answer'] == "Có") ? 'checked=""' : '';?>>Có
                        </label>
                        <label class="radio-inline">
                            <input name="hoiBenh{{$i}}" value="Khong"
                                   type="radio" <?php echo ($record['hoiBenh'][$i]['answer'] == "Không") ? 'checked=""' : '';?>>Không
                        </label>
                        <label class="radio-inline">
                            <input name="hoiBenh{{$i}}" value="ChuaChon"
                                   type="radio" <?php echo ($record['hoiBenh'][$i]['answer'] == "Chưa chọn") ? 'checked=""' : '';?>>Chưa
                            chọn
                        </label>
                    @endforeach

                    <h4>B.Khám toàn thân</h4>
                    <label>- Mạch(lần/phút): &nbsp;&nbsp;&nbsp;&nbsp;</label><input type="input" name="mach" value="<?php echo $record['khamToanThan']["mach"]?>"/><br>
                    <label>- Nhiệt độ(oC): &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="input"
                                                                                                          name="nhietDo" value="<?php echo $record['khamToanThan']["nhietDo"]?>"/><br>
                    <label>- Huyết áp(mmHg):&nbsp;&nbsp;&nbsp;</label><input type="input" name="huyetAp" value="<?php echo $record['khamToanThan']["huyetAp"]?>"/><br>
                    <label>- Nhịp thở(lần/phút):</label><input type="input" name="nhipTho" value="<?php echo $record['khamToanThan']["nhipTho"]?>"/><br>
                    <label>- Cân nặng(kg):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input
                            type="input" name="canNang" value="<?php echo $record['khamToanThan']["canNang"]?>"/><br>
                    <label>- Chiều cao(m):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input
                            type="input" name="chieuCao" value="<?php echo $record['khamToanThan']["chieuCao"]?>"/><br><br>
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
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </a>
                        <a>
                            <button id="hideKhamSoBo" type="button" class="btn btn-primary" style="float: right">
                                CHUẨN
                                ĐOÁN
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
                            <center>CHUẨN ĐOÁN BỆNH HEN PHẾ QUẢN</center>
                            <br>
                        </h1>
                        <br><br>
                    </div>
                    <h3>IV.Chuẩn đoán</h3>
                    <h4>a.Bệnh hen phế quản</h4>
                    @foreach($question['chuanDoan']['henPheQuan'] as $i => $que)
                        <p><strong>{{$que['_id']}}.{{$que['text']}}</strong></p>
                        <label class="radio-inline">
                            <input name="henPheQuan{{$i}}" value="Co"
                                   type="radio" <?php echo ($record['chuanDoan']['henPheQuan'][$i]['answer'] == "Có") ? 'checked=""' : '';?>>Có
                        </label>
                        <label class="radio-inline">
                            <input name="henPheQuan{{$i}}" value="Khong"
                                   type="radio" <?php echo ($record['chuanDoan']['henPheQuan'][$i]['answer'] == "Không") ? 'checked=""' : '';?>>Không
                        </label>
                        <label class="radio-inline">
                            <input name="henPheQuan{{$i}}" value="ChuaChon"
                                   type="radio" <?php echo ($record['chuanDoan']['henPheQuan'][$i]['answer'] == "Chưa chọn") ? 'checked=""' : '';?>>Chưa
                            chọn
                        </label>
                    @endforeach

                    <h4>B.Cận lâm sàng</h4>
                    @foreach($question['chuanDoan']['benhCOPD'] as $i => $que)
                        <p><strong>{{$que['_id']}}.{{$que['text']}}</strong></p>
                        <label class="radio-inline">
                            <input name="benhCOPD{{$i}}" value="Co"
                                   type="radio" <?php echo ($record['chuanDoan']['benhCOPD'][$i]['answer'] == "Có") ? 'checked=""' : '';?>>Có
                        </label>
                        <label class="radio-inline">
                            <input name="benhCOPD{{$i}}" value="Khong"
                                   type="radio" <?php echo ($record['chuanDoan']['benhCOPD'][$i]['answer'] == "Không") ? 'checked=""' : '';?>>Không
                        </label>
                        <label class="radio-inline">
                            <input name="benhCOPD{{$i}}" value="ChuaChon"
                                   type="radio" <?php echo ($record['chuanDoan']['benhCOPD'][$i]['answer'] == "Chưa chọn") ? 'checked=""' : '';?>>Chưa
                            chọn
                        </label>
                    @endforeach

                   <br><br>
                    <div align="center">
                        <a>
                            <button id="r_khamSoBo" type="button" class="btn btn-primary" style="float: left">
                                <--Khám sơ
                                bộ
                            </button>
                        </a>
                        <a>
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </a>
                    </div>
                    <div style="height: 100px"></div>
                </div>
            </div>
        </form>
    </div>

@endsection