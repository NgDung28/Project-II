@extends('hospital.layout.index')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="col-lg-12">
                <h1 class="page-header">BỆNH ÁN NGHIÊN CỨU BỆNH TĂNG HUYẾT ÁP
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
        <p>( Khởi phát, diễn biến, chẩn đoán, điều trị của tuyến dưới; lưu ý: tăng huyết áp ở người có tuổi hay người trẻ tuổi, tăng huyết áp từng cơn, tăng huyết áp ở người đái tháo đường, ở người có rối loạn lipit máu không?).</p>
        <h4>B.Tiền sử</h4>
        <label>Bản thân</label>
        <div class="form-group">
            <p><strong>1.	Bản thân có mắc bệnh đái tháo đường không, rối loạn lipit máu, bệnh mạch vành, bệnh thận, có hút thuốc lá không?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Không
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Có
                </label>
                <span>&nbsp;&nbsp;&nbsp;Diễn giải:</span><input type="input">
            </form>


            <p><strong>2.	Có dùng các thuốc gì? Thuốc nội tiết. thuốc cường giao cảm, salbutamol, costisol</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
                <span>&nbsp;&nbsp;&nbsp;Diễn giải:</span><input type="input">
            </form>
            <p><strong>3.	Có thừa cân, béo phì (chiều cao, cân nặng BMI), lối sống ít vận động, ăn uống có thể  liên quan đến tăng huyết áp.</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
                <span>&nbsp;&nbsp;&nbsp;Diễn giải:</span><input type="input">
            </form>
            <p><strong>4.	Nếu là nữ có thai hay không?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
                <span>&nbsp;&nbsp;&nbsp;Diễn giải:</span><input type="input">
            </form>
            <p><strong>5.	Tuổi xuất hiện cao huyết áp?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Dưới 15
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Từ 15-40
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Trên 40
                </label>
            </form>
            <br>

            <label>Tiền sử gia đình</label>
            <p><strong>6.	Gia đình có ai mắc bệnh mãn tính gì không?</strong></p>
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

            <h3>III. Khám bệnh</h3>
            <h4>1.Toàn thân</h4>
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
            <p>Tim mạch, thận, mắt, não: (tìm tổn thương cơ quan đích do tăng huyết áp)</p>
            <br>

            <h4>IV. Xét nghiệm thường quy</h4>
            <label>-	 Công thức máu: xem hồng cầu, bạch cầu, hemoglobin</label><br>
            <label>-	 Sinh hóa máu</label><br>
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
            <label>-	 Chỉ số xét nghiệm đánh giá rối loạn lipit máu:</label><br>
            <p><strong>7.	Cholesteol bao nhiêu?</strong>
            </p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Cao
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Bình thường
                </label>
            </form>
            <p><strong>8.	Triglycerid bao nhiêu?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio"> Cao
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Bình thường
                </label>
            </form>
            <br>
            <p><strong>9.	HDL-C bao nhiêu?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Bình thường
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không bình thường
                </label>
            </form>
            <br>
            <p><strong>10.	LDL-C bao nhiêu?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio"> Cao hơn bình thường
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Bình thường
                </label>
            </form>
            <br>
            <p><strong>11.	XN: Điện giải đồ Na;   Kali</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio"> Kali máu hạ
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Kali máu bình thường
                </label>
            </form>
            <br>
            <p><strong>12.	X-quang tim phổi:</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio"> Bình thường
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không bình thường
                </label>
            </form>
            <br>
            <p><strong>13.	Điện tâm đồ:</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Bình thường
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Bất thường
                </label>
            </form>
            <br>
            <p><strong>14.	Tổng phân tích nước tiểu:</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Bình thường
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không bình thường
                </label>
            </form>
            <br>

            <h4>IV. Xét nghiệm chuyên sâu</h4>
            <label>- Phối hợp xét nghiệm cơ bản và xét nghiệm chuyên sâu tìm nguyên nhân tăng huyết áp (THA) </label>
            <label>- Trường hợp do thận: Viêm cầu thận cấp, mạn</label>
            <p><strong>15.	Xét nghiệm: siêu âm thận và hệ tiết niệu:</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Bình thường
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không bình thường
                </label>
            </form>
            <label>-	 Bệnh mạch máu thận: hẹp động mạch thận</label>
            <p><strong>16.	Xét nghiệm: Siêu âm doppler động mạch thận xem có hẹp động mạch thận
                </strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Bình thường
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Hẹp động mạch thận
                </label>
            </form>
            <p><strong>17.	Chụp động mạch thận cản quang ( nếu siêu âm có hẹp động mạch thận )
                </strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Bình thường
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Hẹp động mạch thận
                </label>
            </form>
            <label>- Trường hợp do bệnh tim mạch</label>
            <p><strong>18.	Siêu âm tim: xem có hẹp eo động mạch chủ, hở van động mạch chủ, dầy thất trái…..
                </strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Bình thường
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không bình thường
                </label>
            </form><br>

            <label>-	THA do u tuyến thương thận: hội chứng cường aldosteron tiên phát( hội chứng coon), hội chứng cushing, u tủy thượng thận</label>
            <br><br>

            <label>-	Xét nghiệm phát hiện THA do hội chứng cushing gây nên do u tuyến thượng thận( phần vỏ tuyến thượng thận)</label>
            <p><strong>19.	Định lượng cortisol niệu/24 giờ: trong hội chứng cushing không phụ thuộc ACTH nội sinh bình thường cortisol niệu <250nmol/24 giờ (giới hạn chẩn đoán bệnh cortisol niệu >830nmol/24 giờ).</strong>
            </p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Bình thường
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Bệnh
                </label>
            </form>
            <p><strong>20.	Xét nghiệm chụp cắt lớp vi tính( CT ) hoặc MRI tuyến thượng thận có thể phát hiện thấy u hoặc phì đại tuyến thượng thận</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Bình thường
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Có u tuyến thượng thận
                </label>
            </form>
            <p><strong>21.	Xét nghiệm nước tiểu: định lượng catecholamine tự do trong nước tiểu (ngưỡng chẩn đoán > 1480nmol/ 24 giờ) ( >250µg/24 giờ);</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Catecholamin tự do trong nước tiểu > 1480nmol/ 24 giờ
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Metanephrine nước tiểu gấp 2- 3 lần
                </label>
            </form>
            <p><strong>22.	Xét nghiệm siêu âm ổ bụng: phát hiện u kích thước lớn</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có khối u
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>23.	Chụp cắt lớp vi tính ( CT ) hoặc PET scan: tìm khối u kích thước >0,5 – 1cm  trong thượng thận và tìm di căn > 1 – 2cm trong ổ bụng và khung chậu</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có khối u tủy thượng thận
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không có
                </label>
            </form>
            <p><strong>24.	Soi đáy mắt xem có xuất huyết võng mạc, xuất huyết dịch kính</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio">Không
                </label>
            </form>
            <p><strong>25.	Tăng huyết áp do thuốc: có dùng thuốc nội tiết, thuốc cường giao cảm, Salbutamol……</strong></p>
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