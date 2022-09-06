
@extends('layout')
@section('tieudetrang')
    {{$tin->tieuDe}}
@endsection
@section('noidung')
<div class="container">
   <h1 style="text-align:center">{{$tin->tieuDe}}</h1>
   <iframe src="{{$tin->list_nhac}}" width="620" height="382" frameborder="0" allowfullscreen allow="autoplay"></iframe>
    <h5>Lời bài hát {{$tin->tieuDe}}</h5>
    <p>Ca sĩ:{{$tin->nhac_si}}</p>
   <div id="noidung">
    {!! $tin->noiDung !!}
   </div>
   </div>

@endsection
