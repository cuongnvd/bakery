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

    .box_mid .mid-title .time{
        margin-top: 5%;
    }
</style>
<section>
    
    <article>
        <div class="wrapCont">
            <div class="wrapper">
                <div class="box_mid">
                    <div class="mid-title">
                        
                       
                    </div>
                    <div class="mid-content">
                        <div class="vnt-product">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="titleL" > 
                                        <h1>
                                            {{$chitiet->title}}
                                        </h1>
                                    </div>
                                    <div class="time" style="margin-top: 5%;color: #387b2b">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i> {{$chitiet->sent_date}}
                                    </div>
                                    <div class="time" style="margin-top: 5%;font-size: 25px">
                                        {!! $chitiet->content !!}
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="lineheight" style="position: relative;height: auto">
                                        <div class="linewrap" style="width: auto;top: 110px;">
                                            <div class="box-title" style="margin-bottom: 20px;border: solid 1px #387b2b;">
                                                <div class="title">
                                                    <h3>
                                                        TIN XEM NHIỀU
                                                    </h3>
                                                </div>
                                                <div class="content">
                                                    <div class="fa-item">
                                                        <div class="item">
                                                            <div class="images">
                                                                <a href="" style="display: block;padding-top: 66.666667%;position: relative;">
                                                                    <img src="https://savourebakery.com/vnt_upload/news/05_2019/thumbs/370_crop_11.jpg" style="position: absolute;width: 100%;top: 0;left: 0;">
                                                                </a>
                                                            </div>
                                                            <div class="title">
                                                                <a href="" style="text-decoration: none;color: #555555;">ĐÂY LÀ NỘI DUNG</a>
                                                            </div>
                                                        </div>

                                                        <div class="item">
                                                            <div class="images">
                                                                <a href="" style="display: block;padding-top: 66.666667%;position: relative;">
                                                                    <img src="https://savourebakery.com/vnt_upload/news/05_2019/thumbs/370_crop_11.jpg" style="position: absolute;width: 100%;top: 0;left: 0;">
                                                                </a>
                                                            </div>
                                                            <div class="title">
                                                                <a href="" style="text-decoration: none;color: #555555;">ĐÂY LÀ NỘI DUNG</a>
                                                            </div>
                                                        </div>

                                                        <div class="item">
                                                            <div class="images">
                                                                <a href="" style="display: block;padding-top: 66.666667%;position: relative;">
                                                                    <img src="https://savourebakery.com/vnt_upload/news/05_2019/thumbs/370_crop_11.jpg" style="position: absolute;width: 100%;top: 0;left: 0;">
                                                                </a>
                                                            </div>
                                                            <div class="title">
                                                                <a href="" style="text-decoration: none;color: #555555;">ĐÂY LÀ NỘI DUNG</a>
                                                            </div>
                                                        </div>

                                                        <div class="item">
                                                            <div class="images">
                                                                <a href="" style="display: block;padding-top: 66.666667%;position: relative;">
                                                                    <img src="https://savourebakery.com/vnt_upload/news/05_2019/thumbs/370_crop_11.jpg" style="position: absolute;width: 100%;top: 0;left: 0;">
                                                                </a>
                                                            </div>
                                                            <div class="title">
                                                                <a href="" style="text-decoration: none;color: #555555;">ĐÂY LÀ NỘI DUNG</a>
                                                            </div>
                                                        </div>

                                                        <div class="item">
                                                            <div class="images">
                                                                <a href="" style="display: block;padding-top: 66.666667%;position: relative;">
                                                                    <img src="https://savourebakery.com/vnt_upload/news/05_2019/thumbs/370_crop_11.jpg" style="position: absolute;width: 100%;top: 0;left: 0;">
                                                                </a>
                                                            </div>
                                                            <div class="title">
                                                                <a href="" style="text-decoration: none;color: #555555;">ĐÂY LÀ NỘI DUNG</a>
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
              <!--   <div style="margin-top: 10%">
                    <h2>
                        Ý KIẾN CỦA BẠN
                    </h2>
                    <div class="formcontact">
                      <form class="contact" action="{{URL::to('/postcontactnews')}}" method="post" style="display: block;">
                        <div class="titleform" style="margin-bottom: 15px;">
                          <div class="text">
                            <p style="color: red;">
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
                            <p>
                              Nhập ý kiến hoặc câu hỏi của bạn tại đây
                            <br />
                              Xin chân thành cảm ơn!
                            </p>
                          </div>
                          
                          <div class="row">
                           
                          {{ csrf_field()}}
                            <div class="col-lg-12">
                              <div class="titleform">
                                <div class="fa-Form" style="position: relative;">
                                  <input type="text" name="name"   placeholder="Họ tên" required="true">
                                </div>
                                <div class="fa-Form" style="position: relative;">
                                  <input type="text" name="email"   placeholder="Email" required="true">
                                </div>
                               <div class="fa-Form" style="position: relative;">
                                  <textarea class="required" name="content"  required="true" style="overflow: auto;text-indent: 0px;">
                                  </textarea>
                                </div>
                                 <div class="button">
                                      <div class="row">
                                        <div class="col-lg-12">
                                          <button>
                                            <span>
                                              Gửi
                                            </span>
                                          </button>
                                        </div>
                                      
                                      </div>
                                    </div>
                              </div>
                            </div>
                        
                          </div>
                          
                        </div>
                      </form>
                    </div>
                </div> -->
                </div>
            </div>
        </div>
        
    
    </article>
</section>
@endsection