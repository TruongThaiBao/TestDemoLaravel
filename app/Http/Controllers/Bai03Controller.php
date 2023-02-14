<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bai03Controller extends Controller
{
    public function tuyensinh(){
        return view('v_tuyensinh');
    }
    public function xulytuyensinh( Request $request){ //Hàm xử lý dữ liệu gửi từ form
        $toan=$request->post('toan'); //Lấy giá trị từ textbox có name là Toán
        $ly=$request->post('ly'); //Lấy giá trị từ textbox có name là Toán
        $hoa=$request->post('hoa'); //Lấy giá trị từ textbox có name là Toán
        $kv=$request->post('kv'); //Lấy giá trị từ textbox có name là Toán


        return view('v_tuyensinh')->with(['toan'=>$toan, 'ly'=>$ly, 'hoa'=>$hoa, 'kv'=>$kv]); //Truyền biến cho v_tuyensinh
    }

};
