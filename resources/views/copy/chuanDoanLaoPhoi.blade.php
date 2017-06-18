@extends('hospital.layout.index')

@section('content')
    <div id="page-wrapper">
        <div class="col-lg-12">
                <h1 class="page-header"><center>CHUẨN ĐOÁN BỆNH LAO PHỔI</center><br>
                </h1><br><br>
            </div>
        <h3>IV.Chuẩn đoán</h3>
        <h4>A.Lâm sàng</h4>
        @foreach($question['chuanDoan']['lamSang'] as $i => $que)
            <p><strong>{{$que['_id']}}.{{$que['text']}}</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" type="radio" <?php echo ($record['chuanDoan']['lamSang'][$i]['answer'] =="Có") ? 'checked=""' : '';?>>Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio" <?php echo ($record['chuanDoan']['lamSang'][$i]['answer'] =="Không") ? 'checked=""' : '';?>>Không
                </label>
            </form>
        @endforeach

        <h4>B.Cận lâm sàng</h4>
        @foreach($question['chuanDoan']['canLamSang'] as $i => $que)
            <p><strong>{{$que['_id']}}.{{$que['text']}}</strong></p>
            <form>
                <label class="radio-inline">
                    <input name="rdoStatus" value="1" type="radio" <?php echo ($record['chuanDoan']['canLamSang'][$i]['answer'] =="Có") ? 'checked=""' : '';?>>Có
                </label>
                <label class="radio-inline">
                    <input name="rdoStatus" value="2" type="radio" <?php echo ($record['chuanDoan']['canLamSang'][$i]['answer'] =="Không") ? 'checked=""' : '';?>>Không
                </label>
            </form>
        @endforeach

        <h3>V.Chuẩn đoán xác định</h3>
        <textarea class="form-control" style="height: 100px; width: 500px;">{{$record['chuanDoanXacDinh']}}</textarea><br><br><br>
        <div align="center">
            <a href="hospital/medicalRecord/khamSoBoLaoPhoi-{{$record['soLuuTru']}}">
                <button type="button" class="btn btn-primary" style="float: left"><--Khám sơ bộ</button>
            </a>
            <a href="#"><button type ="button" class="btn btn-primary" >HOÀN THÀNH</button></a>
        </div>
        <div style="height: 100px"></div>
        <!-- /.row -->
        <!-- /.container-fluid -->
    </div>
@endsection