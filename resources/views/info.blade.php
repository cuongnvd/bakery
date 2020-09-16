@extends('master')
@section('trangchu')


<style type="text/css">
    .mid-content .menutab li{
        text-align: center
    }

    .tend button{
        font-size: 14px;
    line-height: 22px;
    background: #387b2b;
    border: none;
    color: #ffffff;
    text-transform: uppercase;
    padding: 8px 15px;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
    outline: none;
    }
    .tend button:hover{
        background: #98ca4e;
    }
    .product:hover{
       border: none;
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
                                    <div class="product iframeBox">
                                        <div class="img">
                                            <div class="groupform" style="text-align: center;" >
                                                  <img src="{{ asset('/upload/'.$user->images )}}" style="max-width: 80%; max-height: 80% ; padding-top: 5px; border-radius: 100% ">
                                                </div>
                                        </div>
                                        <div class="tend"  style="text-align: center;">
                                            <a href="{{route('changeavatar')}}">
                                           <button>
                                               <span>
                                                  ĐỔI AVATAR
                                               </span>
                                           </button>
                                           </a>
                                        </div>
                                       
                                       
                                    </div>
                                    
                                </div>

                                <div class="col-lg-4">
                                    <div class="formcontact" style="margin-bottom: 10%;">
                                        <div class="Account">
                                            <div class="form">
                                                    <input type="hidden" name="id" value="{{$user->name}}">
                                                  
                                                    <div class="groupform">
                                                        <label style="font-weight: bold;">Email đăng nhập</label>
                                                        <div class="postform" style="margin-bottom: 5%">
                                                            <input type="text" name="name" required="1" value="{{$user->email}}" readonly="1" style="background: #E6E6E6">
                                                        </div>
                                                    </div>
                                                    <div class="groupform">
                                                        <label style="font-weight: bold;">Ngày đăng ký</label>
                                                        <div class="postform" style="margin-bottom: 5%">
                                                            <input type="text" name="name" required="1" value="{{$user->created_at}}" readonly="1" style="background: #E6E6E6">
                                                        </div>
                                                    </div>

                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="formcontact" style="margin-bottom: 10%;">
                                      <form class="contact" style="display: block;" action="{{URL::to('/save-info')}}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field()}}
                                       
                                        <div class="Account"  >
                                            <div class="form" >
                                            
                                                    <div class="form-group" style="margin-bottom: 5%">
                                                        <label>Họ và tên
                                                        <b class="color">*</b>
                                                        </label>
                                                        <div class="postform">
                                                            <input type="text" name="name" required="1" value="{{$user->name}}">
                                                        </div>
                                                    </div>
                                                    <div class="groupform" style="margin-bottom: 5%">
                                                        <label>Điện thoại
                                                        <b class="color">*</b>
                                                        </label>
                                                        <div class="postform">
                                                            <input type="text" name="name" required="1">
                                                        </div>
                                                    </div>
                                                    <div class="groupform" style="margin-bottom: 5%">
                                                        <label>Địa chỉ
                                                        <b class="color">*</b>
                                                        </label>
                                                        <div class="postform">
                                                            <input type="text" name="name" required="1">
                                                        </div>
                                                    </div>
                                                    <div class="groupform" style="margin-bottom: 5%">
                                                        <label>Ngày sinh
                                                        </label>
                                                        <div class="postform">
                                                            <input type="date" name="name" required="1">
                                                        </div>
                                                    </div>
                                                    <div class="groupform" style="margin-bottom: 5%">
                                                        <label>Giới tính
                                                        </label>
                                                        <div class="postform">
                                                            <select class="form-control select2" name="role" style="width: 100%;" >
                                                                <option value="#"> GIỚI TÍNH</option>
                                                                <option value="0"> NAM</option>
                                                                <option value="1"> NỮ</option>
                                                              </select>
                                                        </div>
                                                    </div>
                                                 
                                                    <div class="groupform" >
                                                       <button name="feelbackbutton" class="feelbackbutton" style="margin: auto;">
                                                           <span>Cập nhật</span>
                                                       </button>
                                                    </div>
                                            </div>
                                        </div>
                                      </form>
                                    </div>
                                </div>
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