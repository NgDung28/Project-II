<?php
/**
 * Created by PhpStorm.
 * User: DELL PC
 * Date: 5/19/2017
 * Time: 08:34
 */

namespace App\Http\Controllers;

use App\medicalRecord;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\hospital;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use League\Flysystem\Exception;

class MedicalController extends Controller
{
    public function index()
    {
        $medical = DB::collection('medicalRecord')->get();

        return view('hospital.medicalrecord.list', compact('medical'));
    }

    public function create(Request $request, $benh)
    {

        $this->validate($request,
            [
                'ten' => 'required|min:3',
                'soLuuTru' => 'required'
            ],
            [
                'ten.required' => "Vui lòng nhập tên bệnh nhân",
                'ten.min' => "Tên bệnh nhân phải chứa ít nhất 3 kí tự",
                'soLuuTru.required' => "Vui lòng nhập số lưu trữ bệnh án"
            ]);
        try {
            $record = new medicalRecord();

            $record->tenBenhAn = $benh;
            $record->benhVien = $request->benhVien;
            $record->khoa = $request->khoa;
            $record->giuong = $request->giuong;
            $record->soLuuTru = $request->soLuuTru;
            $record->maYT = $request->maYT;

            $diaChi = array('soNha' => $request->soNha, 'thon' => $request->thon,
                'xa' => $request->xa, 'huyen' => $request->huyen, 'tinh' => $request->tinh);

            $hanhChinh = array('hoTen' => $request->ten,
                'ngaySinh' => $request->ngaySinh,
                'gioiTinh' => $request->gioiTinh == "Nu" ? "Nữ" : "Nam",
                'ngheNghiep' => $request->ngheNghiep,
                'danToc' => $request->danToc,
                'ngoaiKieu' => $request->ngoaiKieu,
                'diaChi' => $diaChi,
                'noiLamViec' => $request->noiLv,
                'ngayVaoVien' => $request->ngayVaoVien,
                'dienThoai' => $request->dienThoai
            );

            $hoiBenh = array();
            $question = DB::collection('question')->where('loaiBenhAn', $benh)->first();

            foreach ($question["hoiBenh"] as $i => $que) {
                $name = "hoiBenh" . $i;
                if ($request->$name == "Co") {
                    $choice = "Có";
                } else if ($request->$name == "Khong") {
                    $choice = "Không";
                } else {
                    $choice = "Chưa chọn";
                }
                $hoiBenh[$i] = array("_id" => $que['_id'],
                    "answer" => $choice);
            }

            switch ($benh) {
                case "bệnh lao phổi":
                    $chuanDoan = array("lamSang", "canLamSang");
                    $chuanDoan["lamSang"] = array();
                    $chuanDoan["canLamSang"] = array();
                    foreach ($question["chuanDoan"]["lamSang"] as $i => $que) {
                        $name = "lamSang" . $i;
                        if ($request->$name == "Co") {
                            $choice = "Có";
                        } else if ($request->$name == "Khong") {
                            $choice = "Không";
                        } else {
                            $choice = "Chưa chọn";
                        }
                        $chuanDoan['lamSang'][$i] = array("_id" => $que['_id'],
                            "answer" => $choice);
                    }
                    foreach ($question["chuanDoan"]["canLamSang"] as $i => $que) {
                        $name = "canLs" . $i;
                        if ($request->$name == "Co") {
                            $choice = "Có";
                        } else if ($request->$name == "Khong") {
                            $choice = "Không";
                        } else {
                            $choice = "Chưa chọn";
                        }
                        $chuanDoan['canLamSang'][$i] = array("_id" => $que['_id'],
                            "answer" => $choice);
                    }

                    $record->phanHanhChinh = $hanhChinh;
                    $record->lyDoVaoVien = $request->lyDo;
                    $record->hoiBenh = $hoiBenh;
                    $record->benhSu = $request->benhSu;
                    $record->chuanDoan = $chuanDoan;
                    $record->chuanDoanXacDinh = $request->xacDinh;

                    $record->save();
                    break;
                case "bệnh hen phế quản":
                    $khamBenh = array();
                    foreach ($question["khamBenh"] as $i => $que) {
                        $name = "khamBenh" . $i;
                        if ($request->$name == "Co") {
                            $choice = "Có";
                        } else if ($request->$name == "Khong") {
                            $choice = "Không";
                        } else {
                            $choice = "Chưa chọn";
                        }
                        $khamBenh[$i] = array("_id" => $que['_id'],
                            "answer" => $choice);
                    }

                    $khamToanThan = array();
                    $khamToanThan["mach"] = $request->mach;
                    $khamToanThan["nhietDo"] = $request->nhietDo;
                    $khamToanThan["huyetAp"] = $request->huyetAp;
                    $khamToanThan["nhipTho"] = $request->nhipTho;
                    $khamToanThan["canNang"] = $request->canNang;
                    $khamToanThan["chieuCao"] = $request->chieuCao;


                    $chuanDoan = array("benhHenPheQuan", "benhCOPD");
                    $chuanDoan["benhHenPheQuan"] = array();
                    $chuanDoan["benhCOPD"] = array();
                    foreach ($question["chuanDoan"]["henPheQuan"] as $i => $que) {
                        $name = "henPheQuan" . $i;
                        if ($request->$name == "Co") {
                            $choice = "Có";
                        } else if ($request->$name == "Khong") {
                            $choice = "Không";
                        } else {
                            $choice = "Chưa chọn";
                        }
                        $chuanDoan['henPheQuan'][$i] = array("_id" => $que['_id'],
                            "answer" => $choice);
                    }
                    foreach ($question["chuanDoan"]["benhCOPD"] as $i => $que) {
                        $name = "benhCOPD" . $i;
                        if ($request->$name == "Co") {
                            $choice = "Có";
                        } else if ($request->$name == "Khong") {
                            $choice = "Không";
                        } else {
                            $choice = "Chưa chọn";
                        }
                        $chuanDoan['benhCOPD'][$i] = array("_id" => $que['_id'],
                            "answer" => $choice);
                    }

                    $record->phanHanhChinh = $hanhChinh;
                    $record->lyDoVaoVien = $request->lyDo;
                    $record->hoiBenh = $hoiBenh;
                    $record->khamBenh = $khamBenh;
                    $record->khamToanThan = $khamToanThan;
                    $record->chuanDoan = $chuanDoan;
                    $record->save();

            }


            return redirect('hospital/medicalRecord/list')->with('thongBao', 'Đã thêm thành công!');
        } catch (Exception $e) {
            print_r($e->getMessage());
        }

    }

