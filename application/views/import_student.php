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
								<div class="row clearfix">
									<div class="col-xs-12 col-sm-6">
										<h2> รายชื่อนิสิตผู้ช่วยสอนปีการศึกษา <?=($semester != null) ? $currentSemester->Semester_Year : "" ?> ภาคเรียนที่ <?=($semester != null) ? $currentSemester->Semester_Name : "" ?></h2>
									</div>
								</div>
							</div>
							<div class="body">
								<div class="col-lg-6">
									<div class="form-group">
										<div class="form-line">
											<select name="subject" class="form-control show-tick">
												<option value="">รายวิชา</option>
												<?php foreach ($subject as $x) { ?>
												<option value="<?=$x->Subject_id?>">
													<?=$x->Subject_id.' '.$x->Subject_name?>
												</option>
												<?php } ?>
											</select>
										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<div class="form-line">
											<select class="form-control show-tick" name="Semester_ID">
												<option value="">ปีการศึกษา</option>
												<?php foreach ($semester as $x) {
													if($Semester_ID == $x->Semester_ID){
														echo '<option selected value="'.$x->Semester_ID.'">ปี '.$x->Semester_Year.' ภาค '. $x->Semester_Name.'</option>';
													}
													else{
														echo '<option value="'.$x->Semester_ID.'">ปี '.$x->Semester_Year.' ภาค '. $x->Semester_Name.'</option>';
													}
												} ?>
											</select>
										</div>
									</div>
								</div>
								<div class="body table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th>รหัสนิสิต</th>
												<th>ชื่อ-นามสกุล</th>
												<th>เกรด</th>
												<th>รายละเอียด</th>
											</tr>
										</thead>
										<tbody id="tbody">
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" style="display: none;">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="nameLabel"></h4>
				</div>
				<div class="modal-body">
					<div class="row clearfix">
						<div class="col-lg-5">
							<label for="">อีเมลล์</label>
						</div>
						<div class="col-lg-7">
							<div class="form-group">
								<div id="emailLabel"></div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-5">
							<label for="">เบอร์โทรศัพท์</label>
						</div>
						<div class="col-lg-7">
							<div class="form-group">
								<div id="telLabel"></div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-5">
							<label for="">ระดับการศึกษา</label>
						</div>
						<div class="col-lg-7">
							<div class="form-group">
								<div id="degreeLabel"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Jquery Core Js -->
	<script src="<?php echo base_url() ?>/plugins/jquery/jquery.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function (e) {

			$("#tbody").on("click", ".btn-detail", function () {

				studentID = $.trim($('td:nth-child(1)', $(this).parents('tr')).text());

				$.ajax({
					type: "GET",
					url: "<?php echo base_url() ?>index.php/ImportStudent/getStudentInfo/" + $('select[name=subject]').val() + "/" + $(
						'select[name=Semester_ID]').val() + "/" + studentID,
					success: function (response) {
						var data = jQuery.parseJSON(response);
						console.log(data);
						$("#nameLabel").text(data.Student_firstname + " " + data.Student_lastname);
						$("#emailLabel").text(data.Student_email);
						$("#telLabel").text(data.Student_tel);
						$("#degreeLabel").text(data.Degree);
					}
				});
			});

			var LoadData = function () {
				var subject_id = $('select[name=subject]').val();
				var semester_id = $('select[name=Semester_ID]').val();
				$.post("<?=base_url()?>index.php/ImportStudent/Students", {
					subject_id: subject_id,
					semester_id: semester_id
				}, function (data) {
					data = JSON.parse(data);
					var html = '';
					for (var i in data) {
						html +=
							'<tr>' +
							'<td>' + data[i].Student_id + '</td>' +
							'<td>' + data[i].Student_firstname + ' ' + data[i].Student_lastname + '</td>' +
							'<td>' + data[i].Grade + '</td>' +
							'<td><button type="button" id="' + data[i].Student_id +
							'" class="btn bg-teal btn-detail waves-effect m-r-20" data-toggle="modal" data-target="#detailModal">เพิ่มเติม</button></td>' +
							'</tr>';
					}
					$('#tbody').html(html);
				});
			};

			$('select[name=subject]').change(function () {
				if ($("select[name=Semester_ID]").val() != "") {
					LoadData();
				}
			});

			$('select[name=Semester_ID]').change(function () {
				if ($("select[name=subject]").val() != "") {
					LoadData();
				}
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
