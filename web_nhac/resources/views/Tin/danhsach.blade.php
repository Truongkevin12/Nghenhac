
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
  #ds{
    padding-left: 240px;
  }
  h1{
    color:deeppink;
  }
  </style>
<div class="row">
    </div>
    <div class="col-md-10" id="ds">
        <h1 class="text-center">Danh sách Tin</h1>
        @foreach ($data as $item)
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{$item->tieuDe}}</h5>
          <p class="card-text">{{$item->tomTat}}</p>
          <a class="btn btn-success" href="/tin/them" role="button">Thêm</a>
            <a class="btn btn-primary" href="/tin/capnhat/{{$item->id}}" role="button">Sửa</a>
            <a class="btn btn-danger" href="/tin/xoa/{{$item->id}}" role="button">Xoá</a>

        </div>
      </div>
      @endforeach
    </div>
  </div>