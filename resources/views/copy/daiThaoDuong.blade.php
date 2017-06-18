@extends('hospital.layout.index')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="col-lg-12">
                <h1 class="page-header">BỆNH ÁN NGHIÊN CỨU BỆNH ĐÁI THÁO ĐƯỜNG
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
        <h4>A.Bệnh sử</h4>
        <p>Lưu ý: Tuổi xuất hiện < 30 tuổi → ĐTĐ typ 1 ; > 30 tuổi → ĐTĐ typ 2; Nếu là nữ có thai hay không?</p>
        <h4>B.Tiền sử</h4>
        <label>Bản thân</label>
        <div class="form-group">
            <p><strong>1.	Bản thân có mắc bệnh đái tháo đường (ĐTĐ); hoặc tăng huyết áp (THA), huyết áp  ≥ 140/90 mmHg hoặc đang điều trị THA?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Không
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Có
                </label>
                <span>&nbsp;&nbsp;&nbsp;Bệnh gì:</span><input type="input">
            </form>


            <p><strong>2.	Có thừa cân béo phì (chiều cao, cân nặng, BMI) kèm theo lối sống ít vận động</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>3.	Bố hoặc mẹ có mắc đái tháo đường?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Không
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Có
                </label>
            </form>
            <p><strong>4.	Phụ nữ có hội chứng buồng trứng đa nang</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Không
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Có
                </label>
            </form>
            <p><strong>5.	Phụ nữ đã sinh con to ≥ 4kg hoặc được chẩn đoán đái tháo đường thai kỳ?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Không
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Có
                </label>
            </form>
            <p><strong>6.	Có rồi loạn Lipit HDL-C < 0,9mmol/lít hoặc Triglycerid ≥ 2,82mmol/lít</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Không
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Có
                </label>
            </form>
            <p><strong>7.	Người có rồi loạn đường máu lúc đói hoặc rối loạn dung nạp glucose hoặc HBA1C ≥ 5,7%</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Không
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Có
                </label>
            </form>
            <p><strong>8.	Có gai đen ở nếp cổ (gợi ý tình trạng kháng insulin)</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Không
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Có
                </label>
            </form>
            <p><strong>9.	Người trên 45 tuổi nên sàng lọc đái tháo đường (nên xét nghiệm 3 năm 1 lần)</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">>=45 tuổi
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio"><45 tuổi
                </label>
            </form><p><strong>10.	Có mắc bệnh tuyến tụy: viêm tụy, sỏi tuỵ, ung thư tụy, bệnh cushing?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Không
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Có
                </label>
            </form><p><strong>11.	Có dùng thuốc hoặc hóa chất gì không? Corticoid, lợi tiểu, chẹn beta giao cảm</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Không
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Có
                </label>
            </form>
            <br>

            <label>Tiền sử gia đình</label>
            <p><strong>12.	Trong gia đình có bố hoặc mẹ mắc bệnh ĐTĐ không?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Không
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Có
                </label>
            </form>
            <br>

            <h3>III. Khám bệnh</h3>
            <h4>1.Triệu chứng toàn thân</h4>
            <div class="row">
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-sm-4">- Mạch(lần/phút):</div>
                        <div class="col-sm-8"><input class="form-control"/></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-4">- Huyết áp(mmHg):</div>
                        <div class="col-sm-8"><input class="form-control"/></div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-4">- Cân nặng(kg):</div>
                        <div class="col-sm-8"><input class="form-control"/></div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-sm-4">- Nhiệt độ(oC):</div>
                        <div class="col-sm-8"><input class="form-control"/></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-4">- Nhịp thở(lần/phút):</div>
                        <div class="col-sm-8"><input class="form-control"/></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-4">- Chiều cao(m):</div>
                        <div class="col-sm-8"><input class="form-control"/></div>
                    </div>
                    <br>
                </div>
            </div>

            <h4>2. Khám các bộ phận</h4>
            <p>Tim mạch, phổi, thận, mắt, não: phát hiện bệnh kèm theo hoặc biến chứng</p>
            <br>

            <h4>IV. Xét nghiệm thường quy</h4>
            <label>-	 Công thức máu: xem hồng cầu, bạch cầu, hemoglobin</label><br>
            <label>-	 Sinh hóa máu: ghi kết quả cụ thể(Nếu có chuẩn đoán ĐTĐ)</label><br>
            <p><strong>13.	Glucose máu(GM):</strong></p>
            <div class="row">
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-sm-4">Glucose máu: </div>
                        <div class="col-sm-8"><input class="form-control"/></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-4">Ure:</div>
                        <div class="col-sm-8"><input class="form-control"/></div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-4">CRP:</div>
                        <div class="col-sm-8"><input class="form-control"/></div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-sm-4">Acid uric:</div>
                        <div class="col-sm-8"><input class="form-control"/></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-4">Creatinin:</div>
                        <div class="col-sm-8"><input class="form-control"/></div>
                    </div>
                    <br>
                </div>
            </div><br>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">GM bình thường
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio"> GM cao trên ngưỡng bình thường
                </label>
            </form>

            <p><strong>14.	Cholestesol bao nhiêu?</strong>
            </p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Bình thường
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Cao trên ngưỡng bình thường
                </label>
            </form>
            <p><strong>15.	Triglycerit bao nhiêu?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Bình thường
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Cao trên ngưỡng bình thường
                </label>
            </form>
            <br>
            <p><strong>16.	HDL-C bao nhiêu?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Bình thường
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Cao trên ngưỡng bình thường hoặc thấp
                </label>
            </form>
            <br>
            <p><strong>17.	LDL-C bao nhiêu?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Bình thường
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Cao trên ngưỡng bình thường
                </label>
            </form>
            <br>
            <p><strong>18.	Xét nghiệm điện giải đồ Na, Kali</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio"> Kali máu hạ
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Kali máu bình thường
                </label>
            </form>
            <br>
            <p><strong>X-quang tim phổi?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio"> Bình thường
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không bình thường
                </label>
            </form>
            <br>
            <p><strong>19.	Điện tâm đồ</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio"> Bình thường
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không bình thường
                </label>
            </form>
            <br>
            <p><strong>20.	Tổng phân tích nước tiểu: tìm microalbumin ..v….v…</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Bình thường
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không bình thường
                </label>
            </form>
            <br>

            <h4>V. CHẨN ĐOÁN XÁC ĐỊNH ĐÁI THÁO ĐƯỜNG</h4>
            <label>Dựa trên 1 trong 3 tiêu chuẩn sau</label>
            <label>21.	Đo đường máu (glucose máu (GM) lúc đói đo 2 lần)</label>
            <p><strong>21.1. Ở hai thời điểm khác nhau:GM mao mạch > 6,1mmol/l và GM tĩnh mạch ≥7mmol/l</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">ĐTĐ
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>21.2. GM đo sau 2 giờ làm nghiệm pháp dung nạp glucose với 75g đường với kết quả ≥11,0 mmol/l</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">ĐTĐ
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>GM đo bất kỳ lúc nào: GM ≥ 11 mmol/l
                    + Hội chứng 4 nhiều:  uống nhiều, khát nhiều, đái nhiều, gầy nhiều
                </strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">ĐTĐ
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>21.4. Chẩn đoán xác định đái tháo đường </strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">ĐTĐ
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form><br>

            <h4>VI.  XÉT NGHIỆM CẬN LÂM SÀNG ĐỂ THEO DÕI ĐIỀU TRỊ</h4>
            <p>-	Đường huyết lúc đói, sau ăn 2 giờ</p>
            <p>-	Sinh hóa máu: creatinin máu, cholestesol, tryglycerid, HDL-C, LDL-C ( lúc mới chẩn đoán, trong quá trình điều trị và sau mỗi 3 tháng)</p>
            <p>-	Tổng phân tích nước tiểu làm thường quy? Xem microalbumin niệu (sau ≥ 5 năm với ĐTĐ typ 1 và ngay tại thời điểm chẩn đoán và trong quá trình điều trị đối với ĐTĐ typ 2</p>
            <p>-	Điện tâm đồ lần đầu phát hiện và sau mỗi 6 tháng</p>
            <p>-	Chụp tim phổi: lúc mới chẩn đoán và khi có nghi ngờ tổn thương phổi</p>
            <p>-	Khám mắt: lúc mới chẩn đoán và sau mỗi năm. Khi có tổn thương mắt: khám mỗi 3-6 tháng</p>
            <br>

            <h4>VII. TRIỆU CHỨNG LÂM SÀNG VÀ XÉT NGHIỆM ĐẶC BIỆT PHÁT HIỆN BIẾN CHỨNG ĐÁI THÁO ĐƯỜNG̣</h4>
            <p><strong>1.	Biến chứng cấp tính do ĐTĐ giai đoạn đầu:</strong></p>
            <p>+ Hôn mê toan ceton thường gặp ở bệnh nhân ĐTĐ typ 1.</p>
            <p>+ hôn mê tăng áp lực thẩm thấu (TALTT) hay gặp ở ĐTĐ typ 2</p>
            <p>+ Hạ đường huyết</p>
            <p><strong>1.1. Hôn mê toan ceton</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Triệu chứng lâm sàng tăng đường huyết: mệt nhiều, tiểu nhiều, khát nhiều, nhìn mờ
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Triệu chứng lâm sàng mất nước: yếu, mệt mỏi, chán ăn, khát nước, khô da và niêm mạc, chuột rút, mạch nhanh, tụt huyết áp
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Rối loạn ý thức do mất nước: lơ mơ, ngủ gà , hôn mê
                </label>
            </form><br>
            <p><strong>1.1.Triệu chứng lâm sàng của toan ceton</strong></p>
            <p><strong>22.	Nôn, buồn nôn, thở nhanh sâu (kussmaul), hơi thở mùi ceton (mùi táo thối)</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Không
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Có
                </label>
            </form>
            <p><strong>1.1.2 Cận lâm sàng</strong></p>
            <p><strong>23.	Đường huyết >13.9 mmol/l</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Trên ngưỡng 13.9
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Bình thường
                </label>
            </form>
            <p><strong>24.	Khí máu động mạch: pH <7.3; HCO3-<15 mEq/l; tăng khoảng trống anion >12±2</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">24.1.  pH <7.3
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">24.2.  HCO3-<15 mEq/l
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">24.3. tăng khoảng trống anion >12±2
                </label>
            </form>
            <p><strong>25.	Ceton niệu (+)</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>

            <p><strong>1.2.Hôn mê tăng áp lực thẩm thấu(TALTT): Hay gặp ở ĐTĐ typ 2; các triệu chứng xuất hiện từ từ.</strong></p>
            <p><strong>26.	Đường huyết >33.3 mmol/l </strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>27.	Áp lực thẩm thấu (ALTT) > 320 mOsm/kg</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>28.	pH động mạch > 7.3</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>29.	HCO3 > 15 mEq/l</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>30.	Ceton niệu ít hoặc không có</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>

            <p><strong>1.3. Biến chứng hạ đường huyết.</strong></p>
            <p><strong>31.	Rối loạn thần kinh giao cảm: Lo lắng, run tay chân, vã mồ hôi, hồi hộp đánh trống ngực, cảm giác đói cồn cào</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>32.	Rối loạn thần kinh trung ương: mất khả năng tập trung, nhìn mờ, lơ mơ, lú lẫn, co giật, hôn mê.</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>33.	Xét nghiệm: đường trong máu thấp < 3.9 mmol/l</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>

            <p><strong>2.	Biến chứng mạch máu lớn ( biến chứng mạn tính ĐTĐ)</strong></p>

            <p><strong>34.	Tăng huyết áp: Huyết áp ≥ 140/90 mmHg</strong></p>
            <p><strong>2.1 Tăng huyết áp</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">THA ≥ 140/90 mmHg
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">HA bình thường
                </label>
            </form>
            <p><strong>2.2.	Rối loạn Lipit máu (các thông số ở mục 14, 15, 16, 17)</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>2.3.	Bệnh động mạch vành tim và nhồi máu cơ tim</strong></p>
            <p><strong>35.	Triệu chứng đau thắt ngực: điển hình hoặc không điển hình (gặp ở bệnh nhân ĐTĐ có biến chứng thần kinh tự động). </strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>36.	Điện tâm đồ: Trong cơn đau có thể thấy đoạn  ST chênh xuống, T đảo chiều, ST chênh lên thoáng qua.Nếu ST chênh lên bền vững hoặc xuất hiện bloc nhánh trái nghi đến nhồi máu cơ tim, có tới 20% bệnh nhân không thay đổi trên điện tâm đồ </strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có bất thường
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>37.Chụp mạch vành: xác định chính xác vị trí tổn thương </strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có tổn thương
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>38.Xét nghiệm các enzym creatine kinase (CK); CK-MB; Troponin T (các enzym này tăng trong nhồi máu cơ tim) </strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Enzym tăng
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>2.4. Tai biến mạch máu não</strong></p>
            <p><strong>2.4.1.   Nhồi máu não</strong></p>
            <p><strong>39.Triệu chứng lâm sàng: yếu hoặc liệt nửa người, rối loạn ý thức</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>40.Chụp MRI hoặc CT sọ não giúp xác định vị trí tổn thương</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có tổn thương
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>41.	Siêu âm Doppler động mạch cảnh để phát hiện xơ vữa động mạch</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có xơ vữa
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>2.4.2. Xuất huyết não:</strong></p>
            <p><strong>42.	Triệu chứng lâm sàng giống như nhồi máu não và chụp MRI hoặc CT sọ não để chẩn đoán xác định vị trí xuất huyết não.</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có xuất huyết não
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>2.5. Bệnh động mạch chi dưới</strong></p>
            <p><strong>43.	Siêu âm Doppler mạch chi: phát hiện mảng xơ vữa và xem có hẹp hoặc tắc mạch chi dưới</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Xơ vữa & hẹp tắc mạch chi dưới
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>3.	Biến chứng mạch máu nhỏ do ĐTĐ (b/c mãn tính)</strong></p>
            <p>Biến chứng mạch máu nhỏ gồm các biến chứng: Mắt, thận, thần kinh</p>
            <p><strong>3.1. Biến chứng mắt</strong></p>
            <p><strong>3.1.1. Bệnh võng mạc mắt</strong></p>
            <p><strong>44.	Xét nghiệm soi chụp đáy mắt: có tiêm thuốc cản quang fluorescein </strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có tổn thương g/đ tiền tăng sinh
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Có tổn thương g/đ tăng sinh
                </label>
            </form>
            <p><strong>3.1.2. Đục thủy tinh thể</strong></p>
            <p><strong>45.	Khám mắt và soi đáy mắt: Đục thủy tinh thể dưới bao hay đục thủy tinh thể hình bông tuyết hay gặp ở bệnh nhân ĐTĐ typ 1 (tiến triển nhanh) </strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">ĐTĐ typ1 có đục thủy tinh thể
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>46.	Đục thủy tinh thể: dạng lão hóa thường gặp ở bệnh nhân ĐTĐ typ 2</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">ĐTĐ typ 2 có đục thủy tinh thể
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>47.	Đau nhức dữ dội trong mắt, đỏ mắt, chảy nước mắt</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>48.	Tăng nhãn áp</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>3.2. Biến chứng thận</strong></p>
            <p><strong>49.	Xét nghiệm: định lượng albumin niệu:</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Microalbumin niệu dương tính
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Macroalbumin niệu dương tính
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>3.3. Biến chứng thần kinh:50% bệnh nhân ĐTĐ typ2 có biến chứng này: hay gặp là biến chứng thần kinh ngoại vi và biến chứng thân kinh tự động.</strong></p>
            <p><strong>3.3.1. Biến chứng thần kinh ngoại vi:</strong></p>
            <p><strong>50.	Triệu chứng cơ năng:</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có t/c cơ năng
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>51.	Khám thực thể
                    Đánh giá cảm giác nông bằng monofilament 10g, khám 10 vị trí, mất 2/10 vị trí: rối loạn cảm giác nông; mất 4/10 vị trí đánh giá có nguy cơ bị bệnh lý bàn chân ĐTĐ.
                </strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>52.	Đo nhịp tim khi nghỉ > 100 chu kì/ phút</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">>100l/phút
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio"><100l/phút
                </label>
            </form>
            <p><strong>53.	Kiểm tra dấu hiệu hạ huyết áp tư thế: HA lần 1 đo ở tư thế nằm, lần 2 đo ở tư thế đứng: 3 phút sau đứng dậy đột ngột, đáp ứng bình thường HA tâm thu giảm ≥ 10mmHg; trong biến chứng tk tự động tim mạch HA tâm thu giảm ≥20 mmHg và/hoặc HA tâm trương giảm ≥10mmHg (khi bị nhồi máu cơ tim: có b/c TK tự động tim mạch không có triệu chứng)</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>

            <p><strong>3.3.2. Biến chứng thần kinh tự động</strong></p>
            <p><strong>3.3.2.1. Biến chứng thần kinh tự động tim mạch</strong></p>
            <p><strong>54.	Triệu chứng lâm sàng: nuốt nghẹn, đầy bụng, ăn chậm tiêu, ợ chua, nóng bỏng hoặc đau thượng vị, buồn nôn, nôn.</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>55.	Chụp dạ dày bằng thuốc cản quang thấy dạ dày giãn, thức ăn chậm lưu thông (hoặc XN nội soi dạ dày thực quản)</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>3.3.2.3. Biến chứng thần kinh tự động tiết niệu</strong></p>
            <p><strong>56.	Bệnh thần kinh bàng quang</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>57.	Đo thể tích nước tiểu tồn dư bằng siêu âm</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>58.	Nội soi bàng quang: Bàng quang giãn do mất trương lực
                </strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>

            <p><strong>3.3.2.4. Bệnh thần kinh hệ sinh dục</strong></p>
            <p><strong>59.	Nam giới: Rối loạn cương dương, liệt dương, trào ngược tinh dịch</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>60.	Nữ giới: Rối loạn kinh nguyệt, mất kinh, khô âm đạo, giảm cảm giác vùng bẹn, mất cảm giác kích thích tình dục.</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>

            <p><strong>3.3.2.5. Bệnh thần kinh vận mạch</strong></p>
            <p><strong>61.	Tăng tiết mồ hôi vùng mặt và thân, xảy ra lúc bắt đầu vào các bữa ăn, lúc tập thể dục, hoặc vào ban đêm.</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>62.	Giảm tiết mồ hôi ở phần xa gốc chi dưới: da khô, ngứa, rụng lông, bong vẩy, rạn nứt, gia tăng chai chân và loạn dưỡng móng, tăng nguy cơ loét chân. Trường hợp nặng có thể gặp ở cả chi trên.</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>

            <p><strong>4.Biến chứng loét bàn chân do ĐTĐ</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Loét bàn chân do ĐTĐ
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>

            <p><strong>5.	Biến chứng nhiễm khuẩn:</strong></p>
            <p><strong>64.	Có biến chứng nhiễm khuẩn</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
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