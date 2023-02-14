<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //Tạo action
    
    //Action tính cộng
    public function tong($a,$b){
        $tong = $a+$b;
        return view('v_tong',['a'=>$a, 'b'=>$b, 'tong'=>$tong]);
        // return $a;
    }
}
