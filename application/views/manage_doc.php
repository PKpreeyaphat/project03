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

	<style name="print">
		@import url('<?=base_url()?>/system/fonts/thsarabunnew.css');

		.center {
			text-align: center;
		}

		.right {
			text-align: right;
		}

		.table-doc {
			width: 100%;
		}
		@page { 
				margin-top: 1.5cm;
				margin-right: 1.5cm;
				margin-bottom: 1.5cm;
				margin-left: 2.2cm;
			}

		@media print {
			.center {
				text-align: center;
			}

			@page { 
				margin-top: 1.5cm;
				margin-right: 1.5cm;
				margin-bottom: 1.5cm;
				margin-left: 2.2cm;
			}

			body {
				font-family: 'THSarabunNew', sans-serif;
				font-size: 0.95em;
				line-height: 1.7em;
				background: #e1e1e1;
			}

			table {
				border-spacing: 0;
				border-collapse: collapse;
				font-size: 14px !important;
			}

			h1,
			h2,
			h3,
			h4,
			h5 {
				line-height: 2em;
				clear: both;
			}

			h2 {
				background: #0F7AC2;
				padding: 0 10px;
				color: #FFF;
				margin: 20px 0 10px;
			}

			p {
				padding: 0 0 10px 0;
			}

			.n {
				font-weight: normal;
				font-style: normal;
			}

			.b {
				font-weight: bold;
				font-style: normal;
			}

			.i {
				font-weight: normal;
				font-style: italic;
			}

			.bi {
				font-weight: bold;
				font-style: italic;
			}

			ul,
			ol {
				padding: 0 0 10px 0;
			}

			li {
				margin: 0 0 0 2em;
				padding: 0 0 5px 0;
			}

			code {
				background: #FFF;
			}

			#container {
				width: 900px;
				margin: 20px auto 0;
				border: 1px solid #333;
				padding: 20px;
				background: #FFF;
			}

			#instruction {
				padding: 10px 10px 0;
				background: #e6e6e6;
			}

			#footer {
				width: 940px;
				margin: 0 auto;
				padding: 10px 0 20px;
			}

			.right {
				text-align: right;
			}

			.type {
				font-family: 'THSarabunNew', sans-serif;
				height: 5em;
				width: 98%;
				font-size: 1em;
				clear: both;
				margin: 20px auto 10px;
				padding: 5px 1%;
			}

			body {
				-webkit-print-color-adjust: exact !important;
			}

			.table tbody tr th {
				background-color: #A0A0A0 !important;
				color: white !important;
			}

			.table .white {
				color: white !important;
			}

			.table>caption+thead>tr:first-child>th,
			.table>colgroup+thead>tr:first-child>th,
			.table>thead:first-child>tr:first-child>th,
			.table>caption+thead>tr:first-child>td,
			.table>colgroup+thead>tr:first-child>td,
			.table>thead:first-child>tr:first-child>td {
				border-top: 0;
			}

			.table-bordered>thead>tr>th,
			.table-bordered>tbody>tr>th,
			.table-bordered>tfoot>tr>th,
			.table-bordered>thead>tr>td,
			.table-bordered>tbody>tr>td,
			.table-bordered>tfoot>tr>td {
				border: 1px solid #ddd;
			}

			.table-bordered {
				border: 1px solid #ddd;
			}

			.table {
				width: 100%;
				max-width: 100%;
				margin-bottom: 20px;
			}

			.learn {
				background-color: #C0D0FF !important;
			}

			.white {
				color: white !important;
			}
		}

		.table-doc>tbody>tr>td {
			padding-left: 10px !important;
			padding-right: 10px !important;
		}

		.font-sarabun {
			font-family: "THSarabunNew";
		}

		body {
			-webkit-print-color-adjust: exact;
		}

		.white {
			color: white !important;
		}

		table {
			font-size: 14px;
		}

		table>tr>th {
			text-align: center;
		}

		table.dataTable tbody>tr.selected,
		table.dataTable tbody>tr>.selected {
			background-color: #B0BED9
		}

		table.dataTable.stripe tbody>tr.odd.selected,
		table.dataTable.stripe tbody>tr.odd>.selected,
		table.dataTable.display tbody>tr.odd.selected,
		table.dataTable.display tbody>tr.odd>.selected {
			background-color: #acbad4
		}

		table.dataTable.hover tbody>tr.selected:hover,
		table.dataTable.hover tbody>tr>.selected:hover,
		table.dataTable.display tbody>tr.selected:hover,
		table.dataTable.display tbody>tr>.selected:hover {
			background-color: #aab7d1
		}

		table.dataTable.order-column tbody>tr.selected>.sorting_1,
		table.dataTable.order-column tbody>tr.selected>.sorting_2,
		table.dataTable.order-column tbody>tr.selected>.sorting_3,
		table.dataTable.order-column tbody>tr>.selected,
		table.dataTable.display tbody>tr.selected>.sorting_1,
		table.dataTable.display tbody>tr.selected>.sorting_2,
		table.dataTable.display tbody>tr.selected>.sorting_3,
		table.dataTable.display tbody>tr>.selected {
			background-color: #acbad5
		}

		table.dataTable.display tbody>tr.odd.selected>.sorting_1,
		table.dataTable.order-column.stripe tbody>tr.odd.selected>.sorting_1 {
			background-color: #a6b4cd
		}

		table.dataTable.display tbody>tr.odd.selected>.sorting_2,
		table.dataTable.order-column.stripe tbody>tr.odd.selected>.sorting_2 {
			background-color: #a8b5cf
		}

		table.dataTable.display tbody>tr.odd.selected>.sorting_3,
		table.dataTable.order-column.stripe tbody>tr.odd.selected>.sorting_3 {
			background-color: #a9b7d1
		}

		table.dataTable.display tbody>tr.even.selected>.sorting_1,
		table.dataTable.order-column.stripe tbody>tr.even.selected>.sorting_1 {
			background-color: #acbad5
		}

		table.dataTable.display tbody>tr.even.selected>.sorting_2,
		table.dataTable.order-column.stripe tbody>tr.even.selected>.sorting_2 {
			background-color: #aebcd6
		}

		table.dataTable.display tbody>tr.even.selected>.sorting_3,
		table.dataTable.order-column.stripe tbody>tr.even.selected>.sorting_3 {
			background-color: #afbdd8
		}

		table.dataTable.display tbody>tr.odd>.selected,
		table.dataTable.order-column.stripe tbody>tr.odd>.selected {
			background-color: #a6b4cd
		}

		table.dataTable.display tbody>tr.even>.selected,
		table.dataTable.order-column.stripe tbody>tr.even>.selected {
			background-color: #acbad5
		}

		table.dataTable.display tbody>tr.selected:hover>.sorting_1,
		table.dataTable.order-column.hover tbody>tr.selected:hover>.sorting_1 {
			background-color: #a2aec7
		}

		table.dataTable.display tbody>tr.selected:hover>.sorting_2,
		table.dataTable.order-column.hover tbody>tr.selected:hover>.sorting_2 {
			background-color: #a3b0c9
		}

		table.dataTable.display tbody>tr.selected:hover>.sorting_3,
		table.dataTable.order-column.hover tbody>tr.selected:hover>.sorting_3 {
			background-color: #a5b2cb
		}

		table.dataTable.display tbody>tr:hover>.selected,
		table.dataTable.display tbody>tr>.selected:hover,
		table.dataTable.order-column.hover tbody>tr:hover>.selected,
		table.dataTable.order-column.hover tbody>tr>.selected:hover {
			background-color: #a2aec7
		}

		table.dataTable tbody td.select-checkbox,
		table.dataTable tbody th.select-checkbox {
			position: relative
		}

		table.dataTable tbody td.select-checkbox:before,
		table.dataTable tbody td.select-checkbox:after,
		table.dataTable tbody th.select-checkbox:before,
		table.dataTable tbody th.select-checkbox:after {
			display: block;
			position: absolute;
			top: 1.2em;
			left: 50%;
			width: 12px;
			height: 12px;
			box-sizing: border-box
		}

		table.dataTable tbody td.select-checkbox:before,
		table.dataTable tbody th.select-checkbox:before {
			content: ' ';
			margin-top: -6px;
			margin-left: -6px;
			border: 1px solid black;
			border-radius: 3px
		}

		table.dataTable tr.selected td.select-checkbox:after,
		table.dataTable tr.selected th.select-checkbox:after {
			content: '\2714';
			margin-top: -11px;
			margin-left: -4px;
			text-align: center;
			text-shadow: 1px 1px #B0BED9, -1px -1px #B0BED9, 1px -1px #B0BED9, -1px 1px #B0BED9
		}

		div.dataTables_wrapper span.select-info,
		div.dataTables_wrapper span.select-item {
			margin-left: 0.5em
		}

		@media screen and (max-width: 640px) {

			div.dataTables_wrapper span.select-info,
			div.dataTables_wrapper span.select-item {
				margin-left: 0;
				display: block
			}
		}

		table>tbody>tr>th {
			background-color: #A0A0A0;
			color: white;
		}

		#tb>tbody>tr>td {
			cursor: pointer;
		}

		.table>caption+thead>tr:first-child>th,
		.table>colgroup+thead>tr:first-child>th,
		.table>thead:first-child>tr:first-child>th,
		.table>caption+thead>tr:first-child>td,
		.table>colgroup+thead>tr:first-child>td,
		.table>thead:first-child>tr:first-child>td {
			border-top: 0;
		}

		.table-bordered>thead>tr>th,
		.table-bordered>tbody>tr>th,
		.table-bordered>tfoot>tr>th,
		.table-bordered>thead>tr>td,
		.table-bordered>tbody>tr>td,
		.table-bordered>tfoot>tr>td {
			border: 1px solid #ddd;
		}

		table {
			border-spacing: 0;
			border-collapse: collapse;
		}

		.table-bordered {
			border: 1px solid #ddd;
		}

		#page-doc p {
			font-size: 14px;
		}

		#page-word p {
			font-size: 14px;
		}

		.table {
			width: 100%;
			max-width: 100%;
			margin-bottom: 20px;
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
									จัดการเอกสารปีการศึกษา <?=($semester != null) ? $semester->Semester_Year : "" ?> ภาคเรียนที่ <?=($semester != null) ? $semester->Semester_Name : "" ?>
								</h2>
							</div>
							<div class="body">
								<form action="" method="">
									<div class="row clearfix">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="col-md-5">
												<p>
													<b>เลือกรายวิชา :</b>
												</p>
												<select class="form-control show-tick" id="subject">
													<option>———กรุณาเลือก———</option>
													<?php foreach ($subject as $x) { ?>
													<option data-credit="<?=$x->Subject_credit?>" data-normal="<?=$x->GroupNomal?>" data-thainame="<?=$x->Subject_id.' '.$x->Subject_thai_name?>"
													data-special="<?=$x->GroupSpecial?>" value="<?=$x->Subject_id?>">
														<?=$x->Subject_id.' '.$x->Subject_name?>
													</option>
													<?php } ?> ?>
												</select>
											</div>
											<div class="col-md-5">
												<p>
													<b>ระดับการศึกษา :</b>
												</p>
												<div class="form-group">
													<div class="form-line">
														<select class="form-control" name="Degree">
															<option value="1">ป.ตรี</option>
															<option value="2">ป.โท</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-md-5">
												<p>
													<b>ค่าตอบแทนทั้งหมด :</b>
												</p>
												<div class="form-group">
													<div class="form-line">
														<input type="text" id="" name="Subject_amount" class="form-control" required>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-2">
													<p></p>
													<button type="button" name="btnpdf" class="btn btn-sm btn-default m-t-20 waves-effect">ใบบันทึกข้อความ</button>
												</div>
												<div class="col-md-1">
													<p></p>
													<button type="button" name="btnword" class="btn btn-sm btn-default m-t-20 waves-effect">ใบบันทึกข้อความ MS Word</button>
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

	<div id="word" style="display: none;width: 29.7cm;height: 21cm;">
		<div id="page-word" style="word-wrap: break-word;" class="container font-sarabun">
			<div class="row">
				<div style="width: 20%; display: inline;">
					<img id="img_buu" style="width: 80px; height: 80px;" src="<?php echo base_url() ?>LogoBuuThai.png">
				</div>
				<div style="width: 60%;text-align: center;font-weight: bold;font-size: 18px;display: inline-block;vertical-align: bottom;">
					<span>บันทึกข้อความ</span>
				</div>
			</div>
			<div class="row" style="margin-top: 20px;">
				<p style="font-family: THSarabunPSK";>
					<strong style="margin-right:1em;">ส่วนงาน</strong> คณะวิทยาการสารสนเทศ สำนักงานจัดการศึกษา โทร ๓๐๙๖</p>
				<p>
					<strong>ที่</strong> ศธ ๖๓๑๓.๒/๕๖๖
					<strong style="margin-left:15em;">วันที่</strong>
					<span class="doc_date"></span>
				</p>
				<p style="margin-bottom: 15px;">
					<strong style="margin-right:1.5em;">เรื่อง</strong> ขออนุมัติในหลักการค่าตอบแทนนิสิตระดับปริญญาตรีช่วยปฏิบัติงาน</p>
				<p style="margin-bottom: 15px;">
					<strong style="margin-right:1.5em;">เรียน</strong> คณบดีคณะวิทยาการสารสนเทศ</p>
				<p style="text-indent: 2em;">ด้วยคณะวิทยาการสารสนเทศ มหาวิทยาลัยบูรพา ได้เปิดสอนรายวิชา
					<span class="doc_subject"></span>
					<span class="doc_credit"></span> ในภาคเรียนที่
					<span class="doc_semester"></span>
					<span class="doc_normal"></span>
					<span class="doc_special"></span> ในการนี้สำนักงานจัดการศึกษา ขออนุมัติจ้างนิสิตช่วยงานห้องปฏิบัติการในรายวิชา
					<span class="doc_subject"></span> รายนามดังนี้
				</p>
				<center>
					<table class="table-bordered table-doc">
						<thead>
							<tr>
								<th>ลำดับ</th>
								<th>รหัสนิสิต</th>
								<th>ชื่อ-สกุล</th>
								<th>กลุ่ม</th>
								<th>จำนวน<br>นิสิต</th>
								<th>จำนวน<br>(ชม.)</th>
								<th>ชั่วโมงละ<br>(บาท)</th>
								<th>จำนวน<br>รวม<br>(บาท)</th>
							</tr>
						</thead>
						<tbody class="tbody-doc">
						</tbody>
					</table>
				</center>
				<br>
				<p>โดยปฏิบัติงานในภาคเรียนที่
					<span class="doc_semester"></span> เพื่อช่วยงานสอนของอาจารย์ในชั่งโมงปฏิบัติการ สำหรับหมวดวิชาศึกษาทั่วไปรายวิชา
					<span class="doc_subject"></span> ของคณะวิทยาการสารสนเทศ</p>
				<p style="text-indent: 2em;">ในการนี้ สำนักงานจัดการศึกษา คณะวิทยากาารสารสนเทศ จึงขออนุมัติจ้างนิสิตช่วยปฏิบัติงานวิชาการ
				โดยเบิกค่าตอบแทน ตามประกาศคณะวิทยาการสารสนเทศ ที่ ๐๐๓/๒๕๖๑ เรื่องหลักเกณฑ์การจ่ายค่าตอบแทนนิสิตช่วย ปฏิบัติงานคณะวิทยาการสารสนเทศ
				พ.ศ. ๒๕๖๑ จากเงินรายได้ แผนกงานจัดการศึกษาอุดมศึกษา งานจัดการศึกษาระดับ ปริญญาตรีด้านวิทยาศาสตร์และเทคโนโลยี กองทุนเพื่อการศึกษา
					งบดำเนินงาน หมวดค่าตอบแทนใช้สอยและวัสดุ เป็นจำนวน <span class="doc_amount"></span>
					<br>
					<p style="text-indent: 2em;">จึงเรียนมาเพื่อโปรดพิจารณาอนุมัติ</p>
					<br>
					<div style="display: block;width: 50%; float: left;">
						<br>
						<br>
						<br>
					</div>
					<div style="display: block;width: 50%; float: right;">
						<center>
							<p>(
								<?=$vice_president->Config_value?>)</p>
						</center>
						<center>
							<p>รองคณบดี</p>
						</center>
					</div>
					<div style="display: block;width: 50%;">
						<center>
							<p>อนุมัติ</p>
						</center>
						<br>
						<br>
						<center>
							<p>(
								<?=$president->Config_value?>)</p>
						</center>
						<center>
							<p>คณบดีคณะวิทยาการสาสนเทศ</p>
						</center>
					</div>
			</div>
		</div>
	</div>


	<div id="doc" style="display: none;width: 29.7cm;height: 21cm;">
		<div id="page-doc" style="word-wrap: break-word;" class="container font-sarabun">
			<div class="row">
				<div style="width: 20%; display: inline;">
					<img id="img_buu" style="width: 80px; height: 80px;" src="<?php echo base_url() ?>LogoBuuThai.png">
				</div>
				<div style="width: 60%;text-align: center;font-weight: bold;font-size: 18px;display: inline-block;vertical-align: bottom;">
					<span>บันทึกข้อความ</span>
				</div>
			</div>
			<div class="row" style="margin-top: 20px;">
				<p>
					<strong style="margin-right:1em;">ส่วนงาน</strong> คณะวิทยาการสารสนเทศ สำนักงานจัดการศึกษา โทร ๓๐๙๖</p>
				<p>
					<strong>ที่</strong> ศธ ๖๓๑๓.๒/๕๖๖
					<strong style="margin-left:15em;">วันที่</strong>
					<span class="doc_date"></span>
				</p>
				<p style="margin-bottom: 15px;">
					<strong style="margin-right:2.5em;">เรื่อง</strong> ขออนุมัติในหลักการค่าตอบแทนนิสิตระดับปริญญาตรีช่วยปฏิบัติงาน</p>
				<p style="margin-bottom: 15px;">
					<strong style="margin-right:2.5em;">เรียน</strong> คณบดีคณะวิทยาการสารสนเทศ</p>
				<p style="text-indent: 4em;">ด้วยคณะวิทยาการสารสนเทศ มหาวิทยาลัยบูรพา ได้เปิดสอนรายวิชา
					<span class="doc_subject"></span>
					<span class="doc_credit"></span> ในภาคเรียนที่
					<span class="doc_semester"></span>
					<span class="doc_normal"></span>
					<span class="doc_special"></span> ในการนี้สำนักงานจัดการศึกษา ขออนุมัติจ้างนิสิตช่วยงานห้องปฏิบัติการในรายวิชา
					<span class="doc_subject"></span> รายนามดังนี้
				</p>
				<center>
					<table class="table-bordered table-doc">
						<thead>
							<tr>
								<th>ลำดับ</th>
								<th>รหัสนิสิต</th>
								<th>ชื่อ-สกุล</th>
								<th>กลุ่ม</th>
								<th>จำนวน<br>นิสิต</th>
								<th>จำนวน<br>(ชม.)</th>
								<th>ชั่วโมงละ<br>(บาท)</th>
								<th>จำนวน<br>รวม<br>(บาท)</th>
							</tr>
						</thead>
						<tbody class="tbody-doc">
						</tbody>
					</table>
				</center>
				<br>
				<p>โดยปฏิบัติงานในภาคเรียนที่
					<span class="doc_semester"></span> เพื่อช่วยงานสอนของอาจารย์ในชั่งโมงปฏิบัติการ สำหรับหมวดวิชาศึกษาทั่วไปรายวิชา
					<span class="doc_subject"></span> ของคณะวิทยาการสารสนเทศ</p>
				<p style="text-indent: 4em;">ในการนี้ สำนักงานจัดการศึกษา คณะวิทยากาารสารสนเทศ จึงขออนุมัติจ้างนิสิตช่วยปฏิบัติงานวิชาการ
				โดยเบิกค่าตอบแทน ตามประกาศคณะวิทยาการสารสนเทศ ที่ ๐๐๓/๒๕๖๑ เรื่องหลักเกณฑ์การจ่ายค่าตอบแทนนิสิตช่วย ปฏิบัติงานคณะวิทยาการสารสนเทศ
				พ.ศ. ๒๕๖๑ จากเงินรายได้ แผนกงานจัดการศึกษาอุดมศึกษา งานจัดการศึกษาระดับ ปริญญาตรีด้านวิทยาศาสตร์และเทคโนโลยี กองทุนเพื่อการศึกษา
					งบดำเนินงาน หมวดค่าตอบแทนใช้สอยและวัสดุ เป็นจำนวน <span class="doc_amount"></span>
					<br>
					<br>
					<p style="text-indent: 4em;">จึงเรียนมาเพื่อโปรดพิจารณาอนุมัติ</p>
					<br>
					<div style="display: block;width: 50%; float: left;">
						<br>
						<br>
						<br>
					</div>
					<div style="display: block;width: 50%; float: right;">
						<center>
							<p>(
								<?=$vice_president->Config_value?>)</p>
						</center>
						<center>
							<p>รองคณบดี</p>
						</center>
					</div>
					<div style="display: block;width: 50%;">
						<center>
							<p>อนุมัติ</p>
						</center>
						<br>
						<br>
						<center>
							<p>(
								<?=$president->Config_value?>)</p>
						</center>
						<center>
							<p>คณบดีคณะวิทยาการสาสนเทศ</p>
						</center>
					</div>
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
	<script src="<?php echo base_url() ?>/js/thaibath.js"></script>

	<script src="<?php echo base_url() ?>/plugins/FileSaver.js"></script>
	<script src="<?php echo base_url() ?>/plugins/jquery.wordexport.js"></script>

	<script>
		$(function () {
			var labor = {1: '<?=$labor1->Config_value?>', 2: '<?=$labor2->Config_value?>'}
			var hourlabor = '<?=$hourlabor->Config_value?>'
			var toThainum = function (num) {
				var thainum = {
					'1': '๑',
					'2': '๒',
					'3': '๓',
					'4': '๔',
					'5': '๕',
					'6': '๖',
					'7': '๗',
					'8': '๘',
					'9': '๙',
					'0': '๐'
				}
				var result = ''
				num = num + ''
				for (var i in num) {
					if (thainum[num[i]]) {
						result += thainum[num[i]]
					} else {
						result += num[i]
					}
				}
				return result
			}
			var year = toThainum(<?=$year?> + 543)
			var month = Number('<?=$month?>') - 1
			var day = toThainum('<?=$day?>')
			var monthThai = ["มกราคม", "กุมภาพันธ์", "มีนาคม",
				"เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน",
				"ตุลาคม", "พฤศจิกายน", "ธันวาคม"
			]
			var semester = JSON.parse('<?=json_encode($semester)?>')
			semester.txt = toThainum(semester.Semester_Name + '/' + semester.Semester_Year)
			$('.doc_semester').html(semester.txt)
			$('.doc_date').html(day + ' ' + monthThai[month] + ' พ.ศ. ' + year)

			var loadWork = function () {
				var data = {
					Subject_id: $('#subject').val(),
					Degree: $('select[name=Degree]').val()
				}
				$('button[name=btnpdf]').prop('disabled', true)
				// doc
				$('.doc_credit').html('')
				$('.doc_special').html('')
				$('.doc_normal').html('')
				$('.doc_amount').html('')
				var doc_subject = toThainum($('#subject option:selected').data('thainame'));
				$('.doc_subject').html(doc_subject)
				if ($('#subject option:selected').data('normal')) {
					var txt = 'ภาคปกติจำนวน '
					txt += toThainum(Number($('#subject option:selected').data('normal')).toLocaleString())
					txt += ' กลุ่ม'
					$('.doc_normal').html(txt)
				}
				if ($('#subject option:selected').data('special')) {
					var txt = 'ภาคพิเศษจำนวน '
					txt += toThainum(Number($('#subject option:selected').data('special')).toLocaleString())
					txt += ' กลุ่ม'
					$('.doc_special').html(txt)
				}
				if ($('#subject option:selected').data('credit')) {
					var txt = 'จำนวน '
					txt += toThainum($('#subject option:selected').data('credit')) + ' หน่วยกิต'
					$('.doc_credit').html(txt)
				}
				if ($('input[name=Subject_amount]').val()) {
					var amount_val = $('input[name=Subject_amount]').val()
					var thaibath = ArabicNumberToText(amount_val)
					var Amount = toThainum(Number(amount_val).toLocaleString(undefined, {
						minimumFractionDigits: 2
					}))
					$('.doc_amount').html(Amount + ' บาท (' + thaibath + ')')
				}
				$.post('<?=base_url()?>index.php/table/loadStudentWork', {
					data: data
				}, function (res) {
					res = JSON.parse(res)
					loadtopdf(res)
				})
			}

			var loadAmount = function () {
					var qtyTA1 = 0
					var qtyTA2 = 0

					jQuery.ajax({
						url: '<?=base_url()?>index.php/Config/getQtyTA/' + $('#subject').val(),
						success: function(res) {
							data = JSON.parse(res);
							qtyTA1 = data.qtyTA1;
							qtyTA2 = data.qtyTA2;
						},
						async:false
					});

					console.log(qtyTA1);
					console.log(qtyTA2);

					var degree = $('select[name=Degree] option:selected').val();
					if(degree == 1) {
						var calcAmountTA1 = (qtyTA1 * 45) * 30;
						$('input[name=Subject_amount]').val(calcAmountTA1);
					} else if (degree == 2) {
						var calcAmountTA2 = (qtyTA2 * 90) * 30;
						$('input[name=Subject_amount]').val(calcAmountTA2);
					}
			}

			var updateAmount = function () {
				$.get('<?=base_url()?>index.php/Config/updateSubjectAmount/' + $('#subject').val() + '/' + $('input[name=Subject_amount]').val(), 
				function (res) { })
			}

			$('select[name=Degree]').change(function () {
				loadWork()
				loadAmount()
			})

			$('#subject').change(function () {
				loadWork()
				loadAmount()
			})

			$('button[name=btnpdf]').click(function () {
				updateAmount()
				loadWork()
				pdf()
			})

			var loadtopdf = function (res) {
				console.log(res);
				var labor_cost = labor[$('select[name=Degree]').val()]
				var html = ''
				var html_r = [], total = 0
				for (var i in res) {
					res[i].TotalHour = hourlabor
					html += '<tr>'
					html += '<td class="center">'+toThainum(Number(i) + 1)+'</td>'
					html += '<td class="center">'+res[i].Student_id.toThainum()+'</td>'
					html += '<td>'+res[i].Student_firstname + ' ' + res[i].Student_lastname +'</td>'
					html += '<td class="center">'+res[i].Section_id.toThainum()+'</td>'
					html += '<td class="center">'+res[i].Section_student_quantity.toThainum()+'</td>'
					html += '<td class="center">'+res[i].TotalHour.toThainum()+'</td>'
					html += '<td class="center">'+labor_cost.toThainum()+'</td>'
					html += '<td class="center">'+(Number(labor_cost) * Number(res[i].TotalHour)).toLocaleString().toThainum()+'</td>'
					html += '</tr>'
					total += Number(labor_cost) * Number(res[i].TotalHour)
				}
				html += '<tr><td class="right" colspan="7">รวมเป็นเงิน '+ArabicNumberToText(total)+'</td><td class="center">'+total.toLocaleString().toThainum()+'</td></tr>'
				// html = html_r.join('')
				$('.tbody-doc').html(html)
				$('button[name=btnpdf]').prop('disabled', false)
			}

			Object.defineProperty(Number.prototype, "toThainum", {
				value: function toThainum() {
					var thainum = {
						'1': '๑',
						'2': '๒',
						'3': '๓',
						'4': '๔',
						'5': '๕',
						'6': '๖',
						'7': '๗',
						'8': '๘',
						'9': '๙',
						'0': '๐'
					}
					var result = '', num = this
					num = num + ''
					for (var i in num) {
						if (thainum[num[i]]) {
							result += thainum[num[i]]
						} else {
							result += num[i]
						}
					}
					return result
				},
				writable: true,
				configurable: true
			});

			Object.defineProperty(String.prototype, "toThainum", {
				value: function toThainum() {
					var thainum = {
						'1': '๑',
						'2': '๒',
						'3': '๓',
						'4': '๔',
						'5': '๕',
						'6': '๖',
						'7': '๗',
						'8': '๘',
						'9': '๙',
						'0': '๐'
					}
					var result = '', num = this
					num = num + ''
					for (var i in num) {
						if (thainum[num[i]]) {
							result += thainum[num[i]]
						} else {
							result += num[i]
						}
					}
					return result
				},
				writable: true,
				configurable: true
			});

			var pdf = function () {
				var mywindow = window.open('', 'new div', 'height=400,width=600');
				mywindow.document.write('<html><head><title></title><meta charset="UTF-8">');
				mywindow.document.write('<style>' + $('style[name=print]').html() +
					'</style><style type="text/css" media="print"></style>');
				mywindow.document.write('</head><body onload="window.print();window.close();">');
				mywindow.document.write($('#doc').html());
				mywindow.document.write('</body></html>');
				mywindow.document.close();
				mywindow.focus();
			}

			function getBase64Image(img) {
				var canvas = document.createElement("canvas");
				canvas.width = img.width;
				canvas.height = img.height;
				var ctx = canvas.getContext("2d");
				ctx.drawImage(img, 0, 0);
				var dataURL = canvas.toDataURL();
				return dataURL.replace(/^data:image\/(png|jpg);base64,/, "");
			}

			$('button[name=btnword]').click(function () {
				$("#word").wordExport('document');
				return
			})
		})

	</script>

	<!-- Custom Js -->
	<script src="<?php echo base_url() ?>/js/admin.js"></script>

	<!-- Demo Js -->
	<script src="<?php echo base_url() ?>/js/demo.js"></script>
</body>

</html>
