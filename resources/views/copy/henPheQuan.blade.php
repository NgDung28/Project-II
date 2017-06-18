@extends('hospital.layout.index')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="col-lg-12">
                <h1 class="page-header">BỆNH ÁN NGHIÊN CỨU BỆNH HEN PHẾ QUẢN VÀ VIÊM PHỔI TẮC NGHẼN
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div style="padding-bottom:20px">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-4">Bệnh viện</div>
                                <div class="col-sm-8"><input class="form-control"/></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">Khoa</div>
                                <div class="col-sm-8"><input class="form-control"/></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">Giường</div>
                                <div class="col-sm-8"><input class="form-control"/></div>
                            </div>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-5">
                            <div class="row">
                                <div class="col-sm-4">Số lưu trữ</div>
                                <div class="col-sm-8"><input class="form-control"/></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">Mã YT</div>
                                <div class="col-sm-8"><input class="form-control"/></div>
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
                        <div class="col-sm-8"><input class="form-control"/></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-4">3.Giới tính</div>
                        <div class="col-sm-8">
                            <label class="radio-inline">
                                <input name="rdoStatus" value="1" checked="" type="radio">1.Nam
                            </label>
                            <label class="radio-inline">
                                <input name="rdoStatus" value="2" type="radio">2.Nữ
                            </label>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-4">5.Dân tộc</div>
                        <div class="col-sm-8"><input class="form-control"/></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">7.Địa chỉ</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">Số nhà</div>
                        <div class="col-sm-4"><input class="form-control"/></div>
                        <div class="col-sm-2">Thôn, phố</div>
                        <div class="col-sm-4"><input class="form-control"/></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">Xã, phường</div>
                        <div class="col-sm-4"><input class="form-control"/></div>
                        <div class="col-sm-2">Quận, huyện</div>
                        <div class="col-sm-4"><input class="form-control"/></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">Tỉnh, thành phố</div>
                        <div class="col-sm-4"><input class="form-control"/></div>
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-sm-4">2.Ngày sinh</div>
                        <div class="col-sm-8"><input class="form-control"/></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-4">4.Nghề nghiệp</div>
                        <div class="col-sm-8"><input class="form-control"/></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-4">6.Ngoại kiều</div>
                        <div class="col-sm-8"><input class="form-control"/></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-4">8.Nơi làm việc</div>
                        <div class="col-sm-8"><input class="form-control"/></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-4">9.Ngày vào viện</div>
                        <div class="col-sm-8"><input class="form-control"/></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-4">10.Điện thoại</div>
                        <div class="col-sm-8"><input class="form-control"/></div>
                    </div>
                </div>
            </div>
        </form>
        <h3>I.Lý do vào viện</h3>

        <h3>II.Hỏi bệnh</h3>
        <h4>A.Tiền sử bản thân</h4>
        <div class="form-group">
            <p><strong>1. Có mắc bệnh mãn tính gì không ? ( hen, copd, loét dạ dầy tá tràng, đái tháo đường, cao huyết
                    áp v…v.)</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Không
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Có
                </label>
                <span>&nbsp;&nbsp;&nbsp;Diễn giải:</span><input type="input">
            </form>


            <p><strong>2. Có ho khan, ho có đờm, ho ra máu?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
                <span>&nbsp;&nbsp;&nbsp;Diễn giải:</span><input type="input">
            </form>
            <p><strong>3. Sốt nhẹ về chiều?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
                <span>&nbsp;&nbsp;&nbsp;Diễn giải:</span><input type="input">
            </form>
            <br>

            <h4>B.Tiền sử gia đình</h4>
            <p><strong>- Gia đình có ai bị hen không?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <br>

            <h4>C.Quá trình bệnh lý</h4>
            <p><strong>4. Người bệnh có ho, khò khè nghe tiếng rít khi thở và nặng ngực khi tiếp xúc với một số dị
                    nguyên hay khói bụi ô nhiễm, cơn ho tái phát về đêm nhiều lần, gặp ở trẻ em hoặc người trẻ đã từng
                    được chẩn đoán hen phế quản hoặc chẩn đoán lần đầu ( nghĩ đến hen phế quản).</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Hen phế quản
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>5. COPD: Người bệnh thường > 40 tuổi, có tiền sử hút thuốc lá, thuốc lào v…v.có ho khạc đờm mạn
                    tính, khó thở liên tục, nặng dần theo thời gian, khó thở tăng khi gắng sức ( nghĩ đến bệnh
                    COPD).</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">COPD
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <br>

            <h4>D. KHÁM TOÀN THÂN</h4>
            <label>- Mạch(lần/phút):</label><input type="input"/>
            <label>- Nhiệt độ(oC):</label><input type="input"/><br>
            <label>- Huyết áp(mmHg):</label><input type="input"/>
            <label>- Nhịp thở(lần/phút):</label><input type="input"/><br>
            <label>- Cân nặng(kg):</label><input type="input"/>
            <label>- Chiều cao(m):</label><input type="input"/><br><br>

            <h4>D. KHÁM THỰC THỂ</h4>
            <p><strong>6. Nghe phổi: bệnh hen nghe phổi có ran rít, ran ngáy nặng có suy hô hấp</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Hen phế quản
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>7. Khám phổi: bệnh COPD lồng ngực co hình thùng, nghe phổi rì rào phế nang giảm, giai đoạn muộn
                    có thể thấy ran rít, ran ngáy, ran ầm, ran nổ; có thể kèm theo suy tim phải (gan to, tĩnh mạch cổ
                    nổi, phù hai chân)</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">COPD
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <br>

            <h4>E. Xét nghiệm cận lâm sàng</h4>
            <label>a.Hen phế quản</label>
            <p><strong>8. Đo chức năng thông khí: bằng máy đo chức năng hô hấp hoặc lưu lượng đỉnh kế đo chỉ số PEF.
                    FEV1 tăng ≥ 12% hoặc ≥ 200ml sau khi hít thuốc giãn phế quản (nếu nghi ngờ có thể đo lại lần 2, chỉ
                    số gaensler FEV1/FVC > 70% sau dùng thuốc giãn phế quản). Chẩn đoán xác định hen phế quản</strong>
            </p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Hen phế quản
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>9. Đo PaO2: PaO2 > 60 mmHg là hen ở mức độ nặng, PaO2 bình thường là hen ở mức trung bình, PaO2 <
                    60 mmHg có thể tím sắp ngừng thở.</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio"> PaO2 > 60 mmHg(hen nặng)
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">PaO2 < 60 mmHg(rất nặng)
                </label>
            </form>
            <br>

            <label>b.Bệnh COPD</label>
            <p><strong>10. Đo chức năng thông khí: có rối loạn thông khí tắc nghẽn không hồi phục sau nghiệm pháp giãn
                    phế quản, chỉ số Gaensler FEV1/FVC < 70% (tiêu chuẩn vàng để chẩn đoán COPD).</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">FEV1/FVC < 70% (COPD)
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>11. Phân loại mức độ nặng của đợt cấp COPD theo PaO2 mmHg:
                    PaO2 mmHg: > 60 (nhẹ); 50 - 60 (trung bình); 40 - 50 (nặng); < 40 (rất nặng)
                </strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Nhẹ
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Trung bình
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Nặng
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Rất nặng
                </label>
            </form>
            <p><strong>12. Phân loại mức độ nặng nhẹ của đợt cấp COPD theo PaCO2
                    PaCO2 mmHg: < 45 (nhẹ); 45 - 54 (trung bình); 55 - 65 (nặng); > 65 (rất nặng)
                </strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Nhẹ
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Trung bình
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Nặng
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Rất nặng
                </label>
            </form>
            <p><strong>13. Phân loại mức độ nặng của đợt cấp COPD theo pH máu:
                    pH máu: 7,32 – 7,42 (nhẹ); 7,31 - 7,36 (trung bình); 7,25 – 7,3 (nặng); < 7,25 (rất nặng)
                </strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Nhẹ
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Trung bình
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Nặng
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Rất nặng
                </label>
            </form>
            <p><strong>14. X-quang ngực: trong bênh COPD có hình ảnh khí phế thũng, tăng áp lực động mạch phổi</strong>
            </p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Không
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Có
                </label>
            </form>
            <p><strong>15.	Điện tâm đồ: trong COPD có thể thấy dầy nhĩ phải, dầy thất phải</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Không
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Có
                </label>
            </form>
        </div>

        <div style="padding-bottom:120px">
            <button type="submit" class="btn btn-primary">Add</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </div>
        <!-- /.row -->
        <!-- /.container-fluid -->
    </div>
@endsection