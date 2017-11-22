<?php include 'head.php' ?>

<body class="own-style own-margin">
	<header id="header" class="container-fluid">
		<div class="login-bar">
			<a href="index.html"><img width="40" height="40" src="images/logo.png" style="margin:5px 20px"></a>
			<button onclick="document.getElementById('id01').style.display='block'" class="btn btn-xs btn-info radius-5" style="float:right; margin: 10px 15px; width:auto;display:flex;">Log out</button>
		</div>
	</header>

	<div class="container-fluid">
	
	<!--------------HorizontalTabPanel-------------->
	<div class="panel with-nav-tabs panel-info">
		<a href="#" class="nav-tabs-dropdown btn btn-block btn-success">Tabs</a>
		<ul class="nav nav-tabs nav-tabs-horizontal panel-heading text-center" id="nav-tabs-wrapper">
			<li class="active"><a href="#tab-1" role="tab" data-toggle="tab"><i class="fa fa-pencil" aria-hidden="true"></i> Chỉnh sửa thông tin sinh viên</a></li>
			<li><a href="#tab-2" role="tab" data-toggle="tab"><i class="fa fa-user" aria-hidden="true"></i> Danh sách doanh nghiệp</a></li>	
			<li><a href="#tab-3" role="tab" data-toggle="tab"><i class="fa fa-user" aria-hidden="true"></i> Kết quả thực tập</a></li>			
			
		</ul>
		<div class="tab-content panel-body">
			<!--------------Sửa sinh viên------------>
			<div class="tab-pane active" role="tabpanel" id="tab-1" style="margin: 0 auto; max-width: 600px">
				<h3>Hiệu chỉnh thông tin sinh viên</h3>

				<div class="form-group input-group col-md-12">
					<div class="input-group-addon" style="width: 120px;"><span>Họ & Tên</span></div>
					<input name="ho_ten" class="form-control" type="text" style="" placeholder="" disabled>
				</div>

				<div class="form-group input-group col-md-12">
					<div class="input-group-addon" style="width: 120px;"><span>MSSV</span></div>
					<input name="ma_so_sv" class="form-control" type="text" style="" placeholder="" disabled>
				</div>

				<div class="form-group">Ngày sinh<input type="date" name="deadline1" class="radius-5 ml-10" style="border: 1px solid gray;"></div>

				<div class="form-group">Deadline ứng tuyển<input type="date" name="deadline1" class="radius-5 ml-10" style="border: 1px solid gray;"></div>

				<div class="form-group">Deadline chọn doanh nghiệp <input type="date" name="deadline2" class="radius-5 ml-10" style="border: 1px solid gray;"></div>														
								
				<div class="form-group input-group col-md-12">					
					<textarea rows="6" class="form-control" id="" style="border-radius:5px;">Ghi chú bản thân</textarea>  
				</div>

				<div class="form-group col-md-12">
					<p class="text-center"><button class="btn btn-primary radius-5">Lưu</button></p>
				</div>
			</div>
			<!--------------End sửa sinh vien------------>	
			<!--------------Danh sach doanh nghiệp-------------->
			<div class="tab-pane" role="tabpanel" id="tab-2">				
				<h4>Danh sách doanh nghiệp sinh viên đã đăng ký</h4>				
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive scrollingTable">
							<table id="myTable" class="table table-striped table-hover table-condensed">
								<thead>
									<tr class="bg-primary">
										<th>Số thứ tự</th>
										<th>Tên Doanh Nghiệp</th>																
										<th>Deadline ứng tuyển</th>									
										<th>Deadline chọn doanh nghiệp</th>
										<th>Doanh nghiệp chấp nhận?</th>
										<th>Sinh viên chấp nhận?</th>
									</tr>
								</thead>
								<tbody id="tableChiTietSV">
									<tr data-toggle="popover3">
										<td>001</td>
										<td>FPT</td>										
										<td>28/05/2018</td>
										<td>10/06/2018</td>
										<td>Chưa</td>
										<td>
											<input class="" type="radio"  name="choice" value="enable">
										</td>																			
									</tr>
									<tr data-toggle="popover3">
										<td>002</td>
										<td>MangoAds</td>										
										<td>28/05/2018</td>
										<td>12/06/2018</td>
										<td>Chưa</td>
										<td>
											<input class="" type="radio"  name="choice" value="enable">
										</td>																			
									</tr>
									<tr data-toggle="popover3">
										<td>003</td>
										<td>VNG</td>										
										<td>29/05/2018</td>
										<td>12/06/2018</td>
										<td>Rồi</td>
										<td>
											<input class="" type="radio"  name="choice" value="enable">
										</td>																			
									</tr>
									<tr data-toggle="popover3">
										<td>003</td>
										<td>VNG</td>										
										<td>29/05/2018</td>
										<td>12/06/2018</td>
										<td>Rồi</td>
										<td>
											<input class="" type="radio"  name="choice" value="enable">
										</td>																			
									</tr>
									<tr data-toggle="popover3">
										<td>003</td>
										<td>VNG</td>										
										<td>29/05/2018</td>
										<td>12/06/2018</td>
										<td>Rồi</td>
										<td>
											<input class="" type="radio"  name="choice" value="enable">
										</td>																			
									</tr>
									<tr data-toggle="popover3">
										<td>003</td>
										<td>VNG</td>										
										<td>29/05/2018</td>
										<td>12/06/2018</td>
										<td>Rồi</td>
										<td>
											<input class="" type="radio"  name="choice" value="enable">
										</td>																			
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="form-group col-md-12">
					<p class="text-center"><button class="btn btn-primary radius-5">Lưu</button></p>
				</div>						
			</div>
			<!--------------End Danh sach doanh nghiệp------------>
			<!--------------Kết quả thực tập-------------->
			<div class="tab-pane" role="tabpanel" id="tab-3">				
				<h4>Kết quả thực tập</h4>				
				
				</div>

									
			</div>
			<!--------------Kết quả thực tập------------>								
		</div>
	</div>
	<!--------------EndHorizontalTabPanel-------------->	
	<?php include 'scripts.php' ?>
</body>
</html>