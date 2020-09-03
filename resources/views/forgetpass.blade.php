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
    .form .postform input[type=password]{
        width: 100%;
    height: 40px;
    border: solid 1px #e5e5e5;
    outline: none;
    }
    .form .postform input[type=number]{
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
</style>

<section>
    
    <article>
        <div class="wrapCont">
            <div class="wrapper">
                <div class="box_mid">
                    <div class="mid-title">
                        <div class="titleL">
                            <h1 style="font-size: 35px!important; color: #585858; text-align: center;">BẠN ĐÃ QUÊN MẬT KHẨU</h1>
                        </div>
                    </div>
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
                    <div class="mid-content">
                        <div class="Account">
                            <form>
                          
                            <div class="form">
                                
                                    <div class="groupform">
                                        <label>Email đăng nhập
                                        <b class="color">*</b>
                                        </label>
                                        <div class="postform">
                                            <input type="text" name="email">
                                        </div>
                                    </div>
                                
                                  

                                    <div class="groupform">
                                       <button >
                                           <span>Gửi lại mật khẩu</span>
                                       </button>
                                    </div>
                                   <div class="groupform">
                                       <a href="{{route('login')}}" class="register">
                                           <span>Bạn đã có tài khoản? Đăng nhập ngay</span>
                                       </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
  
    </article>
</section>
@endsection