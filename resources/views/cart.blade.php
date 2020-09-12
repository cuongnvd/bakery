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
                            <h1 style="font-size: 35px!important; color: #585858; text-align: center;">Giỏ hàng</h1>
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
                    <form>
                        <div class="tablecart">
                            <table width="100%">
                                <thead style="display: table-header-group;vertical-align: middle;border-color: inherit;">
                                    <tr>
                                        <th width="40%">
                                            Sản phẩm
                                        </th>
                                        <th>
                                            Đơn giá
                                        </th>
                                        <th>
                                            Số lượng
                                        </th>
                                        <th>
                                            Tổng cộng
                                        </th>
                                        <th>
                                            
                                        </th>
                                        <th>
                                            Xóa
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="img">
                                                <img src="https://savourebakery.com/vnt_upload/product/02_2020/thumbs/COOKIES_9_02.07.2019.jpg" style="max-height: 100%; max-width: 100%">
                                            </div>
                                            <div class="tensp" style="font-size: 20px;margin-top: 2%">
                                                Bánh bông lan nướng chà bông
                                            </div>
                                            <div class="clear">
                                                
                                            </div>
                                        </td>
                                        <td style="text-align: center;">
                                            <div class="price">
                                                231123 VND
                                            </div>
                                        </td>
                                        <td>
                                            <div class="input-group mb-3" style="width: 50%; margin: auto; margin-top: 5%">
                                              <input type="number" class="form-control" id="demo" name="amount" min="0" max="99" style="font-weight: bold;">
                                              <div class="input-group-append">
                                                <span class="input-group-text">Cái</span>
                                              </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="total" style="color: #387b2b; text-align: center;">
                                                123123
                                            </div>
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td style="text-align: center;">
                                            <button class="deleteUser" id="delete" style="outline: none;background: none;border: none">
                                                <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="infototal" style="background: none">
                                <div class="row">
                                    <div class="col-sm-6">
                                        
                                    </div>
                                    <div class="col-sm-6" style="background: none">
                                        <ul style="list-style: none;">
                                            <li style="margin-bottom: 5px;"> 
                                                <div class="slot1">
                                                    <div class="row">
                                                       
                                                        <div class="col-lg-6">
                                                            Thành tiền
                                                        </div>
                                                        <div class="col-lg-6">
                                                            123213
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                             <li style="margin-top: 10px;padding-top: 10px;font-weight: bold;border-top: solid 1px ;padding-top: 10px;"> 
                                                <div class="slot1">
                                                    <div class="row">
                                                        <div class="col-lg-6" >
                                                            Tổng đơn hàng
                                                        </div>
                                                        <div class="col-lg-6" style="color: #387b2b;">
                                                            123,1212đ
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="pay">
                                <div class="row">
                                    <div class="col-lg-7">
                                        
                                    </div>
                                    <div class="col-lg-5" >
                                        <div class="tick">
                                                    <span></span>
                                                    <a href="{{route('cart')}}" style="outline: none">
                                                     <button style="outline: none">
                                                         <span> TIẾN HÀNH THANH TOÁN  </span>
                                                     </button>
                                                     </a>
                                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="note" style="margin-top: 5%">
                                Lưu ý: Thời gian xử lý đơn hàng online: Từ 08h00 đến 17h30 vào các ngày làm việc trong tuần, trừ Thứ 7 và Chủ Nhật
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
 
  
    </article>
</section>
@endsection