    public function update(Request $request, $id)
    {
        $this->validate($request,
            [
                'ten' => 'required|min:3',
                'soLuuTru' => 'required'
            ],
            [
                'ten.required' => "Vui lòng nhập tên bệnh nhân",
                'ten.min' => "Tên bệnh nhân phải chứa ít nhất 3 kí tự",
                'soLuuTru.required' => "Vui lòng nhập số lưu trữ bệnh án"
            ]);


        $diaChi = array('soNha' => $request->soNha, 'thon' => $request->thon,
            'xa' => $request->xa, 'huyen' => $request->huyen, 'tinh' => $request->tinh);

        $hanhChinh = array('hoTen' => $request->ten,
            'ngaySinh' => $request->ngaySinh,
            'gioiTinh' => $request->gioiTinh == "Nu" ? "Nữ" : "Nam",
            'ngheNghiep' => $request->ngheNghiep,
            'danToc' => $request->danToc,
            'ngoaiKieu' => $request->ngoaiKieu,
            'diaChi' => $diaChi,
            'noiLamViec' => $request->noiLv,
            'ngayVaoVien' => $request->ngayVaoVien,
            'dienThoai' => $request->dienThoai
        );

        $hoiBenh = array();
        $record = DB::collection('medicalRecord')->where('_id', $id)->first();
        $question = DB::collection('question')->where('loaiBenhAn', $record['tenBenhAn'])->first();
        foreach ($question["hoiBenh"] as $i => $que) {

            $name = "hoiBenh" . $i;
            if ($request->$name == "Co") {
                $choice = "Có";
            } else if ($request->$name == "Khong") {
                $choice = "Không";
            } else if ($request->$name == "ChuaChon") {
                $choice = "Chưa chọn";
            }
            $hoiBenh[$i] = array("_id" => $que['_id'],
                "answer" => $choice);
        }
        DB::collection('medicalRecord')->where('_id', $id) ->update([
            'tenBenhAn' => $record["tenBenhAn"],
            'benhVien' => $request->benhVien,
            'khoa' => $request->khoa,
            'giuong' => $request->giuong,
            'soLuuTru' => $request->soLuuTru,
            'maYT' => $request->maYT,
            'phanHanhChinh' => $hanhChinh,
            'lyDoVaoVien' => $request->lyDo,
            'hoiBenh' => $hoiBenh
        ]);

        switch ($record["tenBenhAn"]){
            case "bệnh lao phổi":
                $chuanDoan = array("lamSang", "canLamSang");
                $chuanDoan["lamSang"] = array();
                $chuanDoan["canLamSang"] = array();
                foreach ($question["chuanDoan"]["lamSang"] as $i => $que) {
                    $name = "lamSang" . $i;
                    if ($request->$name == "Co") {
                        $choice = "Có";
                    } else if ($request->$name == "Khong") {
                        $choice = "Không";
                    } else if ($request->$name == "ChuaChon") {
                        $choice = "Chưa chọn";
                    }
                    $chuanDoan['lamSang'][$i] = array("_id" => $que['_id'],
                        "answer" => $request->$name == "Co" ? "Có" : "Không");
                }
                foreach ($question["chuanDoan"]["canLamSang"] as $i => $que) {
                    $name = "canLs" . $i;
                    if ($request->$name == "Co") {
                        $choice = "Có";
                    } else if ($request->$name == "Khong") {
                        $choice = "Không";
                    } else if ($request->$name == "ChuaChon") {
                        $choice = "Chưa chọn";
                    }
                    $chuanDoan['canLamSang'][$i] = array("_id" => $que['_id'],
                        "answer" => $choice);
                }
                DB::collection('medicalRecord')->where('_id', $id) ->update([
                    'benhSu' => $request->benhSu,
                    'chuanDoan' => $chuanDoan,
                    'chuanDoanXacDinh' => $request->xacDinh
                ]);
                break;
            case "bệnh hen phế quản":
                $khamBenh = array();
                foreach ($question["khamBenh"] as $i => $que) {
                    $name = "khamBenh" . $i;
                    if ($request->$name == "Co") {
                        $choice = "Có";
                    } else if ($request->$name == "Khong") {
                        $choice = "Không";
                    } else {
                        $choice = "Chưa chọn";
                    }
                    $khamBenh[$i] = array("_id" => $que['_id'],
                        "answer" => $choice);
                }

                $khamToanThan = array();
                $khamToanThan["mach"] = $request->mach;
                $khamToanThan["nhietDo"] = $request->nhietDo;
                $khamToanThan["huyetAp"] = $request->huyetAp;
                $khamToanThan["nhipTho"] = $request->nhipTho;
                $khamToanThan["canNang"] = $request->canNang;
                $khamToanThan["chieuCao"] = $request->chieuCao;


                $chuanDoan = array("benhHenPheQuan", "benhCOPD");
                $chuanDoan["benhHenPheQuan"] = array();
                $chuanDoan["benhCOPD"] = array();
                foreach ($question["chuanDoan"]["henPheQuan"] as $i => $que) {
                    $name = "henPheQuan" . $i;
                    if ($request->$name == "Co") {
                        $choice = "Có";
                    } else if ($request->$name == "Khong") {
                        $choice = "Không";
                    } else {
                        $choice = "Chưa chọn";
                    }
                    $chuanDoan['henPheQuan'][$i] = array("_id" => $que['_id'],
                        "answer" => $choice);
                }
                foreach ($question["chuanDoan"]["benhCOPD"] as $i => $que) {
                    $name = "benhCOPD" . $i;
                    if ($request->$name == "Co") {
                        $choice = "Có";
                    } else if ($request->$name == "Khong") {
                        $choice = "Không";
                    } else {
                        $choice = "Chưa chọn";
                    }
                    $chuanDoan['benhCOPD'][$i] = array("_id" => $que['_id'],
                        "answer" => $choice);
                }
                DB::collection('medicalRecord')->where('_id', $id) ->update([
                    'khamBenh' => $khamBenh,
                    'khamToanThan' => $khamToanThan,
                    'chuanDoan' => $chuanDoan
                ]);
                break;

        }




        //$record = DB::collection('medicalRecord')->get();
        return redirect('hospital/medicalRecord/suaBenhAn-' . $id)->with('thongBao', 'Đã sửa thành công!');
    }

