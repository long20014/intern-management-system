<?php include 'head.php' ?>

<body class="own-style own-margin">
	<header id="header" class="container-fluid">
		<div class="login-bar">
			<a href="index.html"><img width="40" height="40" src="images/logo.png" style="margin:5px 20px"></a>

			<button onclick="document.getElementById('id01').style.display='block'" class="btn btn-xs btn-info radius-5" style="float:right; margin: 10px 15px; width:auto;display:flex;">Log out</button>
		</div>
	</header>

	
	<!-------Popover button template------>
	<div style="display: none" id="btnMenu">
		<div class="btn-group btn-group-xs" role="group" >
			<button id="" type="button" class="btn btn-sm btnView btn-success1">Xem</button>
			<button id="" type="button" class="btn btn-sm btnEdit btn-primary1">Sửa</button>
			<button id="delete" type="button" class="btn btn-sm btnDelete btn-danger1">Xoá</button>
			<button id="delete" type="button" class="btn btn-sm btnDeleteAll btn-danger1">Xoá hết</button>
		</div>
	</div>
	<!-------End popover button template------->

	<!-------Popover button template------>
	<div style="display: none" id="btnMenu2">
		<div class="btn-group btn-group-xs" role="group" >
			<button id="" type="button" class="btn btn-sm btnView2 btn-success1">Xem</button>
			<button id="" type="button" class="btn btn-sm btnEdit2 btn-primary1">Sửa</button>
			<button id="delete" type="button" class="btn btn-sm btnDelete2 btn-danger1">Xoá</button>
			<button id="delete" type="button" class="btn btn-sm btnDeleteAll2 btn-danger1">Xoá hết</button>
		</div>
	</div>
	<!-------End popover button template------>
	<div>
		<h3 class="text-center">Trang admin</h3>	
	</div>
	
	<!--------------HorizontalTabPanel-------------->
	<div class="panel with-nav-tabs panel-info">
		<a href="#" class="nav-tabs-dropdown btn btn-block btn-success">Tabs</a>
		<ul class="nav nav-tabs nav-tabs-horizontal panel-heading text-center" id="nav-tabs-wrapper">
			<li class="active"><a href="#tab-1" role="tab" data-toggle="tab"><i class="fa fa-user" aria-hidden="true"></i> Danh sách sinh viên</a></li>
			<li><a href="#tab-2" role="tab" data-toggle="tab"><i class="fa fa-user" aria-hidden="true"></i> Danh sách doanh nghiệp </a></li>			
			<li><a href="#tab-3" role="tab" data-toggle="tab"><i class="fa fa-plus" aria-hidden="true"></i> Thêm người dùng</a></li>
			<li><a href="#tab-4" role="tab" data-toggle="tab"><i class="fa fa-pencil" aria-hidden="true"></i> Chỉnh sửa sinh viên</a></li>
			<li><a href="#tab-5" role="tab" data-toggle="tab"><i class="fa fa-pencil" aria-hidden="true"></i> Chỉnh sửa doanh nghiệp</a></li>
			<li><a href="#tab-6" role="tab" data-toggle="tab"><i class="fa fa-book" aria-hidden="true"></i> Chi tiết sinh viên</a></li>
			<li><a href="#tab-7" role="tab" data-toggle="tab"><i class="fa fa-book" aria-hidden="true"></i> Chi tiết doanh nghiệp</a></li>
		</ul>
		<div class="tab-content panel-body">
			<!--------------Danh sach sinh vien-------------->
			<div class="tab-pane active" role="tabpanel" id="tab-1">
				<div class="row">
					<div class="col-md-12">
						<form action="app/apiBenhNhan.php?mode=search" id="frmTimBenhNhan" method="post">
							<div class="input-group input-group form-group">
								<div class="input-group-addon"><span>User</span></div>
								<input class="form-control" type="text" name="txtHoten">
								<div class="input-group-btn">
									<button class="btn btn-xs btn-info btn-find" type="submit" id="btnTim"><strong>Tìm</strong><br></button>
								</div>
							</div>
						</form>
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table id="" class="table table-striped table-hover table-condensed">
								<thead>
									<tr class="bg-primary">
										<th>Số thứ tự</th>
										<th>Username</th>
										<th>Họ Tên</th>										
										<th>Deadline</th>										
										<th>Enable/Disable</th>
										<th>Thuộc Doanh Nghiệp</th>
										<th>Số lượng DN đăng ký</th>										
									</tr>
								</thead>
								<tbody id="tableSV">
									<tr data-toggle="popover">
										<td>001</td>
										<td>51101111</td>
										<td>Nguyễn Văn A</td>
										<td>28/05/2018</td>
										<td>Enable</td>
										<td>Chưa có</td>
										<td>3</td>																		
									</tr>
									<tr data-toggle="popover">
										<td>002</td>
										<td>51102222</td>
										<td>Nguyễn Văn B</td>
										<td>28/05/2018</td>
										<td>Disable</td>
										<td>FPT</td>
										<td>2</td>										
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!--------------End danh sach sinh vien------------>
			<!--------------danh sach doanh nghiep-------------->
			<div class="tab-pane" role="tabpanel" id="tab-2">
				<div class="row">
					<div class="col-md-12">
						<form action="/" id="frmTimBenhNhan" method="post">
							<div class="input-group input-group form-group">
								<div class="input-group-addon"><span>User</span></div>
								<input class="form-control" type="text" name="txtHoten">
								<div class="input-group-btn">
									<button class="btn btn-xs btn-info btn-find" type="submit" id="btnTim"><strong>Tìm</strong><br></button>
								</div>
							</div>
						</form>
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table id="" class="table table-striped table-hover table-condensed">
								<thead>
									<tr class="bg-primary">
										<th>Số thứ tự</th>
										<th>Username</th>
										<th>Doanh nghiệp</th>
										<th>Enable/Disable</th>										
										<th>Số lượng SV tối đa</th>
										<th>Số lượng SV đã nhận</th>
									</tr>
								</thead>
								<tbody id="tableDN">
									<tr data-toggle="popover2">
										<td>001</td>
										<td>vng001</td>
										<td>VNG</td>
										<td>Enable</td>
										<td>43</td>
										<td>10</td>
									</tr>
									<tr data-toggle="popover2">
										<td>002</td>
										<td>fpt001</td>
										<td>FPT</td>
										<td>Enable</td>
										<td>20</td>
										<td>19</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!--------------End_danh sach doanh nghiep------------>
			<!--------------Them User------------>
			<div class="tab-pane" role="tabpanel" id="tab-3" style="margin: 0 auto; max-width: 600px">
				
				<h3>Registration</h3>

				<form action="API.php" id="createAccount" method="post">
					<div class="form-group input-group col-md-12">
						<div class="input-group-addon" style="width: 90px;"><span>User</span></div>
						<input id="username" class="form-control" type="text" style=""/>
					</div>				
					
					<div class="form-group input-group col-md-12">
						<div class="input-group-addon" style="width: 90px;"><span>Loại User</span></div>
						<select name="type" id="userType" style="border-radius: 0 5px 5px 0; height: 35px;">
							<option value="student">Sinh viên</option>
							<option value="company">Doanh nghiệp</option>	
						</select>
					</div>

					<div class="form-group">
						<input class="" type="radio" name="enable" value="enable"><span style="padding-left: 10px">Enable</span>
						<input class="" type="radio" name="enable" value="disable" style="margin-left: 15px"><span style="padding-left: 10px">Disable</span>
					</div>

					<div class="form-group col-md-12">
						<p class="text-center"><button id="create" type="submit" class="btn btn-secondary radius-5"><i class="fa fa-plus" style="margin-right:10px; margin-left: -10px;"></i>Tạo mới</button></p>
					</div>
				</form>				
			</div>
		
			<!--------------End_Them_User------------>	
			<!--------------Sửa student------------>
			<div class="tab-pane" role="tabpanel" id="tab-4" style="margin: 0 auto; max-width: 600px">
				<h3>Hiệu chỉnh sinh viên</h3>

				<div class="form-group input-group col-md-12">
					<div class="input-group-addon" style="width: 90px;"><span>User</span></div>
					<input name="user_sv" class="form-control" type="text" style="" placeholder="" disabled>
				</div>				
											
				<div class="form-group input-group col-md-12">
					<div class="input-group-addon" style="width: 90px;"><span>Họ tên</span></div>
					<input name="ho_ten" class="form-control" id="" value="" type="text">
				</div>

				<div class="form-group input-group col-md-12">
					<div class="input-group-addon" style="width: 120px;"><span>Số lượng DN tối đa</span></div>
					<input name="sl_dn_doi_da" class="form-control" type="number" style="" min="0" max="100" required value="0" >
				</div>	
				
				<div class="form-group">
					<input class="" type="radio"  name="enable" value="enable"><span style="padding-left: 10px">Enable</span>
					<input class="" type="radio"  name="enable" value="disable" style="margin-left: 15px"><span style="padding-left: 10px">Disable</span>
				</div>

				<div class="form-group">Deadline ứng tuyển<input type="date" name="deadline_ung_tuyen" class="radius-5 ml-10" style="border: 1px solid gray;"></div>

				<div class="form-group">Deadline SV chọn doanh nghiệp <input type="date" name="deadline_chon_dn" class="radius-5 ml-10" style="border: 1px solid gray;"></div>

				<div class="form-group col-md-12">
					<p class="text-center"><button class="btn btn-primary radius-5">Lưu</button></p>
				</div>
			</div>
			<!--------------End sửa student------------>
			<!--------------Sửa doanh nghiệp------------>
			<div class="tab-pane" role="tabpanel" id="tab-5" style="margin: 0 auto; max-width: 600px">
				<h3>Hiệu chỉnh doanh nghiệp</h3>

				<div class="form-group input-group col-md-12">
					<div class="input-group-addon" style="width: 120px;"><span>User</span></div>
					<input name="user_dn" class="form-control" type="text" style="" placeholder="" disabled>
				</div>				
											
				<div class="form-group input-group col-md-12">
					<div class="input-group-addon" style="width: 120px;"><span>Doanh nghiệp</span></div>
					<input name="ten_dn" class="form-control" id="" value="" type="text">
				</div>

				<div class="form-group">
					<input class="" type="radio"  name="enable" value="enable"><span style="padding-left: 10px">Enable</span>
					<input class="" type="radio"  name="enable" value="disable" style="margin-left: 15px"><span style="padding-left: 10px">Disable</span>
				</div>

				<p>(*)Chọn hình ảnh logo</p>
				<p><input type="file" name="logo" accept="image/*" style="display: inline-block"></span></p>

				<div class="form-group input-group col-md-12">					
					<textarea rows="6" class="form-control" id="" style="border-radius:5px;">Giới thiệu doanh nghiệp</textarea>  
				</div>

				<div class="form-group input-group col-md-12">					
					<textarea rows="6" class="form-control" id="" style="border-radius:5px;">Thông tin liên lạc</textarea>  
				</div>

				<div class="form-group col-md-12">
					<p class="text-center"><button class="btn btn-primary radius-5">Save</button></p>
				</div>
			</div>
			<!--------------End sửa student------------>
			<!--------------Chi tiet sinh vien-------------->
			<div class="tab-pane" role="tabpanel" id="tab-6">
				<div class="infoDiv" style="background: #dedede;">
					<h3><span id="studentName">Nguyễn Văn A - </span><span id="studentID">51101111</span></h3>
				</div> 
				<h4>Danh sách doanh nghiệp sinh viên đã đăng ký</h4>				
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table id="" class="table table-striped table-hover table-condensed">
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
										<td>Chưa</td>																			
									</tr>
									<tr data-toggle="popover3">
										<td>002</td>
										<td>MangoAds</td>										
										<td>28/05/2018</td>
										<td>12/06/2018</td>
										<td>Chưa</td>
										<td>Chưa</td>																			
									</tr>
									<tr data-toggle="popover3">
										<td>003</td>
										<td>VNG</td>										
										<td>29/05/2018</td>
										<td>12/06/2018</td>
										<td>Rồi</td>
										<td>Chưa</td>																			
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!--------------End chi tiet sinh vien------------>
			<!--------------Chi tiet doanh nghiep-------------->
			<div class="tab-pane" role="tabpanel" id="tab-7">
				<div class="infoDiv" style="background: #dedede;">
					<h3><span id="companyName">FPT</span></h3>
				</div> 
				<h4>Danh sách sinh viên ứng tuyển</h4>

				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table id="" class="table table-striped table-hover table-condensed">
								<thead>
									<tr class="bg-primary">
										<th>Số thứ tự</th>
										<th>Mã số sinh viên</th>
										<th>Họ Tên</th>
										<th>Doanh nghiệp chấp nhận?</th>
										<th>Sinh viên chấp nhận?									
									</tr>
								</thead>
								<tbody id="tableChiTietDN">
									<tr data-toggle="popover">
										<td>001</td>
										<td>51101111</td>
										<td>Nguyễn Văn A</td>
										<td>Chưa</td>
										<td>Chưa</td>																	
									</tr>
									<tr data-toggle="popover">
										<td>002</td>
										<td>51102222</td>
										<td>Nguyễn Văn B</td>
										<td>Rồi</td>
										<td>Rồi</td>																	
									</tr>
									<tr data-toggle="popover">
										<td>003</td>
										<td>51103333</td>
										<td>Nguyễn Văn C</td>
										<td>Rồi</td>
										<td>Chưa</td>																	
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!--------------End chi tiet doanh nghiep------------>						
		</div>
	</div>
	<!--------------EndHorizontalTabPanel-------------->	
	<?php include 'scripts.php' ?>
</body>
</html>