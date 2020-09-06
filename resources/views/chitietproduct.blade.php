@extends('master')
@section('trangchu')

<style type="text/css">
    .box-title .title{
    font-size: 18px;
    line-height: 26px;
    text-transform: uppercase;
    font-weight: bold;
    color: #387b2b;
    padding: 11px 20px;

    }
    .box-title .content .item{
        padding: 20px;
    margin-bottom: 2px;
    border-bottom: solid 1px rgba(0,0,0,0.15);
    }
    .box-title .content .item .images{
        overflow: hidden;
    margin-bottom: 10px;
    }
    .box-title .content .item .title{
         font-size: 16px;
    line-height: 24px;
    }

    form .tick span{
        font-weight: bold;
    min-height: 23px;
    display: block;
    max-width: 100%;
    margin-bottom: 5px;
    }
    form .tick button{
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
    form .tick button span{
    padding-left: 25px;
    position: relative;
    overflow: hidden;
    margin: 0;
    font: inherit;
    width: 100%;
    }
    form .tick button:hover{
        background: #98ca4e;
    }
    form .cost .count{
        display: flex;
    align-items: center;
    padding: 3px;
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
                    <div class="mid-content">
                        <div class="vnt-product">
                            <div class="row">
                                <div class="col-lg-9" >
                              
                                    <div class="row">
                                        <div class="col-sm-12" >
                                            <img src="{{ asset('upload/'.$chitietproduct->images )}}" style="width: 70%;height: 100%;overflow: hidden;">
                                        </div>
                                        <div class="col-sm-12" style="margin-top: 5%">
                                            <div class="title">
                                                <h2 style=";color: #387b2b;">
                                                    {{$chitietproduct->name}}
                                                </h2>
                                            </div>
                                            <div class="title">
                                                <p style=";color: #555555;">
                                                    {!! $chitietproduct->content !!}
                                                </p>
                                            </div>
                                            <div class="title">
                                                <p style=";color: #555555;">
                                                   <b>Thành phần</b> {!! $chitietproduct->ingredient !!}
                                                </p>
                                            </div>
                                         <form action="{{URL::to('/save-cart')}}" method="post">
                                             {{ csrf_field()}}
                                            <div class="row" style="width: 100%">
                                                 <div class="col-lg-4">
                                                     <div class="cost">
                                                         <div class="text" style="font-size: 15px;line-height: 23px;font-weight: bold;text-transform: uppercase;color: #555555;">
                                                            Giá bán
                                                         </div>
                                                         <div class="price" style="font-size:25px;line-height: 33px;color: #387b2b;font-weight: bold;">
                                                             {{$chitietproduct->cost}}


                                                         </div>
                                                     </div>
                                                 </div>
                                                
                                                  
                                                 
                                                 <div class="col-lg-4">
                                                     <div class="cost">
                                                         <div class="text" style="font-size: 15px;line-height: 23px;font-weight: bold;color: #555555;margin-bottom: 8px;">
                                                            Số lượng
                                                         </div>
                                                       
                                                            <div class="input-group mb-3">
                                                              <input type="number" class="form-control" id="demo" name="qty" min="0" max="99">
                                                               <input type="hidden" class="form-control" id="demo" name="productid_hidden" min="0" max="99" value="{{$chitietproduct->id}}">
                                                              <div class="input-group-append">
                                                                <span class="input-group-text">Cái</span>
                                                              </div>
                                                            </div>
                                                      
                                                         
                                                     </div>
                                                 </div>
                                                 <div class="col-lg-4">
                                                    <div class="tick">
                                                    <span></span>
                                                    <a href="{{route('cart')}}" style="outline: none">
                                                     <button type="submit" style="outline: none">
                                                         <span><i class="fa fa-cart-plus" aria-hidden="true"></i> thêm vào giỏ  </span>
                                                     </button>
                                                     </a>
                                                    </div>
                                                     
                                                 </div>
                                                 </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
        <div class="col-lg-3">
            <div class="lineheight" style="position: relative;height: auto">
                <div class="linewrap" style="width: auto;top: 110px;">
                    <div class="box-title" style="margin-bottom: 20px;border: solid 1px #387b2b;">
                        <div class="title">
                            <h3>
                                SẢN PHẨM MỚI
                            </h3>
                        </div>
                        <div class="content">
                            <div class="fa-item">
                                @foreach($productnew as $row)
                                <div class="item">
                                    <div class="images">
                                        <a href="{{route('chitietproduct', ['id' => $row->id])}}" style="display: block;padding-top: 66.666667%;position: relative;">
                                            <img src="{{ asset('upload/'.$row->images )}}" style="position: absolute;width: 100%;top: 0;left: 0;">
                                        </a>
                                    </div>
                                    <div class="title">
                                        <a href="{{route('chitietproduct', ['id' => $row->id])}}" style="text-decoration: none;color: #555555;">{{$row->name}}</a>
                                    </div>
                                </div>
                                @endforeach
                             
                             

                              

                              
                            </div>
                        </div>
                    </div>
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