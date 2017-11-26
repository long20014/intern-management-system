<?php include 'head.php' ?>

<body class="own-style own-margin">
	<?php include 'header.php' ?>

	<section>
		<div class="container">
			<p class="text-center"><img src="images/vng-logo-share-v2.jpg"></p>
		</div>

		
		<div class="company-description container radius-5 mt-30" style="border: 1px solid blue; box-shadow: 5px 5px 5px #888888">
			<h2 class="text-center"> Giới thiệu về VNG</h2>
			<p>VNG là công ty công nghệ Việt Nam, thành lập năm 2004. VNG có 3 mảng sản phẩm chính: nội dung số bao gồm tin tức, đào tạo và giải trí trực tuyến, liên kết cộng đồng và thương mại điện tử. Tính đến tháng 1/2014, VNG có 30 triệu khách hàng.</p>
		</div>

		<div class="contact container mt-30">
			<div class="row">
				<div class="col-sm-6">
					<h3>TP. HỒ CHÍ MINH</h3>
					<p>Trụ sở chính (Flemington)<br>
					182 Lê Đại Hành, Phường 15, Quận 11. <br>
					Điện thoại: (84.8) 3962 3888<br> 
					Fax: (84.8) 3962 4666<br>
					<a href="https://www.google.com/maps/place/Flemington+Tower,+182+L%C3%AA+%C4%90%E1%BA%A1i+H%C3%A0nh,+ph%C6%B0%E1%BB%9Dng+15,+Qu%E1%BA%ADn+11,+H%E1%BB%93+Ch%C3%AD+Minh/data=!4m2!3m1!1s0x31752eec7752c743:0xd832d71bd12b6a15?sa=X&ved=0ahUKEwizjs6z_JTXAhUBNpQKHbfbAZ4Q8gEIIzAA">XEM BẢN ĐỒ</a><br>
					Hỗ trợ khách hàng<br>
					Hotline: 1900561558</p>
				</div>

				<div class="col-sm-6">
					<h3>TP.HÀ NỘI</h3>
					<p>Chi nhánh văn phòng Hà Nội<br>
					Tầng 12a tòa nhà Sông Hồng, số 165 đường Thái Hà, Quận Đống Đa.<br> 
					Tel: (84.4) 3786.8866<br> 
					Fax: (84.4) 3557.5754<br>
					<a href="">XEM BẢN ĐỒ</a><br>
					Hỗ trợ khách hàng<br>
					Hotline: 1900561558<br></p>
				</div>
			</div>
			
			
						
		</div>

		<div class="form-group col-md-12 mt-30">
			<p class="text-center"><button onclick="document.getElementById('id02').style.display='block'" id="register" class="btn btn-info radius-5">Đăng ký</button></p>
		</div>		
	</section>

	<div id="id01" class="modal">  
	  	<form class="radius-5 form-modified animate" action="/action_page.php">
			<div class="text-center mb-30" >
				<h2 class="font-w-300 fs-42 color-white ">Log in</h2>
				<p class="text-center color-gray fs-17 line-h ">Process results from a change in the energy level of the nucleus</p>			
			</div>
		  	
		  	<p class="m-0"><input class="input input-sm w-full radius-5 color-white mb-20" placeholder="Username" type="text" required></p>
		  	
			<p class="m-0"><input class="input input-sm w-full radius-5 color-white	mb-20" placeholder="Password" type="password" required></p>

			<div class="mb-20">
				<label class="checkbox">
				  <input type="checkbox">
				  <span></span>
					Remember me
				</label>
				<button type="submit" class="btn btn-sm btn-primary radius-5" style="width:40%;max-width:200px;float:right;">Log in</button>						
			</div>		  		  			  	
		</form>
	</div>

	<div id="id02" class="modal">  
	  	<form class="radius-5 form-modified animate" action="/action_page.php">
			<div class="text-center mb-30" >
				<h2 class="font-w-300 fs-42 color-white ">Đăng ký</h2>
				<p class="text-center color-gray fs-17 line-h ">Đăng ký doanh nghiệp</p>			
			</div>

		  	<p>(*)Tập tin CV gửi kèm</p>
			<p><input type="file" name="pic" accept="image/*" style="display: inline-block"></p>
 			
			<div class="mt-20">				
				<p class="text-center"><button type="submit" class="btn btn-sm btn-primary radius-5" style="width:40%;max-width:200px;">Đăng ký</button></p>					
			</div>		  		  			  	
		</form>
	</div>

	<script>
	// Get the modal
	var modal = document.getElementById('id01');
	var modal2 = document.getElementById('id02');

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	    if (event.target == modal) {
	        modal.style.display = "none";
	    }
	    else if (event.target == modal2) {
	        modal2.style.display = "none";
	    }
	}	
	</script>
</body>
</html>