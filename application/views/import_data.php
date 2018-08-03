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
										<h2>รายวิชาทั้งหมด</h2>
									</div>
									<div class="col-xs-12 col-sm-6 align-right">
										<a href="<?php echo base_url(); ?>index.php/DetailData">
											<button type="button" class="btn btn-success waves-effect m-r-20">เพิ่มรายละเอียดรายวิชา</button>
										</a>
									</div>
								</div>
							</div>
							<div class="body">

								<div class="col-lg-6">
									<div class="form-group">

										<label>ดูข้อมูลย้อนหลัง</label>

									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<div class="form-line">
											<select class="form-control show-tick" name="Semester_ID">
												<option disabled>ปีการศึกษา</option>
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
												<th style="width: 40%">ชื่อรายวิชา</th>
												<th>กลุ่ม</th>
												<th>วัน</th>
												<th>เวลาเรียน</th>
												<th>ห้อง</th>
												<th>รายละเอียด</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($section as $row) { ?>
											<tr>
												<td>
													<?php echo $row->Section_name ?>
												</td>
												<td>
													<?php echo $row->Section_id ?>
												</td>
												<td>
													<?php echo $row->Section_day ?>
												</td>
												<td>
													<?php echo $row->Section_start_time."-".$row->Section_end_time ?>
												</td>
												<td>
													<?php echo $row->Room_name ?>
												</td>
												<td>
													<button type="button" id="<?php echo $row->Section_id ?>" class="btn bg-teal btn-detail waves-effect m-r-20" data-toggle="modal" data-target="#detailModal">เพิ่มเติม</button>
												</td>
											</tr>
											<?php } ?>
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

	<div class="modal fade" id="import_subject" tabindex="-1" role="dialog" style="display: none;">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="defaultModalLabel">นำเข้ารายวิชา</h4>
				</div>
				<?php echo form_open_multipart('ImportData/uploadFile'); ?>
				<div class="modal-body">
					<input type="file" id="" name="excel_file" class="form-control" placeholder="">
					<hr>
					<div class="form-group">
						<h5>ตัวอย่างไฟล์</h5>
						<h6>**ต้องใช้ CSV UTF-8 (Comma delimited)(*.csv) เป็นนามสกุลไฟล์</h6>
						<div class="images">
							<img src="<?php echo base_url() ?>/images/subject.PNG" width="100%" hight="" alt="subject" />
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success waves-effect">UPLOAD</button>
					<button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
				</div>
				</form>
			</div>
		</div>
	</div>

	<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" style="display: none;">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="sectionIDLabel"></h4>
				</div>
				<div class="modal-body">
					<div class="row clearfix">
						<div class="col-lg-5">
							<label for="">อาจารย์ผู้สอน/ผู้ประสานงาน</label>
						</div>
						<div class="col-lg-7">
							<div class="form-group">
								<div id="teacherLabel"></div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-lg-5">
							<label for="">จำนวนนิสิต</label>
						</div>
						<div class="col-lg-7">
							<div class="form-group">
								<div id="quantityStudentLabel"></div>
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

	</div>

	<!-- Jquery Core Js -->
	<script src="<?php echo base_url() ?>/plugins/jquery/jquery.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function (e) {
			$('.btn-detail').click(function (e) {
				e.preventDefault();

				sectionID = $.trim($('td:nth-child(2)', $(this).parents('tr')).text());

				$.ajax({
				type: "GET",
				url: "<?php echo base_url() ?>index.php/ImportData/getSectionInfo/" + sectionID,
				success: function (response) {
					var data = jQuery.parseJSON(response);
					console.log(data)
					$("#sectionIDLabel").text("กลุ่มเรียน " + sectionID);
					$("#teacherLabel").text(data.Teacher_fullname);
					$("#quantityStudentLabel").text(data.Section_student_quantity);
				}
				});
			});

			$('select[name=Semester_ID]').change(function(){
				window.location.href =   "<?php echo base_url() ?>index.php/ImportData/index/<?=$Subject_id?>/" + $(this).val()
			})

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
