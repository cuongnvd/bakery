<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('index')}}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('trangchu')}}" class="nav-link" target="_blank">Visit Website</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3" action="{{route('searchadmin')}}" method="GET">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar tim" type="text"  id="search" name="adminkey" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit" class="check">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <!--   logout -->
        <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-cog" aria-hidden="true"></i>
          <span class="badge badge-warning navbar-badge"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         
          <div class="dropdown-divider"></div>
          <a href="{{url('logout')}}" class="dropdown-item">
            <i class="fa fa-sign-out"></i> Logout
         
          </a>
        
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('index')}}" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Brot Bakery</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">@if(Auth::check())
                     
                                    {{Auth::user()->name}}
                               
                                @endif</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">OPTION</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('User')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('UserList')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User List</p>
                </a>
              </li>
          
            </ul>
          </li>
  
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Product
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('Product')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('ProductList')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product List</p>
                </a>
              </li>
          
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                News
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('News')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>News Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('NewsList')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>News List</p>
                </a>
              </li>
           
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Order
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Order List</p>
                </a>
              </li>
           
            </ul>
          </li>
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Category
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('Category')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('CategoryList')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                EmailPromotion
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('EmailPromotionList')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>EmailPromotionList</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                ContactList
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('ContactList')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ContactList</p>
                </a>
              </li>
            </ul>
          </li>



          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Main content -->

 <section class="content">

    <form action="{{route('product_update', $product->id )}}" method="post" enctype="multipart/form-data">
      @method('PATCH')
    @csrf

    <input type="hidden" name="id" value="{{$product->id }}">
      <div class="container-fluid">

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"> 
                  <p style="color: red;">
                    <?php
                    $message = Session::get('message');
                    if($message)
                    {
                    echo $message;
                    Session::put('message',null);
                    }
                    ?> 
                    </p> 
                    @if($errors->any())
                  <p>
                    @foreach($errors->all() as $error)
                        <strong style="color: red; text-align: center;">
                           {{ $error }} <br />
                         </strong>
                    @endforeach
                  </p>
                @endif  
              </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th >THÊM SẢN PHẨM</th>
                  
                  </tr>
                  </thead>
             
                  <tbody>
                  
                  <tr>
                    <td>
                      <div class="form-group">
                        <label for="inputName">TÊN SẢN PHẨM</label>
                        <input type="text" name="name" class="form-control" value="{{ $product->name}}">
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-group">
                        <label for="inputName">THÀNH PHẦN</label>
                        <textarea class="textarea" name="ingredient" placeholder="Place some text here"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" >{{ $product->ingredient}}</textarea>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-group">
                    <label for="inputName">NỘI DUNG</label>
                    <div class="mb-3">
                    <textarea class="textarea" name="content" placeholder="Place some text here"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"> {{ $product->content}}</textarea>
                  </div>
                  </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-group">
                    <label for="inputName">GHI CHÚ</label>
                    <div class="mb-3">
                    <textarea class="textarea" name="note" placeholder="Place some text here"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $product->note}}</textarea>
                  </div>
                  </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-group">
                        <label for="inputName">ẢNH</label><br />
                        <input type="file" name="images">
                      </div>
                    </td>
                  </tr>
      
                  <tr>
                    <td>
                      <div class="form-group">
                        <label for="inputName">GIÁ SẢN PHẨM</label>
                        <input type="number" name="cost" class="form-control" value="{{ $product->cost}}">
                      </div>
                    </td>
                  </tr>
        
                  
                    <tr>
                    <td>
                      <div class="form-group">
                    <label for="inputName">SẢN PHẨM HOT</label>
                    <div class="form-group">
                      <select class="form-control select2" name="producthot" style="width: 100%;" value="{{ $product->producthot}}">
                        <option value="0">1. KHÔNG</option>
                        <option value="1">2. Có</option>
                      </select>
                    </div>
                  </div>
                    </td>
                  </tr>
                    <tr>
                    <td>
                      <div class="form-group">
                    <label for="inputName">SẢN PHẨM NEW</label>
                    <div class="form-group">
                      <select class="form-control select2" name="productnew" style="width: 100%;" value="{{ $product->productnew}}">
                        <option value="0">1. KHÔNG</option>
                        <option value="1">2. Có</option>
                      </select>
                    </div>
                  </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-group">
                    <label for="inputName">THỂ LOẠI SẢN PHẨM</label>
                    <div class="form-group">
                      <select class="form-control select2" name="category_id" style="width: 100%;" value="{{ $product->category_id}}">
                        <option value="4">1. SẢN PHẨM ĐẶC TRƯNG</option>
                        <option value="5">2. BÁNH SINH NHẬT</option>
                        <option value="6">3. BÁNH ĂN SÁNG</option>
                        <option value="7">4. BÁNH QUY</option>
                        <option value="8">5. KEM CÂY</option>
                        <option value="9">6. BÁNH TRÁNG MIỆNG</option>
                        <option value="10">7. PHỤ KIỆN SINH NHẬT</option>
                        <option value="11">8. TRUNG THU</option>
                        <option value="12">9. BÁNH SINH NHẬT BẮP</option>
                        <option value="13">10. BÁNH SINH NHẬT MATCHA</option>
                        <option value="14">11. BÁNH SINH NHẬT THƠM</option>
                        <option value="15">12. BÁNH SINH NHẬT KHOAI MÔN</option>
                        <option value="16">13. BÁNH SINH NHẬT CAM</option>
                        <option value="17">14. BÁNH SINH NHẬT DÂU</option>
                        <option value="18">15. BÁNH SINH NHẬT TIRAMISU</option>
                        <option value="19">16. BÁNH SINH NHẬT KIOSI</option>
                        <option value="20">17. BÁNH SINH NHẬT CASHEW</option>
                        <option value="21">18. BÁNH SINH NHẬT MOUSSE CAKE</option>
                        <option value="22">19. BÁNH SINH NHẬT CÁC VỊ KHÁC</option>
                        <option value="23">20. BÁNH SINH NHẬT MẪU ĐẶC BIỆT</option>

                      </select>
                    </div>
                  </div>
                    </td>
                  </tr>
                  
                  </tbody>
                  <tfoot>
                    <tr>
                    <td>
                      <div class="row">
                        <div class="col-6">
                          <a href="{{route('index')}}" class="btn btn-secondary">Cancel</a>
                          <input type="submit" value="Cập nhật sản phẩm"  class="btn btn-success float-right">
                        </div>
                      </div>
                    </td>
                  </tr>
                  </tfoot>
                </table>
              </div>

              <!-- /.card-body -->
            </div>
            <!-- /.card -->


          </div>
          <!-- /.col -->
        </div>
        
      </div>
        </form> 
    </section>
    
    <br />
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
</body>
</html>
