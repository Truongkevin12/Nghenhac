<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    #ds{
      padding-left: 240px;
    }
    h1{
      color:rgb(25, 116, 207);
    }
    </style>
@php
    $q = DB::table('loaitin')->get();

@endphp

<h1 class="text-lg-center">Cập Nhật Tin</h1>
<form action="" method="post" class="col-7 m-auto">
<p>Tiêu đề: <input name="tieuDe" class="form-control"  value="{{ $tin->id }}"></p>
<p>Tóm Tắt: <textarea name="tomTat" class="form-control" >{{ $tin->tomTat }}</textarea></p>
<p>urlHinh: <input name="urlHinh" class="form-control" value="{{ $tin->urlHinh }}"></p>
<p>idLT<select name="idLT" class="form-control">
    @foreach ($q as $item)
    <option value="{{ $item->id }}" >{{$item->ten}}</option>
    @endforeach
    
    </select>
</p>
<button type="submit" class="btn btn-primary">Cập nhật Tin</button>
@csrf

</form>