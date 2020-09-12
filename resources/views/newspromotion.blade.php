@extends('master')
@section('trangchu')




<div class="wrapCont">
            <div class="wrapper">
                <div class="box_mid">
                    <div class="mid-title">
                        <div class="titleL">
                            <h1 style="font-size: 35px!important; color: #585858; margin-top: 5%">TIN KHUYẾN MÃI</h1>
                        </div>
                    </div>
                    <div class="mid-content">
                        <div class="row">
                            @foreach($newspromotion as $row)
                            <div class="col-lg-12">
                                <div class="bignews">
                                    <div class="img">
                                        <a href="{{route('chitiet', ['id' => $row->id])}}">
                                            <img src="{{ asset('upload/'.$row->images )}}" style="    border: 0px;vertical-align: middle;max-width: 100%;">
                                        </a>  
                                    </div>
                                    <div class="tend">
                                        HOT! HOT! MUA 1 ĐƯỢC 2
                                    </div>
                                    <div class="content">
                                        
                                        <h3 style="font-weight: bold;">
                                            <a href="{{route('chitiet', ['id' => $row->id])}}" style="font-size: 1.3vw ">
                                                {{$row->title}}
                                            </a>
                                        </h3>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">
                             @foreach($news as $row)
                            <div class="col-lg-4">
                                <div class="news">
                                    <div class="img">
                                        <a href="{{route('chitiet', ['id' => $row->id])}}">
                                            <img src="{{ asset('upload/'.$row->images )}}" style="    border: 0px;">
                                        </a>
                                    </div>
                                    <div class="title">
                                        <h3 style="font-size: 100%;font-weight: bold;">
                                            <a href="{{route('chitiet', ['id' => $row->id])}}">
                                                {{$row->title}}
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="time">
                                        {{$row->sent_date}}
                                    </div>
                                    <div class="content">
                                       {!! $row->summary !!}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection