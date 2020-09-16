@extends('master')
@section('trangchu')


<style type="text/css">
    .mid-content .menutab li{
        text-align: center
    }
</style>

<section>
    
    <article>
        <div class="wrapCont">
            <div class="wrapper">
                <div class="box_mid">
                    <div class="mid-title">
                        <div class="titleL">
                        </div>
                    </div>
               
                    <div class="mid-content" style="position: relative;">
                        <div class="menuTab">
                             <ul >
                                  <li>
                                    <a href="{{route('info')}}"><i class="fa fa-user" aria-hidden="true"></i> THÔNG TIN CÁ NHÂN</a>
                                </li>
                            
                                 <li>
                                    <a href="{{route('mypassword')}}"><i class="fa fa-lock" aria-hidden="true"></i> ĐỔI MẬT KHẨU</a>
                                </li>
                                 <li>
                                    <a href="{{route('mycart')}}"><i class="fa fa-list-ul" aria-hidden="true"></i> ĐƠN HÀNG</a>
                                </li>
                                <li>
                                    <a href="{{url('logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i> ĐĂNG XUẤT</a>
                                </li>
                            </ul>
                        </div>
                        <div class="container">
                            <div class="vnt-product">
                            <div class="row">
                                <div class="col-lg-3">
                                    
                                </div>
                                <div class="col-lg-6">
                                    <div class="formcontact" style="margin-bottom: 10%;">
                                      <form class="contact" style="display: block;" action="{{URL::to('/save-info')}}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field()}}
                                       
                                        <div class="Account"  >
                                            <div class="form" >
                                            
                                                    <div class="groupform" style="margin-bottom: 5%">
                                                        <label>Mật khẩu cũ
                                                        <b class="color">*</b>
                                                        </label>
                                                        <div class="postform">
                                                            <input type="password" name="name" required="1">
                                                        </div>
                                                    </div>
                                                    <div class="groupform" style="margin-bottom: 5%">
                                                        <label>Mật khẩu mới
                                                        <b class="color">*</b>
                                                        </label>
                                                        <div class="postform">
                                                            <input type="password" name="name" required="1">
                                                        </div>
                                                    </div>
                                                    <div class="groupform" style="margin-bottom: 5%">
                                                        <label>Nhập lại mật khẩu
                                                        <b class="color">*</b>
                                                        </label>
                                                        <div class="postform">
                                                            <input type="password" name="name" required="1">
                                                        </div>
                                                    </div>
                                                   
                                                 
                                                    <div class="groupform" >
                                                       <button name="feelbackbutton" class="feelbackbutton" style="margin: auto;">
                                                           <span>Đổi mật khẩu</span>
                                                       </button>
                                                    </div>
                                            </div>
                                        </div>
                                      </form>
                                    </div>
                                </div>
                           <!--      <div class="col-lg-6">
                                    <div class="formcontact" style="margin-bottom: 10%; border-bottom: 1px solid #555555">
                                        <div class="Account">
                                            <div class="form">
                            
                                                    <div class="groupform">
                                                        <label>Họ và tên
                                                        <b class="color">*</b>
                                                        </label>
                                                        <div class="postform">
                                                            <input type="text" name="name" required="1">
                                                        </div>
                                                    </div>
                                                    <div class="groupform">
                                                        <label>Ảnh đại diện
                                                        <b class="color">*</b>
                                                        </label>
                                                        <div class="postform">
                                                            <input type="file" name="images">
                                                        </div>
                                                    </div>
                                          
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
  
    </article>
</section>
@endsection