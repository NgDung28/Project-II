@extends('hospital.layout.index')

@section('content')
    <div id="thongTinchung">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        <center>THÔNG TIN BỆNH NHÂN</center>
                        <br>
                    </h1>
                    <br><br>
                </div>
                <!-- /.col-lg-12 -->
                <?php //var_dump($record{'phần hành chính'}{'giới tính'});?>
                <div style="padding-bottom:20px">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-4">Bệnh viện</div>
                                    <div class="col-sm-8" id="benhVien"><input class="form-control"
                                                                               value="<?php echo $record['benhVien']?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">Khoa</div>
                                    <div class="col-sm-8" id="khoa"><input class="form-control"
                                                                           value="<?php echo $record['khoa']?>"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">Giường</div>
                                    <div class="col-sm-8" name="giuong"><input class="form-control"
                                                                               value="<?php echo $record['giuong']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-5">
                                <div class="row">
                                    <div class="col-sm-4" name="soLuuTru">Số lưu trữ</div>
                                    <div class="col-sm-8"><input class="form-control"
                                                                 value="<?php echo $record['soLuuTru']?>"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">Mã YT</div>
                                    <div class="col-sm-8" name="maYT"><input class="form-control"
                                                                             value="<?php echo $record['maYT']?>"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <h3>Phần hành chính</h3>
            <form action="" method="POST">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">1.Họ tên</div>
                            <div class="col-sm-8"><input class="form-control"
                                                         value="<?php echo $record['phanHanhChinh']['hoTen']?>"></div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-4">3.Giới tính</div>
                            <div class="col-sm-8">
                                <label class="radio-inline">
                                    <input name="rdo" value="Nam"
                                           type="radio" <?php echo ($record{'phanHanhChinh'}{'gioiTinh'} == "Nam") ? 'checked="checked"' : '';?>>1.Nam
                                </label>
                                <label class="radio-inline">
                                    <input name="rdo" value="Nu"
                                           type="radio" <?php echo ($record{'phanHanhChinh'}{'gioiTinh'} == "Nữ") ? 'checked="checked"' : '';?>>2.Nữ
                                </label>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-sm-4">5.Dân tộc</div>
                            <div class="col-sm-8"><input class="form-control"
                                                         value="<?php echo $record['phanHanhChinh']['danToc']?>"></div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-4">7.Địa chỉ</div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">Số nhà</div>
                            <div class="col-sm-4"><input class="form-control"
                                                         value="<?php echo $record['phanHanhChinh']['diaChi']["soNha"]?>">
                            </div>
                            <div class="col-sm-2">Thôn, phố</div>
                            <div class="col-sm-4"><input class="form-control"
                                                         value="<?php echo $record['phanHanhChinh']['diaChi']["thon"]?>"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">Xã, phường</div>
                            <div class="col-sm-4"><input class="form-control"
                                                         value="<?php echo $record['phanHanhChinh']['diaChi']["xa"]?>"/>
                            </div>
                            <div class="col-sm-2">Quận, huyện</div>
                            <div class="col-sm-4"><input class="form-control"
                                                         value="<?php echo $record['phanHanhChinh']['diaChi']["huyen"]?>"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">Tỉnh, thành phố</div>
                            <div class="col-sm-4"><input class="form-control"
                                                         value="<?php echo $record['phanHanhChinh']['diaChi']["tinh"]?>"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5">
                        <div class="row">
                            <div class="col-sm-4">2.Ngày sinh</div>
                            <div class="col-sm-8"><input class="form-control"
                                                         value="<?php echo $record['phanHanhChinh']['ngaySinh']?>"/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-4">4.Nghề nghiệp</div>
                            <div class="col-sm-8"><input class="form-control"
                                                         value="<?php echo $record['phanHanhChinh']['ngheNghiep']?>"/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-4">6.Ngoại kiều</div>
                            <div class="col-sm-8"><input class="form-control"
                                                         value="<?php echo $record['phanHanhChinh']['ngoaiKieu']?>"/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-4">8.Nơi làm việc</div>
                            <div class="col-sm-8"><input class="form-control"
                                                         value="<?php echo $record['phanHanhChinh']['noiLamViec']?>"/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-4">9.Ngày vào viện</div>
                            <div class="col-sm-8"><input class="form-control"
                                                         value="<?php echo $record['phanHanhChinh']['ngayVaoVien']?>"/>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-4">10.Điện thoại</div>
                            <div class="col-sm-8"><input class="form-control"
                                                         value="<?php echo $record['phanHanhChinh']['dienThoai']?>"/>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div style="height: 50px;"></div>
            <div align="center">
                <div align="center">
                    <a href="#">
                        <button type="button" class="btn btn-primary">Lưu thông tin
                        </button>
                    </a>
                    <a href="hospital/medicalRecord/khamSoBoLaoPhoi-{{$record['_id']}}">
                        <button type="button" class="btn btn-primary" style="float: right">Khám sơ bộ --></button>
                    </a>
                </div>

            </div>

            <div style="height: 100px"></div>
        </div>
    </div>
    @endsection