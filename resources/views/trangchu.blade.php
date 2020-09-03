@extends('master')
@section('trangchu')







<section>
    <article>
             <div class="container-fluid">
                  <h1 class="title" style=" color: #585858; font-size: 35px">SẢN PHẨM HOT</h1>
					 <div class="slider" id="center">
					 	@foreach($producthot as $row)
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
            </div>
        </div>
         <div class="container-fluid">
        	<h1 class="title"  style=" color: #585858; font-size: 35px">SẢN PHẨM MỚI</h1>
        	<div class="slider" id="autoplay">
        		@foreach($productnew as $row)
        		<div>
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
        <div class="container-fluid" style="background:  #fff1d3">
        	<div class="row">
        		
			  <div class="col-sm-6" >
			  	<h2>
			  		TIN KHUYẾN MÃI
			  	</h2>
			  	<div class="khoi">
			  		<a href="">
					<img src="https://savourebakery.com/vnt_upload/news/06_2020/banner_web_-_comeback_facebook.jpg">
					</a>			
				</div> 
							         <p style="text-align: center;">
							         	<a href="">
							         	<span > <h4>Chào mừng Savouré Xô Viết trở lại với diện mạo mới</h4></span>
							         	</a>
							         	<span>Chào mừng cửa hàng Xô Viết xuất hiện trở lại với một diện mạo hoàn toàn mới. Cả nhà hãy ghé ngay để trải nghiệm không gian mới và nhận các ưu đãi ...</span>
							         </p>
			  </div>
			  <div class="col-sm-3" style="background:  #fff1d3">
			  	  	<h2>
			  		BẢN TIN SAVOURÉ
			  	</h2>
			  	<div class="khoi1">
			  		<a href="">
					<img src="https://savourebakery.com/vnt_upload/news/04_2020/thumbs/370_crop_baemin-01.png">
					</a>			
				</div> 
							         <p style="text-align: center;">
							         	<a href="">
							         	<span > <h4>SAVOURÉ ĐÃ CÓ MẶT TRÊN BAEMIN</h4></span>
							         	</a>
							         <!-- 	<span>Chào mừng cửa hàng Xô Viết xuất hiện trở lại với một diện mạo hoàn toàn mới. Cả nhà hãy ghé ngay để trải nghiệm không gian mới và nhận các ưu đãi ...</span> -->
							         </p>
			  </div>
			  <div class="col-sm-3">

			  	<div class="khoi2">
			  		<a href="">
					<img src="https://savourebakery.com/vnt_upload/news/05_2019/thumbs/370_crop_deliverynow_vn.png">
					</a>					
				</div> 
							         <p style="text-align: center;">
							         	<a href="">
							         	<span > <h4>ĐẶT BÁNH SAVOURÉ NHANH VÀ TIỆN LỢI VỚI DELIVERYNOW</h4></span>
							         	</a>
							         <!-- 	<span>Chào mừng cửa hàng Xô Viết xuất hiện trở lại với một diện mạo hoàn toàn mới. Cả nhà hãy ghé ngay để trải nghiệm không gian mới và nhận các ưu đãi ...</span> -->
							         </p>
			  </div>
			</div>
        </div>
        <br />
        <div class="container-fluid">
        	  <h1  style="color: #585858; text-align: center;font-size:35px">CẢM NHẬN KHÁCH HÀNG</h1>
			<div class="slider" id="lazy">

			  	<div class="comment">
					<img data-lazy="https://savourebakery.com/vnt_upload/feeling/thumbs/200_crop_a84576a04c1874304735604d9f47d5a4.jpg" style="max-width: 100%; max-height: 100%; border-radius: 100%" />
					<br />
					<h5 style="color: black; font-size: 20px">
						Mr.Siro
					</h5>
					<p style="color: black">
						Bánh kem ngon, béo, hình ngộ nghĩnh đáng yêu
					</p>
				</div> 

			   <div class="comment">
					<img data-lazy="https://savourebakery.com/vnt_upload/feeling/thumbs/200_crop_81592c0bc97730296966.jpg" style="max-width: 100%; max-height: 100%; border-radius: 100%" />
					<br />
					<h5 style="color: black; font-size: 20px">
					Hồ Quang Điện
					</h5>
					<p style="color: black">
						Bánh ở đây rất ngon,nhân viên bán hàng nhiệt tình, chu đáo. Sẽ ủng hộ dài dài
					</p>
				</div> <!-- end khoi -->

				<div class="comment">
					<img data-lazy="https://savourebakery.com/vnt_upload/feeling/thumbs/200_crop_81592c0bc97730296966.jpg" style="max-width: 100%; max-height: 100%; border-radius: 100%" />
					<br />
					<h5 style="color: black; font-size: 20px">
					Amoniac
					</h5>
					<p style="color: black">
						Savoure là 1 thương hiệu bánh mà tôi rất yêu thích. Về bánh kem thì bánh kem bắp ờ đây là số 1, bên cạnh còn một số loại khác cũng rất ngon như matcha, tiramisu.. Ở đây còn có bánh su kem, bánh flan, kem cây và một số loại bánh tươi cũng ngon xuất sắc.
					</p>
				</div> <!-- end khoi -->

				<div class="comment">
					<img data-lazy="https://savourebakery.com/vnt_upload/feeling/thumbs/200_crop_T.jpg" style="max-width: 100%; max-height: 100%; border-radius: 100%" />
					<br />
					<h5 style="color: black; font-size: 20px">Trương Tú Trân</h5>
					<p style="color: black">
						Mình rất thích bánh của tiệm, nhất là bánh su kem và bánh sandwich trà xanh ^^ kem của tiệm cũng rất ngon nữa ạ. Sẽ ủng hộ tiệm dài dài ^^
					</p>
				</div> <!-- end khoi -->

				<div class="comment">
					<img data-lazy="https://savourebakery.com/vnt_upload/feeling/thumbs/200_crop_mang-thien-nhien-vao-phong-tYm.png" style="max-width: 100%; max-height: 100%; border-radius: 100%" />
					<br />
					<h5 style="color: black; font-size: 20px">Uyen Nguyen</h5>
					<p style="color: black">
						Là fan cứng của Savoure. Thích bánh của Savoure, vị thanh nhẹ, không quá ngọt. Đúng gu ^^... Đặc biệt là bánh su, bánh bắp, bánh matcha và bánh chà bông heo cay nữa
					</p>
				</div> <!-- end khoi -->

				<div class="comment">
					<img data-lazy="https://savourebakery.com/vnt_upload/feeling/thumbs/200_crop_171c625c793955fe8de32c62572ad9b1.jpg" style="max-width: 100%; max-height: 100%; border-radius: 100%" />
					<br />
					<h5 style="color: black; font-size: 20px">LINH TRUC</h5>
					
					<p style="color: black">
						BÁNH KEM BẮP VÀ MATCHA Ở ĐÂY NGON XUẤT SẮC LUÔN CÒN BÁNH SU KEM THẦN THÁNH THÌ KHỎI BÀN LUÔN , SẼ ỦNG HỘ DÀI DÀI HEHEE
					</p>
				</div> <!-- end khoi -->

			</div>
        </div>
    </article>
</section>
@endsection