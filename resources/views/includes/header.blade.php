

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Css -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!--   <link rel="stylesheet" type="text/css" href="/css1.css"> -->


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick-theme.css">
  <link rel="stylesheet" href="{{asset('/css/css1.css')}}">

  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- ---dropdown-- -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- ---- -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- ---- -->
  <script src="https://code.jquery.com/jquery-latest.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.min.js" ></script>
  <script type="text/javascript" src="{{asset('/js/js.js')}}" ></script>


<style type="text/css">
    




#search{
    outline: none;
    border: none;
      border-radius: 10px;
      height: 40px;
      width: 100%;

}

.icon{
    outline: none;
    border: none;
    margin-left: -45px;
    background: white;
    width: 5%;
    color: black;

}
section{
    display:flex;
      height: 100%; 
}

#fakeimg1{
    height:12em;
    background-color:darkgray;
    border-radius:2px;
    width:100%;
}
.contact-box .box{
    width:100%;
    height:2em;
    margin-top:0.5em;
    border-radius:4px;
    background-color:darkgray;
}
/*main side*/
article{
  width: 65%;
  height: 100%;
    flex:68%;
    background-color:white;
    padding:1em;
}
.post h1{
  font-size:32px;
}
.post{
  background: white;
  height: 70%;
}
 .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  .nav-item{
    margin-left: 2%;
  }
  .navbar-nav{
    width: 100%;

  }
  .bg-dark{
    background: #387b2b !important;
    color: white !important;
  }
  .nav-link{
    font-size: medium;

  }
  .dropdown-item:hover{
    color: white;
    background: #387b2b;
  }
  
  .dropdown-item{
    background: #387b2b;
    color: #98ca4e;
  }
  .dropdown-menu{
   background: #387b2b;
  }
.footer{
    width: 100%;
    height: auto;
    background: #387b2b;
    margin-top: 20px;
}
.footer p {
    line-height: 50px;
    text-align: center;
}


</style>

</head>




 <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
     <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
     

  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://savourebakery.com/vnt_upload/weblink/BANNER_1_1920x988px.jpg" alt="Los Angeles" width="100%" height="100%">
    </div>
    <div class="carousel-item">
      <img src="https://savourebakery.com/vnt_upload/weblink/banner_top_-_carem.jpg" alt="Chicago" width="100%" height="100%">
    </div>
    <div class="carousel-item">
      <img src="https://savourebakery.com/vnt_upload/weblink/BANNER_2_1920x988px.jpg" alt="New York" width="100%" height="100%">
    </div>
    <div class="carousel-item">
      <img src="  https://savourebakery.com/vnt_upload/weblink/BANNER_3_1920x988px.jpg" alt="New York" width="100%" height="100%">
    </div>
    <div class="carousel-item">
      <img src="https://savourebakery.com/vnt_upload/weblink/banner_top_-_banh_dau.jpg" alt="New York" width="100%" height="100%">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>




<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">

  <a class="navbar-brand" href="{{route('trangchu')}}" style="margin-left: 5%; width: 15%"  >
    <h1 >
      <img src="https://savourebakery.com/vnt_upload/weblink/logo.png" style="max-height: 100%; max-width: 100%">
    </h1>
  </a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <div class="collapse navbar-collapse" id="collapsibleNavbar" style="margin-left: 10%">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="{{route('trangchu')}}" >GIỚI THIỆU</a>
    </li>
   <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        SẢN PHẨM
      </a>
      <div class="dropdown-menu" style="border: none">
        <a class="dropdown-item" href="{{route('allproduct')}}">TẤT CẢ SẢN PHẨM</a>
        <a class="dropdown-item" href="{{route('productspecial')}}">SẢN PHẨM ĐẶC TRƯNG</a>
        <a class="dropdown-item" href="{{route('birthdaycake')}}">BÁNH SINH NHẬT</a>
        <a class="dropdown-item" href="{{route('breakfastcake')}}">BÁNH ĂN SÁNG</a>
        <a class="dropdown-item" href="{{route('cookie')}}">BÁNH QUY</a>
        <a class="dropdown-item" href="{{route('cream')}}">KEM CÂY</a>
        <a class="dropdown-item" href="{{route('cakedessert')}}">BÁNH TRÁNG MIỆNG</a>
        <a class="dropdown-item" href="{{route('birthdayaccessories')}}">PHỤ KIỆN SINH NHẬT</a>
        <a class="dropdown-item" href="{{route('midautumn')}}">TRUNG THU</a>
        
    
      </div>
    </li>
       <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        TIN TỨC
      </a>
      <div class="dropdown-menu" style="border: none">
        <a class="dropdown-item" href="{{route('newssavore')}}">BẢN TIN SAVOURÉ</a>
        <a class="dropdown-item" href="{{route('newspromotion')}}">KHUYẾN MÃI</a>
        <a class="dropdown-item" href="{{route('newsclient')}}">TƯ VẤN KHÁCH HÀNG</a>
        
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('feelback')}}">CẢM NHẬN</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('contact')}}">LIÊN HỆ</a>
    </li>
     <li class="nav-item dropdown">
      <a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown">
       <i class="fa fa-search" style="background: none; color: white"></i>
      </a>
      <div class="dropdown-menu" style=" border: none;">
        <form class="form-inline" action="{{route('search')}}" style="margin-left: 2%; width: 95%" method="GET">
            <input type="text" id="search" placeholder="    Search..."  name="productkey" class="tim"/>
        </form>



      </div>
    </li>
      <li class="nav-item" >
      <a class="nav-link" href="{{route('login')}}" >LOGIN</a>
    </li>
     <!--  <li>
            <a href="">
            @if(Auth::check())
          <b style="color: white">
            {{Auth::user()->name}}
          </b>
          @endif
        </a>
        <ul class="sub-head">
          <li><a href="">Thông tin </a> </li>
          <li><a href="{{url('logout')}}"> Đăng xuất </a></li>
        </ul>
          </li> -->
    <li class="nav-item" >
      <a class="nav-link" href="#"> CART </a>
    </li>
   

  </ul>
</div>
  
</nav>

	<div id="content"><!-- Start of the page-specific content. -->
<!-- Script 9.1 - header.html -->