    public function delete($id)
    {
        DB::collection('medicalRecord')->where('_id', $id)->delete();
        $medical = DB::collection('medicalRecord')->get();

        return redirect('hospital/medicalRecord/list')->with('thongBao', 'Đã xóa thành công!');
    }

    public function themBenhAn($benh)
    {
        $question = DB::collection('question')->where('loaiBenhAn', $benh)->first();
        switch ($benh) {
            case "bệnh lao phổi":
                return view('hospital.medicalrecord.laoPhoi', compact('question'));
            case "bệnh hen phế quản":
                return view('hospital.medicalrecord.henPheQuan', compact('question'));
            case "bệnh tăng huyết áp":
                return view('hospital.medicalrecord.tangHuyetAp', compact('question'));
            case "bệnh đái tháo đường":
                return view('hospital.medicalrecord.daiThaoDuong', compact('question'));
        }

    }

    public function suaBenhAn($id)
    {
        $record = DB::collection('medicalRecord')->where('_id', $id)->first();

        $question = DB::collection('question')->where('loaiBenhAn', $record['tenBenhAn'])->first();

        switch ($record['tenBenhAn']) {
            case "bệnh lao phổi":
                return view('hospital.medicalrecord.suaLaoPhoi', compact('record', 'question'));
            case "bệnh hen phế quản":
                return view('hospital.medicalrecord.suaHenPheQuan', compact('record', 'question'));
            case "bệnh tăng huyết áp":
                return view('hospital.medicalrecord.suaTangHuyetAp', compact('record', 'question'));
            case "bệnh đái tháo đường":
                return view('hospital.medicalrecord.suaDaiThaoDuong', compact('record', 'question'));
        }

    }

    public static function xoaBenhAn($id)
    {
        return view('delete', compact('id'))->render();
    }

}