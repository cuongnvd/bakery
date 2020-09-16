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
    .tablecart table thead tr th{
        font-weight: normal;
    text-transform: uppercase;
    background: #387b2b;
    padding: 9px 15px;
    color: #ffffff;
    line-height: 18px;
    text-align: center;
    }
    .tablecart .img{
        width: 75px;
    position: relative;
    margin-right: 15px;
    float: left;
    }
    .tablecart .tensp{
        overflow: hidden;
    }
    .clear{
        clear: both;
    font-size: 0;
    line-height: 0px;
    height: 0;
    }
    .tablecart .price{
        font-size: 16px;
    line-height: 24px;
    }
    .infototal{
        background: #f4f4f4;
    padding: 10px;
    margin-bottom: 20px;
    }
    .note{
        padding: 10px 0;
    font-weight: bold;
    color: #387b2b;
    }
    .tick span{
        font-weight: bold;
    min-height: 23px;
    display: block;
    max-width: 100%;
    margin-bottom: 5px;
    }
    .tick button{
    width: 100%;
    background: #387b2b;
    border: none;
    padding: 0;
    color: #ffffff;
    text-transform: uppercase;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    height: 40px;   
    }
    .tick button span{
    padding-left: 25px;
    position: relative;
    overflow: hidden;
    margin: 0;
    font: inherit;
    width: 100%;
    }
    .tick button:hover{
        background: #98ca4e;
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
                    <div class="mid-content" >
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
                    <form>
                        <div class="tablecart">
                            <table width="100%">
                                <thead style="display: table-header-group;vertical-align: middle;border-color: inherit;">
                                    <tr>
                                        <th >
                                            MÃ ĐƠN HÀNG
                                        </th>
                                        <th>
                                            NGÀY ĐẶT
                                        </th>
                                        <th>
                                            SẢN PHẨM
                                        </th>
                                        <th>
                                            TỔNG TIỀN
                                        </th>
                                
                                        <th>
                                          TRẠNG THÁI
                                        </th>
                                    </tr>
                                </thead>
                                </div>
                           

                                <tbody>
                                    
         
                                    <tr style="border-bottom: 1px solid #BDBDBD">
                                        <td>
                                          
                                            <div class="tensp" style="font-size: 20px;margin-top: 2%;margin-left: 5%">
                                            
                                            </div>
                                            <div class="clear">
                                                
                                            </div>
                                        </td>
                                        <td style="text-align: center;">
                                            <div class="price">
                                             
                                            </div>
                                        </td>
                                        <td>
                                           <!--  <div class="input-group mb-3" style="width: 50%; margin: auto; margin-top: 5%">
                                              <input type="number" class="form-control" id="demo" name="amount" min="0" max="99" style="font-weight: bold;" value=''>
                                              <div class="input-group-append">
                                                <span class="input-group-text">Cái</span>
                                              </div>
                                            </div> -->
                                        </td>
                                        <td>
                                            <div class="total" style="color: #387b2b; text-align: center;">

                                 
                                               
                                            </div>
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td style="text-align: center;">
                                    
                                           <!--  <a href="">
                                                <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                                            </a> -->
                                        </td>
                                    </tr>
                        
                                </tbody>
                            
                            </table>
                       
                           
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
 
  
    </article>
</section>
@endsection