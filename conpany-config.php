<!DOCTYPE html>
<html ⚡ lang="en">

<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
  	<meta content="IE=Edge" http-equiv="X-UA-Compatible">
  	<title>BK Intern management system - Company config</title>
  	<?php include 'reference.php' ?>
</head>

<body class="own-style own-margin">
	<?php include 'header.php' ?>

	
	<!--------------HorizontalTabPanel-------------->
	<div class="panel with-nav-tabs panel-info">
		<a href="#" class="nav-tabs-dropdown btn btn-block btn-success">Tabs</a>
		<ul class="nav nav-tabs nav-tabs-horizontal panel-heading text-center" id="nav-tabs-wrapper">
			<li class="active"><a href="#tab-1" role="tab" data-toggle="tab"><i class="fa fa-pencil" aria-hidden="true"></i> Chỉnh sửa doanh nghiệp</a></li>
			<li><a href="#tab-2" role="tab" data-toggle="tab"><i class="fa fa-user" aria-hidden="true"></i> Danh sách sinh viên ứng tuyển</a></li>			
		</ul>
		<div class="tab-content panel-body">
			<!--------------Sửa doanh nghiệp------------>
			<div class="tab-pane active" role="tabpanel" id="tab-1" style="margin: 0 auto; max-width: 600px">
				<h3>Hiệu chỉnh thông tin doanh nghiệp</h3>

				<div class="form-group input-group col-md-12">
					<div class="input-group-addon" style="width: 120px;"><span>Số lượng SV tối đa</span></div>
					<input class="form-control" type="number" style="" min="0" max="100" required value="0">
				</div>	

				<div class="form-group">Deadline ứng tuyển<input type="date" name="deadline1" class="radius-5 ml-10" style="border: 1px solid gray;"></div>

				<div class="form-group">Deadline chọn doanh nghiệp <input type="date" name="deadline2" class="radius-5 ml-10" style="border: 1px solid gray;"></div>														
								
				<div class="form-group input-group col-md-12">					
					<textarea rows="6" class="form-control" id="" style="border-radius:5px;">Giới thiệu doanh nghiệp</textarea>  
				</div>

				<div class="form-group input-group col-md-12">					
					<textarea rows="6" class="form-control" id="" style="border-radius:5px;">Thông tin liên lạc</textarea>  
				</div>

				<p>(*)Chọn hình ảnh logo</p>
				<p><input type="file" name="logo" accept="image/*" style="display: inline-block"></span></p>

				<div class="form-group col-md-12 mt-20">
					<p class="text-center"><button type="submit" class="btn btn-primary radius-5">Lưu</button></p>
				</div>
			</div>
			<!--------------End sửa doanh nghiep------------>			
			<!--------------Danh sach sinh vien ứng tuyển -------------->
			<div class="tab-pane" role="tabpanel" id="tab-2">				
				<h3>Danh sách sinh viên ứng tuyển</h3>

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
										<th>download CV</th>									
									</tr>
								</thead>
								<tbody id="tableChiTietDN">
									<tr data-toggle="popover">
										<td>001</td>
										<td>51101111</td>
										<td>Nguyễn Văn A</td>
										<td>
											<select>
												<option>Rồi</option>
												<option>Chưa</option>
											</select>
										</td>
										<td>Chưa</td>
										<td><button class="btn btn-download btn-info radius-5">download</button></td>														
									</tr>
									<tr data-toggle="popover">
										<td>002</td>
										<td>51102222</td>
										<td>Nguyễn Văn B</td>
										<td>
											<select>
													<option>Rồi</option>
													<option>Chưa</option>
											</select>											
										</td>
										<td>Chưa</td>
										<td><button class="btn btn-download btn-info radius-5">download</button></td>														
									</tr>
									<tr data-toggle="popover">
										<td>003</td>
										<td>51103333</td>
										<td>Nguyễn Văn C</td>
										<td>
											<select>
												<option>Rồi</option>
												<option>Chưa</option>
											</select>
										</td>
										<td>Chưa</td>
										<td><button class="btn btn-download btn-info radius-5">Download</button></td>														
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="form-group col-md-12">
					<p class=""><button class="btn btn-primary radius-5" style="float: left">Lưu</button><span><button class="btn btn-secondary radius-5" style="float: right"> Phản hồi về trường</button></span></p>
				</div>
			</div>
			<!--------------End danh sách sinh viên------------>			
						
		</div>
	</div>
	<!--------------EndHorizontalTabPanel-------------->
	<?php include 'footer.php' ?>	
	<?php include 'scripts.php' ?>
</body>
</html>