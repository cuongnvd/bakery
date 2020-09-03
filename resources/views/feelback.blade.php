@extends('master')
@section('trangchu')
<style type="text/css">
   .Account{
        background: #ffffff;
    border-bottom: dashed 1px rgba(0, 0, 0, 0.15);
    max-width: 50%;
    margin: 0 auto;
    padding-bottom: 15px;
    margin-bottom: 15px;
    }
    .form{
        margin: 0 auto;
    }
    .groupform{
        margin-bottom: 15px;
    }
    label{
        max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
    }
    .form label{
        display: block;
    }
    .form .color{
        color: red;
    }
    .form .postform{
        position: relative;
    }
    .form .postform input[type=text]{
        width: 100%;
    height: 40px;
    border: solid 1px #e5e5e5;
    outline: none;
    }
    .form .postform input[type=file]{
        width: 100%;
    height: 40px;
    border: solid 1px #e5e5e5;
    outline: none;
    }
    .checkbox{
        position: relative;
    display: block;
    margin-top: 10px;
    margin-bottom: 10px;
    }
    .form label{
        display: block;
    }
    .checkbox label{
        min-height: 20px;
    
    margin-bottom: 0;
    font-weight: 400;
    cursor: pointer;
    }
    .form button{
    width: 100%;
    height: 40px;
    background: #387b2b;
    color: #ffffff;
    text-align: center;
    text-transform: uppercase;
    border: none;
    -webkit-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear;
    }
    .form button:hover{
        background: #98ca4e;
    }
    .form .register{
    text-decoration: none;
    display: block;
    text-align: center;
    background: #eeeeee;
    border-bottom: solid 1px rgba(0,0,0,0.1);
    padding: 11px 10px;
    color: #333333;
    }
    .form .register:hover{
        background: #6E6E6E;
        color: white;
    }
    .form .postform textarea[type=text]{
      width: 100%;
    height: 100px;
    border: solid 1px #e5e5e5;
    outline: none;
    }
</style>



<div class="wrapCont">
            <div class="wrapper">
                <div class="box_mid">
                    <div class="mid-title">
                       <div class="row">
                           <div class="col-lg-8">
                                <div class="titleL">
                                    <h1 style="font-size: 35px!important; color: #585858; margin-top: 5%; ">CẢM NHẬN KHÁCH HÀNG</h1>
                                </div>
                           </div>
                       </div>
                    </div>
                    <div class="formcontact" style="margin-bottom: 10%; border-bottom: 1px solid #555555">
                      <form class="contact" style="display: block;" action="{{URL::to('/save-feel')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field()}}
                          <p style="color: red;text-align: center;">
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
                        <div class="Account">
                            <div class="form">
                                <form>
                                    <div class="groupform">
                                        <label>Họ và tên
                                        <b class="color">*</b>
                                        </label>
                                        <div class="postform">
                                            <input type="text" name="name" >
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
                                    <div class="groupform">
                                        <label>Cảm nhận
                                        <b class="color">*</b>
                                        </label>
                                        <div class="postform">
                                            <textarea type="text" name="content">
                                              
                                            </textarea> 
                                        </div>
                                    </div>
                                   
                                   
                                    <div class="groupform">
                                       <button >
                                           <span>Viết cảm nhận</span>
                                       </button>
                                    </div>
                                  
                                </form>
                            </div>
                        </div>
                      </form>
                    </div>
                    <div class="mid-content">
                      @foreach($feelback as $row)
                      <div class="feelback">
                          <div class="row">
                              <div class="col-lg-2">
                                  <div class="img">
                                      <img src="{{ asset('upload/'.$row->images )}}" style="border: 0px;max-width: 100%;">
                                  </div>
                              </div>
                              <div  class="col-lg-10">
                                  <div class="content">
                                    <i class="fa fa-commenting-o fa-2x" aria-hidden="true" style="color: #387b2b"></i>
                                    <br />
                                      {{$row->content}}
                                  </div>
                                  <div class="name">
                                     {{$row->name}}
                                  </div>
                                  <div class="time">
                                      Đánh giá ngày {{$row->date}}
                                  </div>
                              </div>
                          </div>
                      </div>
                      @endforeach
                      

                    </div>

                    <div>
                     {{ $feelback->links() }}
                    </div>
                </div>
            </div>
        </div>






@endsection