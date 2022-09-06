<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    #ds{
      padding-left: 240px;
    }
    h1{
      color:rgb(25, 116, 207);
    }
    </style>

<h1 class="text-lg-center">Cập Nhật Loại Tin</h1>
<form action="" method="post" class="col-7 m-auto">
<p>Tên: <input name="ten" class="form-control"  value="{{ $tin->ten }}"></p>

</p>
<button type="submit" class="btn btn-primary">Cập nhật Tin</button>
@csrf

</form>