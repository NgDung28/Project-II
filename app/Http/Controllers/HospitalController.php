<?php
/**
 * Created by PhpStorm.
 * User: DELL PC
 * Date: 5/15/2017
 * Time: 10:33
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\hospital;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

class HospitalController extends Controller
{

    public function index()
    {
        $hospital = DB::collection('hospital')->get();

        return view('test', compact('hospital'));
    }

//    public function create()
//    {
//        return view('test');
//    }
//    public function store(Request $request)
//    { //
//    }
//    public function show($id)
//    {
//        //
//    }
//    public function edit($id)
//    {
//        //
//    }
//    public function update(Request $request, $id)
//    {
//        //
//    }
//    public function destroy($id)
//    { //
//    }
}