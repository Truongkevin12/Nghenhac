<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tin;
use App\Models\loai;

class Admincontrolller extends Controller
{
     //admin/loai
     function danhsach(){
        $data= tin::all();
        return view('Admin/danhsach',['data'=>$data]);
     }
    function them(){
        return view("admin/themTin");
    }
    function them_(){
        $t = new Tin;
        $t->tieuDe=$_POST['tieuDe'];
        $t->urlHinh=$_POST['urlHinh'];
        $t->idLT=$_POST['idLT'];
        $t->save();
        return redirect('admin/tin/danhsach');
    }
    //xoá id nè
    function xoa($id){
        $t = loai::find($id);
        if ($t==null) return redirect('/thongbao');
        $t->delete();
        return redirect('/admin/loaitin/danhsachtin');
    }
    function capnhat($id){
        
        $t =Tin::find($id);
        if ($t==null) return redirect('/thongbao');
        
        return view('admin/capnhattin',['tin'=>$t]);
    }
    function capnhat_($id){
        $t =Tin::find($id);
        if ($t==null) return redirect('/thongbao');
        $t->tieuDe=$_POST['tieuDe'];
        $t->urlHinh=$_POST['urlHinh'];
        $t->idLT=$_POST['idLT'];
        $t->save();
        return redirect('/admin/tin/danhsach');

    }
    //codel loại tim
    function danhsachtin(){
        $data= loai::all();
        return view('admin/loaitin/danhsachtin',['data'=>$data]);
     }
     function themloaitin(){
        return view("admin/loaitin/themTin");
    }
    function themloaitin_(){
        $t = new loai;
        $t->ten=$_POST['ten'];
        $t->save();
        return redirect('admin/loaitin/danhsachtin');
    }
    function xoaloaitin($id){
        $t = loai::find($id);
        if ($t==null) return redirect('/thongbao');
        $t->delete();
        return redirect('/admin/loaitin/danhsachtin');
    }
    function capnhatloaitin($id){
        $t =loai::find($id);
        if ($t==null) return redirect('/thongbao');
        
        return view('admin/loaitin/capnhattin',['tin'=>$t]);
    }
    function capnhatloaitin_($id){
        $t =loai::find($id);
        if ($t==null) return redirect('/thongbao');
        $t->ten=$_POST['ten'];
        $t->save();
        return redirect('/admin/loaitin/danhsachtin');

    }
}
