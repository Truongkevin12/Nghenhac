
        <link rel="stylesheet" type="text/css" href="{{asset('assets\css\bootstrap.min.css')}}" >
        <link rel="stylesheet" type="text/css" href="{{asset('assets\css\icons.min.css')}}" >
        <link rel="stylesheet" type="text/css" href="{{asset('assets\css\app.min.css')}}" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <div id="wrapper">
          <!-- Topbar Start -->
          <div class="navbar-custom">
              <ul class="list-unstyled topnav-menu float-right mb-0">
                  <li class="dropdown notification-list">
                      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                          <i class="mdi mdi-bell noti-icon"></i>
                          <span class="badge badge-danger rounded-circle noti-icon-badge">4</span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                          <!-- item-->
                          <div class="dropdown-item noti-title">
                              <h5 class="font-16 m-0">
                                  <span class="float-right">
                                      <a href="" class="text-dark">
                                          <small>Clear All</small>
                                      </a>
                                  </span>Notification
                              </h5>
                          </div>

                          <div class="slimscroll noti-scroll">

                               <!-- item-->
                               <a href="javascript:void(0);" class="dropdown-item notify-item">
                                      <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                      <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                  </a>

                                  <!-- item-->
                                  <a href="javascript:void(0);" class="dropdown-item notify-item">
                                      <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                      <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                                  </a>

                                  <!-- item-->
                                  <a href="javascript:void(0);" class="dropdown-item notify-item">
                                      <div class="notify-icon bg-danger"><i class="mdi mdi-heart"></i></div>
                                      <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">3 days ago</small></p>
                                  </a>

                                  <!-- item-->
                                  <a href="javascript:void(0);" class="dropdown-item notify-item">
                                      <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i></div>
                                      <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
                                  </a>

                                  <!-- item-->
                                  <a href="javascript:void(0);" class="dropdown-item notify-item">
                                      <div class="notify-icon bg-primary">
                                          <i class="mdi mdi-heart"></i>
                                      </div>
                                      <p class="notify-details">Carlos Crouch liked <b>Admin</b>
                                          <small class="text-muted">13 days ago</small>
                                      </p>
                                  </a>
                          </div>

                          <!-- All-->
                          <a href="javascript:void(0);" class="dropdown-item text-primary text-center notify-item notify-all ">
                              View all
                              <i class="fi-arrow-right"></i>
                          </a>

                      </div>
                  </li>

                  <li class="dropdown notification-list">
                      <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                          <img src="assets\images\users\avatar-1.jpg" alt="user-image" class="rounded-circle">
                          <span class="pro-user-name ml-1">
                                  Admm
                                   <i class="mdi mdi-chevron-down"></i> 
                          </span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                          <!-- item-->
                          <div class="dropdown-header noti-title">
                              <h6 class="text-overflow m-0">Welcome !</h6>
                          </div>

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <i class="mdi mdi-account-outline"></i>
                              <span>Profile</span>
                          </a>

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <i class="mdi mdi-settings-outline"></i>
                              <span>Settings</span>
                          </a>

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <i class="mdi mdi-lock-outline"></i>
                              <span>Lock Screen</span>
                          </a>

                          <div class="dropdown-divider"></div>

                          <!-- item-->
                          <a href="javascript:void(0);" class="dropdown-item notify-item">
                              <i class="mdi mdi-logout-variant"></i>
                              <span>Logout</span>
                          </a>

                      </div>
                  </li>

                  <li class="dropdown notification-list">
                      <a href="javascript:void(0);" class="nav-link right-bar-toggle">
                          <i class="mdi mdi-settings-outline noti-icon"></i>
                      </a>
                  </li>


              </ul>

              <!-- LOGO -->
              <div class="logo-box">
                  <a href="index.html" class="logo text-center logo-dark">
                      <span class="logo-lg">
                          <img src="assets\images\logo-dark.png" alt="" height="26">
                          <!-- <span class="logo-lg-text-dark">Simple</span> -->
                      </span>
                      <span class="logo-sm">
                          <!-- <span class="logo-lg-text-dark">S</span> -->
                          <img src="assets\images\logo-sm.png" alt="" height="22">
                      </span>
                  </a>

                  <a href="index.html" class="logo text-center logo-light">
                      <span class="logo-lg">
                          <img src="assets\images\logo-light.png" alt="" height="26">
                          <!-- <span class="logo-lg-text-light">Simple</span> -->
                      </span>
                      <span class="logo-sm">
                          <!-- <span class="logo-lg-text-light">S</span> -->
                          <img src="assets\images\logo-sm.png" alt="" height="22">
                      </span>
                  </a>
              </div>

              <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                  <li>
                      <button class="button-menu-mobile">
                          <i class="mdi mdi-menu"></i>
                      </button>
                  </li>
      
                  <li class="d-none d-sm-block">
                      <form class="app-search">
                          <div class="app-search-box">
                              <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Search...">
                                  <div class="input-group-append">
                                      <button class="btn" type="submit">
                                          <i class="fas fa-search"></i>
                                      </button>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </li>
              </ul>
          </div>
          <!-- end Topbar --> <!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">


              <div class="user-box">
                      <div class="float-left">
                          <img src="assets\images\users\avatar-1.jpg" alt="" class="avatar-md rounded-circle">
                      </div>
                      <div class="user-info">
                          <a href="#">Stanley Jones</a>
                          <p class="text-muted m-0">Administrator</p>
                      </div>
                  </div>
  
          <!--- Sidemenu -->
          <div id="sidebar-menu">
  
              <ul class="metismenu" id="side-menu">
  
                  <li class="menu-title">Navigation</li>
  
                  <li>
                      <a href="index.html">
                          <i class="ti-home"></i>
                          <span>Trang chủ </span>
                      </a>
                  </li>
  
                  <li>
                      <a href="ui-elements.html">
                          <i class="ti-paint-bucket"></i>
                          <span> Sản phẩm </span>
                          <span class="badge badge-primary float-right">11</span>
                      </a>
                  </li>
  
                  <li>
                      <a href="javascript: void(0);">
                          <i class="ti-light-bulb"></i>
                          <span> Khách hàng </span>
                          <span class="menu-arrow"></span>
                      </a>
                      
                  </li>

                  <li>
                      <a href="typography.html">
                          <i class="ti-spray"></i>
                          <span> Bình luận </span>
                      </a>
                  </li>
  
                  <li>
                      <a href="javascript: void(0);">
                          <i class="ti-pencil-alt"></i>
                          <span>  Phản hồi </span>
                          <span class="menu-arrow"></span>
                      </a>
                      <ul class="nav-second-level" aria-expanded="false">
                          <li><a href="forms-general.html">Khách hàng</a></li>
                          <li><a href="forms-advanced.html">Ca sĩ</a></li>
                      </ul>
                  </li>
  
                
  
          </div>
          <!-- End Sidebar -->
  
          <div class="clearfix"></div>

  
  </div>
  <!-- Left Sidebar End -->

          <!-- ============================================================== -->
          <!-- Start Page Content here -->
          <!-- ============================================================== -->
          <div class="content-page">
            <div class="content">

                <!-- Start container-fluid -->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
          <div class="col-md-10" id="ds">
              @foreach ($data as $item)
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">{{$item->tieuDe}}</h5>
                <p class="card-text">{{$item->tomTat}}</p>
                <p class="card-text">{{$item->noiDung}}</p>
                <a class="btn btn-success" href="{{route('them')}}" role="button">Thêm</a>
                  <a class="btn btn-primary" href={{URL('admin/tin/capnhat/')."/".$item->id}} role="button">Sửa</a>
                  <a class="btn btn-danger" href={{URL('admin/tin/xoa/')."/".$item->id}} role="button">Xoá</a>
      
              </div>
            </div>
            @endforeach
          </div>
        </div>
          <!-- END content-page -->
                    </div>
                </div>
            </div></div>
      </div>
      <!-- END wrapper -->

      
      <!-- Right Sidebar -->
      <div class="right-bar">
          <div class="rightbar-title">
              <a href="javascript:void(0);" class="right-bar-toggle float-right">
                  <i class="mdi mdi-close"></i>
              </a>
              <h5 class="font-16 m-0 text-white">Theme Customizer</h5>
          </div>
          <div class="slimscroll-menu">
      
              <div class="p-4">
                  <div class="alert alert-warning" role="alert">
                      <strong>Customize </strong> the overall color scheme, layout, etc.
                  </div>
                  <div class="mb-2">
                      <img src="assets\images\layouts\light.png" class="img-fluid img-thumbnail" alt="">
                  </div>
                  <div class="custom-control custom-switch mb-3">
                      <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked="">
                      <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                  </div>
          
                  <div class="mb-2">
                      <img src="assets\images\layouts\dark.png" class="img-fluid img-thumbnail" alt="">
                  </div>
                  <div class="custom-control custom-switch mb-3">
                      <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsstyle="assets/css/bootstrap-dark.min.css" data-appstyle="assets/css/app-dark.min.css">
                      <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                  </div>
          
                  <div class="mb-2">
                      <img src="assets\images\layouts\rtl.png" class="img-fluid img-thumbnail" alt="">
                  </div>
                  <div class="custom-control custom-switch mb-5">
                      <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appstyle="assets/css/app-rtl.min.css">
                      <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                  </div>

                  <a href="https://1.envato.market/EK71X" class="btn btn-danger btn-block mt-3" target="_blank"><i class="mdi mdi-download mr-1"></i> Download Now</a>
              </div>
          </div> <!-- end slimscroll-menu-->
      </div>
      <script src={{ asset('assets\js\vendor.min.js') }}></script>
      <script src={{ asset('assets\libs\morris-js\morris.min.js')}}></script>
      <script src={{ asset('assets\libs\raphael\raphael.min.js')}}></script>
      <script src={{ asset('assets\libs\raphael\raphael.min.js')}}></script>
      <script src={{ asset('assets\js\pages\dashboard.init.js')}}></script>
