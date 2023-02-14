<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CateController extends Controller
{
    public function addCate(){
        return view("admin.addCate");
    }

    public function index(){
        $cate = Category::all();

        return view("admin.listcate")->with('ds',$cate);
    }

    public function listcate(){
        $query =DB::table('category') //Sử dụng class DB
                ->select("cateid","catename")
                ->orderBy('catename','ASC')
                ->get();

        return view("admin.listcate")->with('ds',$query);
    }
    public function addcatepost(Request $request){
        $ten = $request->post('ten'); //Lấy giá trị từ textbox có tên là ten
        $mota = $request->post('mota');
        DB::table('category')->insert(['catename'=>$ten,'description'=>$mota]);
        return redirect(route('listcate'));
    }


}
