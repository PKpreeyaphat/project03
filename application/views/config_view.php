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

	<!-- Sweet Alert Css -->
	<link href="<?php echo base_url() ?>/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

	<!-- Custom Css -->
	<link href="<?php echo base_url() ?>/css/style.css" rel="stylesheet">

	<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
	<link href="<?php echo base_url() ?>/css/themes/all-themes.css" rel="stylesheet" />
	<style>
	body{
		overflow: auto!important;
	}
	</style>
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
					<div class="col-lg-12">
						<div class="card">
							<div class="header">
								<h2>
									ตั้งค่า
								</h2>
							</div>
							<div class="body">
								<form action="" method="">
									<div class="row clearfix">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="col-xs-12">
												<!-- Nav tabs -->
												<ul class="nav nav-tabs tab-nav-right" role="tablist">
													<li role="presentation" class="active">
														<a href="#home_animation_2" data-toggle="tab">ตั้งค่าระบบ</a>
													</li>
													<li role="presentation">
														<a href="#settings_animation_2" data-toggle="tab">รายชื่อนิสิต</a>
													</li>
													<li role="presentation">
														<a href="#settings_animation_3" data-toggle="tab">ปีการศึกษา</a>
													</li>
													<li role="presentation">
														<a href="#settings_animation_4" data-toggle="tab">ตั้งค่าเอกสาร</a>
													</li>
												</ul>

												<!-- Tab panes -->
												<div class="tab-content">
													<div role="tabpanel" class="tab-pane fade in active" id="home_animation_2">
														<div class="col-lg-4">
															<div class="form-group">
																<label>
																	<b>ปีการศึกษา :</b>
																</label>
															</div>
														</div>
														<div class="col-lg-8">
															<div class="form-group">
																<div class="form-line">
																	<select class="form-control show-tick" name="semester">
																		<?php
                                                                    foreach($allsemester as $row){
                                                                        if($semester != null && $semester->Semester_ID == $row->Semester_ID){
                                                                            echo '<option selected value="'.$row->Semester_ID.'">ปี '.$row->Semester_Year.' ภาค '.$row->Semester_Name.'</option>';
                                                                        }
                                                                        else{
                                                                            echo '<option value="'.$row->Semester_ID.'">ปี '.$row->Semester_Year.' ภาค '.$row->Semester_Name.'</option>';
                                                                        }
                                                                    }
                                                                ?>
																	</select>
																</div>
															</div>
														</div>
														<div class="col-lg-4">
															<div class="form-group">
																<label>
																	<b>จำนวนชั่วโมงการทำงาน :</b>
																</label>
															</div>
														</div>
														<div class="col-lg-8">
															<div class="form-group">
																<div class="form-line">
																	<input value="<?=(isset($maxhour))? $maxhour->Config_value : 0 ?>" class="form-control" min="0" type="number" name="txtMaxhour">
																</div>
															</div>
														</div>
														<div class="col-lg-8">
															<div class="switch">
																<label>
																	<b>เปิด-ปิดรับสมัคร :</b>
																</label>
																<label>
																	<input 
																	<?php 
																		if($semester != null) {
																			echo ($semester->isOpen == 1) ? 'checked': '';
																		}
																		?> name="isopen" type="checkbox">
																	<span class="lever switch-col-green">
																	</span>
																</label>
															</div>
														</div>
														<div class="form-group">
															<div class="col-lg-12 align-right">
																<button name="btnSave" type="button" class="btn btn-success m-t-15 waves-effect">ตกลง</button>
																<button name="btnReset" type="button" class="btn btn-danger m-t-15 waves-effect">ยกเลิก</button>
															</div>
														</div>
													</div>
													<div role="tabpanel" class="tab-pane fade" id="settings_animation_2">
														<div class="col-xs-12 col-sm-6">
															<button type="button" class="btn btn-success waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">นำเข้ารายชื่อนิสิต</button>
														</div>
													</div>
													<div role="tabpanel" class="tab-pane fade" id="settings_animation_3">
														<div class="col-xs-12 col-sm-6">
															<form action="<?php echo base_url();?>index.php/Config/insertSemester" method="post">
																<div class="form-group">
																	<div class="form-line">
																		<select type="date" id="" name="Semester_Name" class="form-control" placeholder="ชื่อภาคเรียน" required>
																			<option value="1">1</option>
																			<option value="2">2</option>
																			<option value="ฤดูร้อน">ฤดูร้อน</option>
																		</select>
																	</div>
																</div>
																<div class="form-group">
																	<div class="form-line">
																		<input type="number" id="" name="Semester_Year" class="form-control" placeholder="ปีการศึกษา" maxlength="4" required>
																	</div>
																</div>
																<div class="form-group">
																	<div class="form-line">
																		<input type="date" id="" name="Semester_Start" class="form-control" placeholder="วันเปิดภาคเรียน" required>
																	</div>
																</div>
																<div class="form-group">
																	<div class="form-line">
																		<input type="date" id="" name="Semester_Stop" class="form-control" placeholder="วันปิดภาคเรียน" required>
																	</div>
																</div>
																<button type="button" name="btnsave_semester" class="btn btn-success m-t-15 waves-effect">บันทึก</button>
															</form>
														</div>
													</div>
													<div role="tabpanel" class="tab-pane fade" id="settings_animation_4">
														<br>
														<div class="row">
															<div class="col-lg-4">
																<div class="form-group">
																	<label>
																		<b>คณบดี :</b>
																	</label>
																</div>
															</div>
															<div class="col-lg-8">
																<div class="form-group">
																	<div class="form-line">
																		<input value="<?=(isset($president))? $president->Config_value : 0 ?>" class="form-control" type="text" name="president">
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-4">
																<div class="form-group">
																	<label>
																		<b>รองคณบดี :</b>
																	</label>
																</div>
															</div>
															<div class="col-lg-8">
																<div class="form-group">
																	<div class="form-line">
																		<input value="<?=(isset($vice_president))? $vice_president->Config_value : 0 ?>" class="form-control" type="text" name="vice_president">
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-4">
																<div class="form-group">
																	<label>
																		<b>ค่าชั่วโมง ป.ตรี :</b>
																	</label>
																</div>
															</div>
															<div class="col-lg-8">
																<div class="form-group">
																	<div class="form-line">
																		<input value="<?=(isset($labor1))? $labor1->Config_value : 0 ?>" class="form-control" type="text" name="labor1">
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-4">
																<div class="form-group">
																	<label>
																		<b>ค่าชั่วโมง ป.โท :</b>
																	</label>
																</div>
															</div>
															<div class="col-lg-8">
																<div class="form-group">
																	<div class="form-line">
																		<input value="<?=(isset($labor2))? $labor2->Config_value : 0 ?>" class="form-control" type="text" name="labor2">
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-4">
																<div class="form-group">
																	<label>
																		<b>จำนวนชม. :</b>
																	</label>
																</div>
															</div>
															<div class="col-lg-8">
																<div class="form-group">
																	<div class="form-line">
																		<input value="<?=(isset($hourlabor))? $hourlabor->Config_value : 0 ?>" class="form-control" type="text" name="hourlabor">
																	</div>
																</div>
															</div>
														</div>
														<div class="col-xs-12 col-sm-6">
															<button type="button" name="btnsave_configdoc" class="btn btn-success m-t-15 waves-effect">บันทึก</button>
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
			</div>
		</section>
	</div>

	<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" style="display: none;">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="defaultModalLabel">นำเข้ารายชื่อนิสิต</h4>
				</div>
				<div class="modal-body">
					<input type="file" id="file" name="file" class="form-control" placeholder="">
					<p id="msg"></p>
					<hr>
					<div class="form-group">
						<h5>ตัวอย่างไฟล์</h5>
						<h6>**ต้องใช้ CSV UTF-8 (Comma delimited)(*.csv) เป็นนามสกุลไฟล์</h6>
						<div class="images">
							<img src="<?php echo base_url() ?>/images/student.PNG" width="70%" hight="" alt="subject" />
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" id="upload" class="btn btn-success waves-effect">UPLOAD</button>
					<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" style="display: none; overflow:scroll;">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="defaultModalLabel">ยืนยันการนำเข้านำเข้ารายชื่อนิสิต</h4>
				</div>
				<form action="<?php echo base_url() ?>/index.php/Config/confirmData" method="post">
					<div class="modal-body">
						<table class="table">
							<thead>
								<tr>
									<th>รหัสนิสิต</th>
									<th>ชื่อ-นามสกุล</th>
									<!-- <th>เกรด</th> -->
								</tr>
							</thead>
							<tbody id="confirmData">

							</tbody>
						</table>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success waves-effect">CONFIRM</button>
						<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
					</div>
				</form>
			</div>
		</div>
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

	<!-- Sweet Alert Plugin Js -->
	<script src="<?php echo base_url() ?>/plugins/sweetalert/sweetalert.min.js"></script>

	<!-- ThaiBath Js -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function (e) {
			$("body").css("overflow", "hidden")

			$('button[name=btnsave_configdoc]').click(function () {
				var data = {
					vice_president: $('input[name=vice_president]').val(),
					president: $('input[name=president]').val(),
					labor1: $('input[name=labor1]').val(),
					labor2: $('input[name=labor2]').val(),
					hourlabor: $('input[name=hourlabor]').val(),
				}
				$.post('<?php echo base_url();?>index.php/Config/saveConfigDoc', {
					data: data
				}, function (res) {
					swal("บันทึกสำเร็จ!", "บันทึกตั้งค่าเอกสารเรียบร้อย", "success");
				})
			})

			$('button[name=btnsave_semester]').click(function () {
				var iserror = false
				$('.error.focused').removeClass('error focused')
				if (!$('input[name=Semester_Year]').val()) {
					var form_line = $('input[name=Semester_Year]').closest('.form-line');
					$(form_line).addClass('error focused')
					iserror = true
				}
				if (!$('input[name=Semester_Start]').val()) {
					var form_line = $('input[name=Semester_Start]').closest('.form-line');
					$(form_line).addClass('error focused')
					iserror = true
				}
				if (!$('input[name=Semester_Stop]').val()) {
					var form_line = $('input[name=Semester_Stop]').closest('.form-line');
					$(form_line).addClass('error focused')
					iserror = true
				}
				if (iserror) {
					return
				}
				$.post('<?php echo base_url();?>index.php/Config/insertSemester', {
					Semester_Name: $('select[name=Semester_Name]').val(),
					Semester_Year: $('input[name=Semester_Year]').val(),
					Semester_Start: $('input[name=Semester_Start]').val(),
					Semester_Stop: $('input[name=Semester_Stop]').val()
				}, function (res) {
					swal({
							title: "บันทึกสำเร็จ!",
							text: "บันทึกปีการศึกษาเรียบร้อย",
							type: "success"
						},
						function () {
							window.location.href = '<?php echo base_url();?>index.php/Config/';
						});

				})
			})

			$('#upload').on('click', function (e) {
				var file_data = $('#file').prop('files')[0];
				var form_data = new FormData();
				form_data.append('file', file_data);

				$.ajax({
					url: '<?php echo base_url() ?>/index.php/Config/upload_file', // point to server-side controller method
					dataType: 'json', // what to expect back from the server
					cache: false,
					contentType: false,
					processData: false,
					data: form_data,
					type: 'post',
					success: function (res) {
						EMPTY_FILE = 0;
						UPLOAD_FAIL = 1;
						UPLOAD_SUCCESS = 2;

						switch (res.status) {
							case EMPTY_FILE:
								alert(res.msg);
								break;

							case UPLOAD_FAIL:
								alert(res.msg);
								$('#file').val('');
								break;

							case UPLOAD_SUCCESS:
								alert(res.msg);
								$('#defaultModal').modal('toggle');

								$('#file').val('');

								var table = "";
								res.data.forEach(x => {
									table += "<tr><td>" + x.ID + "</td><td>" + x.name + "</td></tr>";
								});

								$('#confirmData').html(table);
								$('#confirmModal').modal('show');
								break;
						}
					}
				});
			});
		});

	</script>

	<!-- Bootstrap Core Js -->
	<script src="<?php echo base_url() ?>/plugins/bootstrap/js/bootstrap.js"></script>

	<!-- Select Plugin Js -->
	<script src="<?php echo base_url() ?>/plugins/bootstrap-select/js/bootstrap-select.js"></script>

	<!-- Slimscroll Plugin Js -->
	<script src="<?php echo base_url() ?>/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

	<!-- Waves Effect Plugin Js -->
	<script src="<?php echo base_url() ?>/plugins/node-waves/waves.js"></script>

	<!-- Sweet Alert Plugin Js -->
	<script src="<?php echo base_url() ?>/plugins/sweetalert/sweetalert.min.js"></script>

	<!-- ThaiBath Js -->
	<script src="<?php echo base_url() ?>/js/thaibath.js"></script>

	<script>
		$(function () {
			var isOpen = false;
			$('button[name=btnSave]').click(function () {
				var isopen = $('input[name=isopen]').prop('checked')
				$.get("<?=base_url()?>index.php/Config/OpenRegister", {
					maxHour: $('input[name=txtMaxhour]').val(),
					Semester_ID: $('select[name=semester]').val(),
					isOpen: (isopen) ? 1 : 0
				}, function (data) {
					console.log(data);
					isOpen = isopen;
					if (isopen) {
						swal("บันทึกสำเร็จ!", "เปิดรับสมัคร เรียบร้อย", "success");
					} else {
						swal("บันทึกสำเร็จ!", "ปิดรับสมัคร เรียบร้อย", "success");
					}
				});
			})

			$('button[name=btnReset]').click(function () {
				$('input[name=isopen]').prop('checked', isOpen);
			})
		})

	</script>

	<!-- Custom Js -->
	<script src="<?php echo base_url() ?>/js/admin.js"></script>

	<!-- Demo Js -->
	<script src="<?php echo base_url() ?>/js/demo.js"></script>
</body>

</html>
