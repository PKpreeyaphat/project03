<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>ระบบจัดการนิสิตผู้ช่วยสอน</title>

	<!-- Favicon-->
	<link rel="icon" href="<?php echo base_url() ?>/favicon.ico" type="image/x-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

	<!-- Bootstrap Core Css -->
	<link href="<?php echo base_url() ?>/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

	<!-- Waves Effect Css -->
	<link href="<?php echo base_url() ?>/plugins/node-waves/waves.css" rel="stylesheet" />

	<!-- Animation Css -->
	<link href="<?php echo base_url() ?>/plugins/animate-css/animate.css" rel="stylesheet" />

	<!-- Custom Css -->
	<link href="<?php echo base_url() ?>/css/style.css" rel="stylesheet">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

	<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
	<link href="<?php echo base_url() ?>/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-maroon">
	<!-- Page Loader -->
	<div class="wrapper">
		<?php require_once 'header.php'?>
		<?php require_once 'sidebar_admin.php'?>
	</div>
	<!-- #END# Page Loader -->
	<div class="content-wrapper">
		<section class="content">
			<div class="container-fluid">
				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="card">
							<div class="header">
								<h2>
									รายละเอียดรายวิชา
								</h2>
							</div>
							<div class="body">
								<form action="DetailData/save" method="post">
									<div class="row clearfix">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="form-group">
												<div class="form-line">
													<select class="form-control show-tick" name="Subject_id">
														<?php foreach ($subject as $x) { ?>
														<option value="<?php echo $x->Subject_id ?>"><?php echo $x->Subject_id." : ". $x->Subject_name ?></option>
														<?php } ?>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="form-line">
											<input type="text" id="" name="Section_name" class="form-control" placeholder="ชื่อรอง">
										</div>
									</div>
									<div class="form-group">
										<div class="form-line">
											<input type="text" id="" name="Section_id" class="form-control" placeholder="กลุ่ม">
										</div>
									</div>
									<div class="form-group">
										<div class="form-line">
											<select class="form-control show-tick" name="Semester_ID">
												<?php foreach ($semester as $x) {
													echo '<option value="'.$x->Semester_ID.'">ปี '.$x->Semester_Year." ภาค ". $x->Semester_Name.'</option>';
												} ?> 
											</select>
										</div>
									</div>
									<div class="row clearfix">
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
											<div class="form-group">
												<div class="form-line">
													<select class="form-control show-tick" name="Section_day">
														<option value="MO">วันจันทร์</option>
														<option value="TU">วันอังคาร</option>
														<option value="WED">วันพุธ</option>
														<option value="THU">วันพฤหัสบดี</option>
														<option value="FRI">วันศุกร์</option>
														<option value="SAT">วันเสาร์</option>
														<option value="SUN">วันอาทิตย์</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
											<div class="form-group">
												<div class="form-line">
													<select class="form-control show-tick" name="Section_time">
														<option value="08:00-09:50">08:00-09:50</option>
														<option value="10:00-11:50">10:00-11:50</option>
														<option value="13:00-14:50">13:00-14:50</option>
														<option value="15:00-16:50">15:00-16:50</option>
														<option value="17:00-18:50">17:00-18:50</option>
														<option value="19:00-20:50">19:00-20:50</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="form-line">
										<select class="form-control show-tick" name="Room_id">
										<?php
										foreach($room as $row){
											echo '<option value="'.$row->Room_id.'">'.$row->Room_name.'</option>';
										}
										?>
										</select>
										</div>
									</diV>
									<div class="form-group">
										<div class="form-line">
											<input type="number" min="0" id="" name="Section_student_quantity" class="form-control" placeholder="จำนวนนิสิต">
										</div>
									</div>
									<div class="form-group">
										<div class="form-line">
											<input type="text" id="" name="Teacher_fullname" class="form-control" placeholder="อ.ผู้สอน/ผู้ประสานงาน">
										</div>
									</div>
									<button type="submit" class="btn btn-success m-t-15 waves-effect">ตกลง</button>
									<button type="reset" class="btn btn-danger m-t-15 waves-effect">ยกเลิก</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- Jquery Core Js -->
	<script src="<?php echo base_url() ?>/plugins/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core Js -->
	<script src="<?php echo base_url() ?>/plugins/bootstrap/js/bootstrap.js"></script>

	<!-- Select Plugin Js -->
	<script src="<?php echo base_url() ?>/plugins/bootstrap-select/js/bootstrap-select.js"></script>

	<!-- Slimscroll Plugin Js -->
	<script src="<?php echo base_url() ?>/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

	<!-- Waves Effect Plugin Js -->
	<script src="<?php echo base_url() ?>/plugins/node-waves/waves.js"></script>

	<!-- Custom Js -->
	<script src="<?php echo base_url() ?>/js/admin.js"></script>

	<!-- Demo Js -->
	<script src="<?php echo base_url() ?>/js/demo.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

	<!-- (Optional) Latest compiled and minified JavaScript translation files -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>

</body>

</html>
