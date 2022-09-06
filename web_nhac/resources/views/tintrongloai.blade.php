
@extends('layout')
@section('tieudetrang')
   {{$tieude}}
@endsection
@section('noidung')

    
    <div class="container">
        <div class="listProduct home-album">
        <h2 class="albumTitle headStyle tp_title"><span>{{$tieude}}</span></h2>
        <div id="albumHome">
       
        <div class="row">
            @foreach($listtin as $item)
        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
        <a href="">
        <img class="lazyautosizes lazyloaded" data-sizes="auto" src="{{$item->urlHinh}}"sizes="210px">
        </a><h5>
            <a style="font-size:25px" href="{{ url('/tin',[$item->id])}}">{{$item->tieuDe}}</h5><p></a>
        <a href="{{ url('/tin',[$item->id])}}">Xem thêm ></a></p>
    </div>
    @endforeach
        </div>
        
        </div>
        </div>
    
    </div>
    
     
    
    
@endsection
