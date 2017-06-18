@extends('hospital.layout.index')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="col-lg-12">
                <h1 class="page-header">BỆNH ÁN NGHIÊN CỨU BỆNH  LAO PHỔI
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
        <div class="form-group">
            <p><strong>1. Có ho kéo dài trên 2 tuần?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2"  type="radio">Không
                </label>
            </form>

            <p><strong>2. Có ho khan, ho có đờm, ho ra máu?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2"  type="radio">Không
                </label>
            </form>
            <p><strong>3. Sốt nhẹ về chiều?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2"  type="radio">Không
                </label>
            </form>
            <p><strong>4. Ra mồ hôi “trộm” ban đêm?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2"  type="radio">Không
                </label>
            </form>
            <p><strong>5. Có đau ngực, đôi khi có khó thở?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2"  type="radio">Không
                </label>
            </form>
            <p><strong>6. Trẻ có suy dinh dưỡng , còi xương hoặc giảm sức đề kháng sau khi nhiễm virus?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2"  type="radio">Không
                </label>
            </form>
            <p><strong>7. Có nhiễm HIV không?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2"  type="radio">Không
                </label>
            </form>
            <p><strong>8. Có tiếp xúc với người mắc bệnh lao (gần nhà hoặc nơi làm việc )</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2"  type="radio">Không
                </label>
            </form>
            <p><strong>9. Có mắc các bệnh mãn tính (loét dạ dày tá tràng, đái tháo đường, suy thận mạn…)</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2"  type="radio">Không
                </label>
            </form>
            <p><strong>10. Có nghiện ma túy hoặc rượu?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2"  type="radio">Không
                </label>
            </form>
            <p><strong>11. Có hút thuốc lá, thuốc lào không?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2"  type="radio">Không
                </label>
            </form>
            <p><strong>12. Có sử dụng các loại thuốc ức chế miễn dịch kéo dài như corticoid, hóa chất điều trị ung
                    thư?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2"  type="radio">Không
                </label>
            </form>
            <p><strong>13. Mức sống của gia đình?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2"  type="radio">Không
                </label>
            </form>
            <p><strong>14. Tiền sử ra đình có ai mắc bệnh mãn tính, bệnh lao?</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2"  type="radio">Không
                </label>
            </form>
        </div>

        <h3>III.Bệnh sử</h3>

        <h3>IV.Chuẩn đoán</h3>
        <h4>A.Lâm sàng</h4>
        <p><strong>15. Toàn thân: sốt nhẹ về chiều, ra mồ hôi đêm, chán ăn, mệt mỏi gầy sút cân.</strong></p>
        <form>
            <label class="radio-inline">
                <input name="rdoStatus" value="1" checked="" type="radio">Có
            </label>
            <label class="radio-inline">
                <input name="rdoStatus" value="2"  type="radio">Không
            </label>
        </form>
        <p><strong>16. T/c cơ năng: ho khạc đờm, ho ra máu, đau ngực, khó thở</strong></p>
        <form>
            <label class="radio-inline">
                <input name="rdoStatus" value="1" checked="" type="radio">Có
            </label>
            <label class="radio-inline">
                <input name="rdoStatus" value="2" type="radio">Không
            </label>
        </form>
        <p><strong>17. Khám thực thể: Nghe phổi có tiếng bệnh lý (ran ẩm, ran nổ…..)</strong></p>
        <form>
            <label class="radio-inline">
                <input name="rdoStatus" value="1" checked="" type="radio">Có
            </label>
            <label class="radio-inline">
                <input name="rdoStatus" value="2"  type="radio">Không
            </label>
        </form>

        <h4>B.Cận lâm sàng</h4>
        <p><strong>18. Xét nghiệm: nhuộm soi đờm trực tiếp tìm vi khuẩn lao (AFB) ( Lấy 2 mẫu mỗi mẫu cách nhau 2
                giờ)</strong></p>
        <form>
            <label class="radio-inline">
                <input name="rdoStatus" value="1" checked="" type="radio">Dương tính vi khuẩn lao
            </label>
            <label class="radio-inline">
                <input name="rdoStatus" value="2" type="radio">Âm tính
            </label>
        </form>

        <p><strong>19. Nuôi cấy tìm vi khuẩn lao cho kết quả sau 3 – 4 tuần (nên làm ở bênh viện tỉnh)</strong></p>
        <form>
            <label class="radio-inline">
                <input name="rdoStatus" value="1" checked="" type="radio">Có vi khuẩn lao
            </label>
            <label class="radio-inline">
                <input name="rdoStatus" value="2" type="radio">Âm tính
            </label>
        </form>

        <p><strong>20. X-quang phổi thường quy: (nên làm ở các tuyến).</strong></p>
        <form>
            <label class="radio-inline">
                <input name="rdoStatus" value="1" checked="" type="radio">Kết quả có tổn thương lao
            </label>
            <label class="radio-inline">
                <input name="rdoStatus" value="2" type="radio">Không
            </label>

        </form>

        <h3>V.Chuẩn đoán xác định</h3>
        <p>-	Có vi khuẩn lao trong đờm, dịch phế quản, dịch dạ dày (ít nhất có 1 mẫu đờm vi khuẩn lao dương tính)</p>
        <p>-	Khi đủ các triệu chứng  lâm sàng, cận lâm sàng  mà không tìm thấy vi khuẩn lao, cần có ý kiến của thầy thuốc chuyên khoa lao để quyết định chẩn đoán.</p>
        <p>-	Người bệnh được chẩn đoán lao phổi AFB âm tính cần có bằng chứng vi khuẩn lao trong đờm,  dịch phế quản, dịch dạ dày bằng phương pháp nuôi cấy hoặc các kỹ thuật mới như PCR, gen xpert, BACTEC-MGIT</p>
        <p>-	Đươc bác sĩ chuyên khoa chỉ định một phác  đồ điều trị lao đầy đủ dựa trên (1) Lâm sàng, (2) bất thường nghi lao trên Xquang phổi và (3) thêm 1 trong 2 tiêu chuẩn sau: HIV(+) hoặc không đáp ứng với điều trị kháng sinh phổ rộng.</p>
        <div style="padding-bottom:120px">
            <button type="submit" class="btn btn-primary">Add</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </div>
        <!-- /.row -->
        <!-- /.container-fluid -->
    </div>
@endsection