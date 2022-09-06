<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class TinController extends Controller
{
    
    function index (){
        return view ('home');
    }
    function chitiet($id=0){
        $tin = DB::table('tin') ->where ('id',$id)->first();
        $data = ['id'=>$id,'tin'=>$tin];
        return view("chitiet",$data);
    }
    function tintrongloai($idLT){
        $listtin = DB::table('tin')->where('idLT',$idLT) ->limit(6)->get();
        
        $tieude = DB::table('loaitin')->where('id',$idLT)->value('ten');
        $data = ['idLT'=>$idLT,'listtin'=>$listtin,'tieude'=> $tieude,];
        return view('tintrongloai',$data);
    }
    function getSearch(Request $req) {
        $s = DB::table('tin')->where('tieuDe','like','%'.$req->key.'%')->orwhere('id','like',$req->key)->get();
        return view('search',compact('s'));
    }
   
}


