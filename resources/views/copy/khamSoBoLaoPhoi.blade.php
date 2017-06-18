@extends('hospital.layout.index')

@section('content')
    <div id="page-wrapper">
        <div class="col-lg-12">
            <h1 class="page-header">
                <center>KHÁM SƠ BỘ BỆNH LAO PHỔI</center>
                <br>
            </h1>
            <br><br>
        </div>
        <h3>I.Lý do vào viện</h3>
        <textarea class="form-control" style="height: 100px; width: 500px;">{{$record['lyDoVaoVien']}}</textarea>
        <h3>II.Hỏi bệnh</h3>
        @foreach($question['hoiBenh'] as $i => $que)
            <p><strong>{{$i+1}}.{{$que['text']}}</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1"
                           type="radio" <?php echo ($record['hoiBenh'][$i]['answer'] == "Có") ? 'checked=""' : '';?>>Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2"
                           type="radio" <?php echo ($record['hoiBenh'][$i]['answer'] == "Không") ? 'checked=""' : '';?>>Không
                </label>
            </form>
        @endforeach

        <h3>III.Bệnh sử</h3>
        <textarea class="form-control" style="height: 100px; width: 500px;">{{$record['benhSu']}}</textarea>
        <br>
        <div align="center">
            <br>
            <a href="hospital/medicalRecord/thongTinChung-{{$record['soLuuTru']}}">
                <button type="button" class="btn btn-primary" style="float: left"><-- Thông tin chung</button>
            </a>
            <a href="#">
                <button type="button" class="btn btn-primary">Lưu thông tin</button>
            </a>
            <a href="hospital/medicalRecord/chuanDoanLaoPhoi-{{$record['_id']}}">
                <button type="button" class="btn btn-primary" style="float: right">CHUẨN ĐOÁN --></button>
            </a>
        </div>

        <div style="height: 100px"></div>
    </div>
@endsection