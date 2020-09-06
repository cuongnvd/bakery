@extends('master')
@section('trangchu')

<section>
    
    <article>
        <div class="wrapCont">
            <div class="wrapper">
                <div class="box_mid">
                    <div class="mid-title">
                        <div class="titleL">
                            <h1 style="font-size: 35px!important; color: #585858">COMBO BÁNH TRUNG THU</h1>
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
                                           {{$row->cost}}
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
                             





                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </article>
</section>
@endsection