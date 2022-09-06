
<?php 
$loaitin_arr=DB::table('loaitin')->select('id','ten')
->orderby('thuTu','asc') //xem dòng này nhé nếu bật lên là k chaỵ
->where ('AnHien','=','1')
->limit(4)->get();
?>
  <div id="header" class="FixedTop"><div class="free_header">
    Chúc bạn nghe nhạc vui vẻ </div><header class="tp_header">
      <div class="d-none d-sm-block d-ms-none"><div class="topbar">
        <div class="container"><div class="page_header-blocks"><div class="row"><div class="col-3 col-lg-4 page_header-block page_header-left"><div class="page_header-item page_header-store">
    <span class="hotline-header">
    <i class="far fa-phone"> 1900 2812</i>
    </span>
    <span class="store-header">
    <i class="far fa-map-marker-alt"></i> <a href="/he-thong-cua-hang"> Hệ thống cửa hàng</a>
    </span></div></div><div class="col-6 col-lg-4 page_header-block page_header-center page_header-center"><div class="page_header-item page_header-logo">
    <a href="/">
    <img src="https://img.cdn.vncdn.io/nvn/ncdn/store3/116325/logo_1646279818_logo1.png" alt="Logo">
    </a></div></div><div class="col-3 col-lg-4 page_header-block page_header-right"><div class="page_header-item page_header-search"><form id="search-site" action="/search" method="get">
    <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input class="topinput ui-autocomplete-input" id="search-keyword" name="q" type="text" aria-label="Bạn tìm gì..." placeholder="Search..." autocomplete="off">
    <button class="btntop" type="submit" aria-label="tìm kiếm">
    <i class="far fa-search"></i>
    </button><div id="searchFolding"></div></form></div><div class="icon_cart_desktop"><div class="cart_header">
    <a href="/cart">
    <i class="fal fa-shopping-bag"></i>
    <span class="number_cart_header">0</span>
    </a></div><div class="drop_cart_desktop"><div class="drop_cart_overlay"></div><div class="cart_mini"></div></div></div></div></div></div></div></div><div class="container"><div id="nav"><nav class="main-nav tp_menu text-center"><ul class="clearfix"><li class="li-menu tp_menu_item menu-cate-item"><a href="/">Trang chủ</a></li>
      <li class="li-menu tp_menu_item">
      
        @foreach ($loaitin_arr as $lt)
        <li class="nav-item">
            <a class="nav-link" href="{{url('/cat',[$lt->id])}}">{{$lt->ten}}</a>
          </li>
      @endforeach
    </a>
    @if(Auth::check())
    @if(Auth::user()->idgroup==1)
    <li class="nav-item">
      {{-- <a class="nav-link" href={{Route('admin')}}>Admin</a> --}}
    </li>
    @endif
    <li class="nav-item">
      <a class="nav-link" href={{Route('profile.show')}}>{{__('Profile')}}</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" >Đăng Nhập</a>
    </li>
    @else
    <li class="nav-item">
      <a class="nav-link" href={{Route('login')}}>Đăng Nhập</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href={{Route('register')}}>Đăng kí</a>
    </li>
    @endif
    <li class="nav-item">
      <a class="nav-link" href="admin/tin/danhsach" >Admin</a>
    </li>
  </nav></div></div></div><div class="d-lg-none d-md-none"><div class="container"><div class="header-mobile"><div class="row"><div id="menu" class="col-3 col-sm-3 col-3 flex_mobile">
    <a href="#boxMenu">
    <img src="/tp/T0410/img/align-justify.png">
    </a></div><div id="headerLogo" class="col-6 col-sm-6 col-6">
    <a href="/"><img width="" height="50" src="" alt="logo"></a></div>
    <div id="accHeader" class="col-3 col-sm-3 col-3 flex_mobile"><div class="profile_header">
    <a href="#boxMenuRight">
    <img src="/tp/T0410/img/svg/profile.svg" alt="profile">
    </a></div><div class="cart_header">
    <a href="/cart">
    <img src="/tp/T0410/img/svg/bag.svg" alt="Giỏ hàng">
    <span class="number_cart_header">0</span>
    </a></div></div></div><div class="col-12 d-md-none d-block"><form class="frm-search" action="/search">
    <input type="text" name="q" value="" id="inputSearch" placeholder="Tìm kiếm..."></form></div></div></div></div></header><div class="sub-board" style="opacity: 0.5; display: none;"></div></div>