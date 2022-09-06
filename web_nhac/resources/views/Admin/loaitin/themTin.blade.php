<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    #ds{
      padding-left: 240px;
    }
    h1{
      color:rgb(35, 176, 169);
    }
    </style>

<h1 class="text-center">Thêm Tin</h1>
<form action="{{route('themloaitin')}}" method="post" class="col-7 m-auto">
<p>Tiêu đề: <input name="ten" class="form-control"></p>
    </select>
</p>
<button type="submit" class="btn btn-primary">Thêm tin</button>
@csrf

</form>