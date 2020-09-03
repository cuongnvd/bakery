<!-- Script 3.3 - footer.html -->
	<!-- End of the page-specific content. --></div>
	
<div id="footer">
		<p style="border-top: 1px solid #387b2b">
			
		</p>
	<div class="container">
		<div class="row" >
			<div class="col-sm-3" style="text-align: left; margin-bottom: 6%;background: white">
				<b style="color: #387b2b;">
					HỖ TRỢ KHÁCH HÀNG
				</b>
				<br/>
				<p >
					
				</p>
				<p style="width: 20%; border-bottom: 1px solid #387b2b"	>
					
				</p>
				<p>
					<a href="" target="_blank">Hướng dẫn mua hàng</a> 
				</p>
				<p>
					<a href="{{route('contact')}}" target="_blank">Liên hệ - Góp ý</a> 
				</p>
			
			</div >
			<div class="col-sm-3" style="text-align: left;background: white">
			<b style="color: #387b2b;">
					CHÍNH SÁCH BÁN HÀNG
				</b>
				<p>
					
				</p>
				<p style="width: 20%; border-bottom: 1px solid #387b2b"	>
					
				</p>
				<p>
					<a href="{{route('deliverypolicy')}}" target="_blank">Chính sách giao hàng</a> 
				</p>
			</div>
			<div class="col-sm-3" style="text-align: left;background: white">
				<b style="color: #387b2b;">
					CHẤP NHẬN THANH TOÁN
				</b>
				<p>
					
				</p>
				<p style="width: 20%; border-bottom: 1px solid #387b2b"	>
					
				</p>
				<p>
					
				</p>
			</div>
			<div class="col-sm-3" style="text-align: left;background: white">
				<b style="color: #387b2b;">
					CHÚNG TÔI TRÊN
				</b>
				<p>
					
				</p>
				<p style="width: 20%; border-bottom: 1px solid #387b2b"	>
					
				</p>
				<p>
					<a href="">
						<i class="fa fa-facebook-square " aria-hidden="true"></i>
					</a>&nbsp; &nbsp;

					<a href="">
						<i class="fa fa-instagram" aria-hidden="true"></i>
					</a> &nbsp; &nbsp;

					<a href="">
						<i class="fa fa-youtube-play" aria-hidden="true"></i>
					</a> &nbsp; &nbsp;
				</p>
				<p>
					<b style="color: #387b2b;">Email</b>	: sales03@sundofoods.com
				</p>
				<p>
					<b style="color: #387b2b;">Hotline </b>	: 0961.920.004
				</p>
			</div>
		</div>
	</div>
	<div class="formRecive" >
		<div class="wrapper">
			<div class="row" style="margin-right: -15px;margin-left: -15px;" >
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="width: 50%">
					<div class="txt" style="padding-left: 80px;">
						<div class="t1" style="    text-transform: uppercase;font-weight: bold;color: #fff1d3;">
							Đăng ký nhận email
						</div>
						<div class="t2" style="color: #98ca4e;font-size: 15px;line-height: 23px;">  
							Bạn sẽ luôn nhận được thông tin khuyến mãi mới và đặc biệt nhất !
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="width: 50%;">
		
		             
					<form action="{{URL::to('/save-emailpromotion')}}" method="post">
      					{{ csrf_field()}}
						<input type="text" placeholder="Nhập Email của bạn" required="1" name="email" style="width: calc(100% - 80px);height: 40px;border: none;background: #FFFFFF;padding-left: 15px;float: left;color: #2a2a2a;    font-family: inherit;font-size: inherit;line-height: inherit;outline: none">
     					 <button  onClick = "alert('Bạn đã đăng ký nhận thông báo khuyến mãi thành công');" type="submit" style="margin-left: 10px;width: 70px;height: 40px;background: #98ca4e;border: none;padding: 0;font-size: 20px;line-height: 30px;color: #ffffff;transition: all 0.3s linear;	float: left; outline: none">
     					 	<span>
     					 		<i class="fa fa-envelope"></i>
     					 	</span>
     					 </button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<br />
	<div class="formRecive1" style="margin-bottom: 5%">
		<div class="wrapper">
			<div class="row" style="margin-right: -15px;margin-left: -15px;" >
				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" style="width: 50%">
					<div class="txt" style="padding-left: 25px;">
						<div class="t1" style="    /*text-transform: uppercase;font-weight: bold;*/color: black;">
							Copyright © 2018 <b style="color: #387b2b">Savouré Bakery</b>
						</div>
						<div class="t2" style="color: black;line-height: 23px;">  
							Thiết kế web : <b style="color: #387b2b">Cuong NVD</b>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="width: 50%; text-align: right;">
					Giấy phép kinh doanh số : 0305301107 cấp ngày: 10/04/2014 
					<br />
			
					Cơ quan chủ quản: CÔNG TY CỔ PHẦN THỰC PHẨM SUN DO
				</div>
				<div class="col-lg-2 col-md-6 col-sm-12 col-xs-12" style="padding-left: 25px;">
					<img src="https://savourebakery.com/vnt_upload/File/10_2018/congthuong.png">
				</div>
			</div>
		</div>
	</div>

</div>



</body>
</html>

<!-- 
<div class="col-sm-2" style="background:#387b2b!important;position: relative;margin: auto">
					<br />
					<i class="fa fa-envelope-o fa-4x" aria-hidden="true" style="margin-left: 75%; color: #98ca4e"></i>
				</div>
				<div class="col-sm-5" style="background:#387b2b!important; color: #98ca4e">
					<br />
					<b style="color: white; ">ĐĂNG KÝ NHẬN EMAIL</b>
					<br />
					Bạn sẽ luôn nhận được thông tin khuyến mãi mới và đặc biệt nhất !
				</div>
				<div class="col-sm-5" style="background:#387b2b!important; ">
					sdasdad
				</div> -->