@extends('master')
@section('trangchu')




<div class="wrapCont">
            <div class="wrapper">
                <div class="box_mid">
                    <div class="mid-title">
                       <div class="row">
                           <div class="col-lg-8">
                                <div class="titleL">
                                    <h1 style="font-size: 35px!important; color: #585858; margin-top: 5%">LIÊN HỆ - GÓP Ý</h1>
                                </div>
                           </div>
                       </div>
                    </div>
                    <div class="mid-content">

                           <div class="feelback">
                          <div class="row">
                              <div class="col-lg-2">
                                  <div class="img">
                                      <img src="https://savourebakery.com/vnt_upload/weblink/2.jpg" style="border: 0px;max-width: 100%;">
                                  </div>
                              </div>
                              <div  class="col-lg-10">
                                <div class="content">
                                    <h5 style="color: #387b2b">
                                      TRỤ SỞ SAVOURÉ
                                    </h5>

                                  </div>
                                  <div class="title" style="color: #555555">

                                     <i class="fa fa-home" aria-hidden="true" style="color: #387b2b"></i> <b>&ensp;Địa chỉ:  </b>
                                     &emsp;&emsp;&emsp;&emsp;Số 5/22A đường Bùi Hữu Nghĩa, Khu Phố Bình Đức, Binh Hoà, Thuận An, Bình Dương

                                     <br/>

                                     <i class="fa fa-phone" aria-hidden="true" style="color: #387b2b"></i> <b>&ensp;Điện thoại:  </b>&emsp;&emsp;&ensp;07 088 23456
                                    <br />

                                  </div>
                              </div>
                          </div>
                      </div>  


                    </div>
                    <div class="formcontact">
                      <form class="contact" action="{{URL::to('/save-contact')}}" method="post" style="display: block;">
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
                              Nếu quý khách có thắc mắc, ý kiến phản hồi hay đóng góp xin vui lòng điền vào Form dưới đây và gửi cho chúng tôi.
                            <br />
                              Xin chân thành cảm ơn!
                            </p>
                          </div>
                          
                          <div class="row">
                           
                          {{ csrf_field()}}
                            <div class="col-lg-6">
                              <div class="titleform">
                                <div class="fa-Form" style="position: relative;">
                                  <input type="text" name="name"   placeholder="Họ tên" required="true">
                                </div>
                                <div class="fa-Form" style="position: relative;">
                                  <input type="text" name="email"   placeholder="Email" required="true">
                                </div>
                                <div class="fa-Form" style="position: relative;">
                                  <input type="text" name="phonenumber"  placeholder="Số điện thoại" required="true">
                                </div>
                                <div class="fa-Form" style="position: relative;">
                                  <input type="text" name="address"   placeholder="Địa chỉ" required="true">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6">
                               <div class="fa-Form" style="position: relative;">
                                  <input type="text" name="title"  placeholder="Tiêu đề" required="true">
                                </div>
                                 <div class="fa-Form" style="position: relative;">
                                  <textarea class="required" name="content"  required="true" style="overflow: auto;text-indent: 0px;">
                                  </textarea>
                                </div>
                                 <div class="fa-Form forminput" style="position: relative;">
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
                </div>
            </div>
        </div>







@endsection