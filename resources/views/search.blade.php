@extends('master')
@section('trangchu')


<section>
    
    <article>
        <div class="wrapCont">
            <div class="wrapper">
                <div class="box_mid">
                    <div class="mid-title">
                        <div class="titleL">
                            <h1 style="font-size: 35px!important; color: #585858">
                                <?php 
                                  function doimau($str, $productkey)
                                  {
                                    return str_replace($productkey, "<span style='color:red;'>$productkey</span>", $str);

                                  }
                                ?>
                            </h1>
                            <p style="margin-left: 90px; font-size: 32px;"><b>TÌM KIẾM</b><strong style="color: red">  {{$productkey}}</strong> </p>
                        </div>
                    </div>
                    <div class="mid-content">
                        <div class="vnt-product">
                            <div class="row">
                            @foreach($product as $row)
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
                                        @if(Auth::check())
                                        <a href="{!! url('add-to-cart',['id' => $row->id]) !!}">
                                            <span>THÊM VÀO GIỎ HÀNG</span>
                                        </a>
                                        @else
                                        <a href="{{ route('login') }}">
                                            <span>THÊM VÀO GIỎ HÀNG</span>
                                        </a>
                                        @endif
                                    </div>
                                    <div class="ribbon">
                                        
                                    </div>
                                    <div class="effect">
                                        
                                    </div>
                                </div>
                            </div>
                            @endforeach
                          

                      






                            </div>
                        </div>

                    </div>
                     {{$product->appends(['productkey' => $productkey])->links()}}
                </div>
            </div>
        </div>
        
    
    </article>
</section>
@endsection