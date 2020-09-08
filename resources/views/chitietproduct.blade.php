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
    .box-title .content .item:hover{
        border: 1px solid #387b2b;
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

    .col-sm-5 img{
        width: 100%;
    height: 100%;
    transition: 1s;
    }

    .col-sm-5:hover img{
    transform: scale(1.1);
    transition: 1s;
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
                                <div class="col-lg-12" >
                              
                                    <div class="row">
                                        <div class="col-sm-5" >
                                            <img src="{{ asset('upload/'.$chitietproduct->images )}}" style="width: 100%;height: 100%;overflow: hidden;">
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
                <div class="container-fluid" style="border-bottom: 1px solid black; margin-top: 5%">
                    
                </div>     
                <div class="container-fluid" style="margin-top: 5%; ">
                  <h1 class="title" style=" color: #585858; font-size: 35px">SẢN PHẨM KHÁC</h1>
                    <!--  <div class="slider" id="center">
                        @foreach($allproductct as $type)
                        @foreach($type->post as $row)
                        <div >
                        <div class="product iframeBox">
                            <div class="img">
                                <a href="{{route('chitietproduct', ['id' => $row->id])}}">
                                    <img src="{{ asset('upload/'.$row->images )}}">
                                </a>
                            </div>
                            <div class="tend">
                                 <h3>
                                     <a href="">
                                         {{$row->name}}
                                     </a>
                                 </h3>
                            </div>
                            <div class="des">
                                
                            </div>
                            <div class="price">
                                <div class="red">
                                    <b>Giá {{$row->cost}}</b>
                                    <br/>
                            
                                </div>
                            </div>
                            <div class="link">
                                <a href="{{route('chitietproduct', ['id' => $row->id])}}">
                                    <span>XEM CHI TIẾT</span>
                                </a>
                            </div>
                            <div class="ribbon">
                                                        
                            </div>
                            <div class="effect">
                                                        
                            </div>
                        </div>
                        </div>
                        @endforeach
                        @endforeach
                        </div> -->
                    </div>
                        
                    <div class="mid-content">
                        <div class="vnt-product">
                            
                            <div class="row">
                            @foreach($allproductct as $type)
                            @foreach($type->productLimit as $row)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="product iframeBox">
                                    <div class="img">
                                        <a href="{{route('chitietproduct', ['id' => $row->id])}}">
                                            <img src="{{ asset('upload/'.$row->images )}}">
                                        </a>
                                    </div>
                                    <div class="tend">
                                         <h3>
                                             <a href="">
                                                 {{$row->name}}
                                             </a>
                                         </h3>
                                    </div>
                                    <div class="des">
                                        {!! $row->content !!}
                                    </div>
                                    <div class="price">
                                        <div class="red">
                                             <b>Giá {{$row->cost}}</b>
                                        </div>
                                    </div>
                                    <div class="link">
                                        <a href="{{route('chitietproduct', ['id' => $row->id])}}">
                                            <span>XEM CHI TIẾT</span>
                                        </a>
                                    </div>
                                    <div class="ribbon">
                                        
                                    </div>
                                    <div class="effect">
                                        
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endforeach

                      






                            </div>
                            
                        </div>

                    </div>
                
                        {{$allproductct->links()}}
       
                    
                            </div>
                        </div>

                    </div>
               
                </div>
            </div>
        </div>
        
    
    </article>
</section>
@endsection