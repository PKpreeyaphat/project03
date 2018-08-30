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



		@media print {
			* {
				margin: 0;
				padding: 0;
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
			@page {
				margin: 0;
			}
			body {
				-webkit-print-color-adjust: exact !important;
			}
			.table thead tr th {
				background-color: #00a968 !important;
				color: white !important;
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
			padding-right: 20px !important;
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

		table>thead>tr>th {
			background-color: #00a968;
			color: white;
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
	<canvas id="can"></canvas>
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


	<div id="doc" style="display: none;width: 29.7cm;height: 21cm;">
		<div id="page-doc" style="word-wrap: break-word;margin-top:4em;margin-left:7em;margin-right:4em;" class="container font-sarabun">
			<div class="row">
				<div style="width: 20%; display: inline;">
					<img id="img_buu" style="width: 80px; height: 80px;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABPCAYAAAB8kULjAAAACXBIWXMAAAsTAAALEwEAmpwYAAAKaWlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDAgNzkuMTYwNDUxLCAyMDE3LzA1LzA2LTAxOjA4OjIxICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iIHhtbG5zOnRpZmY9Imh0dHA6Ly9ucy5hZG9iZS5jb20vdGlmZi8xLjAvIiB4bWxuczpleGlmPSJodHRwOi8vbnMuYWRvYmUuY29tL2V4aWYvMS4wLyIgeG1sbnM6eG1wUmlnaHRzPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvcmlnaHRzLyIgeG1wTU06RG9jdW1lbnRJRD0iYWRvYmU6ZG9jaWQ6cGhvdG9zaG9wOmQ0MzU1NDdjLTM2NTItNmE0NS05NGVkLTZkYzllYzRmNTgxOSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo5MDQ4NDE2My1lZGMxLTQ3ZjYtOTI5My1kYjMyYzM5MzVhNWYiIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0iYWRvYmU6ZG9jaWQ6cGhvdG9zaG9wOjNhMzYwMmZkLWJmZTUtMTFlNS04ZTc2LWRhZTRjODUxNTc3NCIgcGhvdG9zaG9wOkxlZ2FjeUlQVENEaWdlc3Q9IjAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAxIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIiBwaG90b3Nob3A6SUNDUHJvZmlsZT0iIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCA3LjAiIHhtcDpNb2RpZnlEYXRlPSIyMDE4LTA4LTMxVDAwOjQwOjU3KzA3OjAwIiB4bXA6Q3JlYXRlRGF0ZT0iMjAxOC0wOC0zMVQwMDoyOTozOSswNzowMCIgeG1wOk1ldGFkYXRhRGF0ZT0iMjAxOC0wOC0zMVQwMDo0MDo1NyswNzowMCIgZGM6Zm9ybWF0PSJpbWFnZS9wbmciIHRpZmY6SW1hZ2VXaWR0aD0iMzc5IiB0aWZmOkltYWdlTGVuZ3RoPSIzNzYiIHRpZmY6UGhvdG9tZXRyaWNJbnRlcnByZXRhdGlvbj0iMiIgdGlmZjpPcmllbnRhdGlvbj0iMSIgdGlmZjpTYW1wbGVzUGVyUGl4ZWw9IjMiIHRpZmY6WFJlc29sdXRpb249IjcyLzEiIHRpZmY6WVJlc29sdXRpb249IjcyLzEiIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiIGV4aWY6RXhpZlZlcnNpb249IjAyMjEiIGV4aWY6Q29sb3JTcGFjZT0iNjU1MzUiIGV4aWY6UGl4ZWxYRGltZW5zaW9uPSIzNzkiIGV4aWY6UGl4ZWxZRGltZW5zaW9uPSIzNzYiIHhtcFJpZ2h0czpNYXJrZWQ9IkZhbHNlIj4gPHhtcE1NOkhpc3Rvcnk+IDxyZGY6U2VxPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6MGE2ZGFiYzMtNDI3Mi00ZDExLTk0NjUtMmQ3M2I2NjI0YTE5IiBzdEV2dDp3aGVuPSIyMDE4LTA4LTMxVDAwOjQwOjU3KzA3OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxOCAoTWFjaW50b3NoKSIgc3RFdnQ6Y2hhbmdlZD0iLyIvPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0iY29udmVydGVkIiBzdEV2dDpwYXJhbWV0ZXJzPSJmcm9tIGltYWdlL2pwZWcgdG8gaW1hZ2UvcG5nIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJkZXJpdmVkIiBzdEV2dDpwYXJhbWV0ZXJzPSJjb252ZXJ0ZWQgZnJvbSBpbWFnZS9qcGVnIHRvIGltYWdlL3BuZyIvPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6OTA0ODQxNjMtZWRjMS00N2Y2LTkyOTMtZGIzMmMzOTM1YTVmIiBzdEV2dDp3aGVuPSIyMDE4LTA4LTMxVDAwOjQwOjU3KzA3OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxOCAoTWFjaW50b3NoKSIgc3RFdnQ6Y2hhbmdlZD0iLyIvPiA8L3JkZjpTZXE+IDwveG1wTU06SGlzdG9yeT4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MGE2ZGFiYzMtNDI3Mi00ZDExLTk0NjUtMmQ3M2I2NjI0YTE5IiBzdFJlZjpkb2N1bWVudElEPSJhZG9iZTpkb2NpZDpwaG90b3Nob3A6M2EzNjAyZmQtYmZlNS0xMWU1LThlNzYtZGFlNGM4NTE1Nzc0IiBzdFJlZjpvcmlnaW5hbERvY3VtZW50SUQ9ImFkb2JlOmRvY2lkOnBob3Rvc2hvcDozYTM2MDJmZC1iZmU1LTExZTUtOGU3Ni1kYWU0Yzg1MTU3NzQiLz4gPHRpZmY6Qml0c1BlclNhbXBsZT4gPHJkZjpTZXE+IDxyZGY6bGk+ODwvcmRmOmxpPiA8cmRmOmxpPjg8L3JkZjpsaT4gPHJkZjpsaT44PC9yZGY6bGk+IDwvcmRmOlNlcT4gPC90aWZmOkJpdHNQZXJTYW1wbGU+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4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"/>
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
					<span id="doc_date"></span>
				</p>
				<p style="margin-bottom: 15px;">
					<strong style="margin-right:2.5em;">เรื่อง</strong> ขออนุมัติในหลักการค่าตอบแทนนิสิตระดับปริญญาตรีช่วยปฏิบัติงาน</p>
				<p style="margin-bottom: 15px;">
					<strong style="margin-right:2.5em;">เรียน</strong> คณบดีคณะวิทยาการสารสนเทศ</p>
				<p style="text-indent: 4em;">ด้วยคณะวิทยาการสารสนเทศ มหาวิทยาลัยบูรพา ได้เปิดสอนรายวิชา
					<span name="doc_subject"></span>
					<span id="doc_credit"></span> ในภาคเรียนที่
					<span name="doc_semester"></span>
					<span id="doc_normal"></span>
					<span id="doc_special"></span> ในการนี้สำนักงานจัดการศึกษา ขออนุมัติจ้างนิสิตช่วยงานห้องปฏิบัติการในรายวิชา
					<span name="doc_subject"></span> รายนามดังนี้
				</p>
				<center>
					<table class="table-doc">
						<tbody id="tbody-doc">
						</tbody>
					</table>
				</center>
				<p>โดยปฏิบัติงานในภาคเรียนที่
					<span name="doc_semester"></span> เพื่อช่วยงานสอนของอาจารย์ในชั่งโมงปฏิบัติการ สำหรับหมวดวิชาศึกษาทั่วไปรายวิชา
					<span name="doc_subject"></span> ของคณะวิทยาการสารสนเทศ</p>
				<br>
				<p style="text-indent: 4em;">จึงเรียนมาเพื่อโปรดพิจารณาอนุมัติในหลักการ การปฏิบัติงานของนิสิตช่วยงาน โดยมีสิทธิเบิกค่าตอบแทนจำนวนเงิน
					<span id="doc_amount"></span> โดยเบิกจากเงินรายได้ แผนกงานจัดการศึกษาอุดมศึกษา งานจัดการศึกษาระดับปริญญาตรีด้านวิทยาศาสตร์และเทคโนโลยี กองทุนเพื่อการศึกษา
					งบดำเนินงาน หมวดค่าตอบแทนใช้สอยและวัสดุ
					<br>
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
			$('span[name=doc_semester]').html(semester.txt)
			$('#doc_date').html(day + ' ' + monthThai[month] + ' พ.ศ. ' + year)

			var loadWork = function () {
				var data = {
					Subject_id: $('#subject').val(),
					Degree: $('select[name=Degree]').val()
				}
				$('button[name=btnpdf]').prop('disabled', true)
				// doc
				$('#doc_credit').html('')
				$('#doc_special').html('')
				$('#doc_normal').html('')
				$('#doc_amount').html('')
				var doc_subject = toThainum($('#subject option:selected').data('thainame'));
				$('span[name=doc_subject]').html(doc_subject)
				if ($('#subject option:selected').data('normal')) {
					var txt = 'ภาคปกติจำนวน '
					txt += toThainum(Number($('#subject option:selected').data('normal')).toLocaleString())
					txt += ' กลุ่ม'
					$('#doc_normal').html(txt)
				}
				if ($('#subject option:selected').data('special')) {
					var txt = 'ภาคพิเศษจำนวน '
					txt += toThainum(Number($('#subject option:selected').data('special')).toLocaleString())
					txt += ' กลุ่ม'
					$('#doc_special').html(txt)
				}
				if ($('#subject option:selected').data('credit')) {
					var txt = 'จำนวน '
					txt += toThainum($('#subject option:selected').data('credit')) + ' หน่วยกิต'
					$('#doc_credit').html(txt)
				}
				if ($('input[name=Subject_amount]').val()) {
					var amount_val = $('input[name=Subject_amount]').val()
					var thaibath = ArabicNumberToText(amount_val)
					var Amount = toThainum(Number(amount_val).toLocaleString(undefined, {
						minimumFractionDigits: 2
					}))
					$('#doc_amount').html(Amount + ' บาท (' + thaibath + ')')
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
				var dict_stu = {}
				var html = ''
				var html_r = []
				var count = 0
				var count_ = 0
				for (var i in res) {
					if (!dict_stu[res[i].Student_id]) {
						dict_stu[res[i].Student_id] = true
						count++
					}
				}
				dict_stu = []
				for (var i in res) {
					if (!dict_stu[res[i].Student_id]) {
						count_++
						html_r.push('<td>' + toThainum(Number(i) + 1) + '.<span style="margin-left:0.5em;">' + toThainum(res[i].Student_id) +
							' ' + res[i].Student_firstname + ' ' + res[i].Student_lastname + '<span></td>')
						dict_stu[res[i].Student_id] = true
						if (count_ == Math.round(count / 2)) {
							break
						}
					}
				}
				count_ = 0
				for (var i in res) {
					if (!dict_stu[res[i].Student_id]) {
						html_r[count_] = '<tr>' + html_r[count_] + '<td>' + toThainum(Number(i) + 1) +
							'.<span style="margin-left:0.5em;">' + toThainum(res[i].Student_id) + ' ' + res[i].Student_firstname + ' ' +
							res[i].Student_lastname + '<span></td></tr>'
						dict_stu[res[i].Student_id] = true
						count_++
						console.log(html_r);
					}
				}
				html = html_r.join('')
				$('#tbody-doc').html(html)
				$('button[name=btnpdf]').prop('disabled', false)
			}

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
				$("#doc").wordExport('document');
				return
				var filename = 'document'
				var preHtml = "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns='http://www.w3.org/TR/REC-html40'><head><meta charset='utf-8'><title>Export HTML To Doc</title>"+
				'<style>' + $('style[name=print]').html() +"</style></head><body>";

				var postHtml = "</body></html>";
				var html = preHtml + document.getElementById('doc').innerHTML + postHtml;

				var blob = new Blob(['\ufeff', html], {
					type: 'application/msword'
				});

				// Specify link url
				var url = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(html);

				// Specify file name
				filename = filename ? filename + '.doc' : 'document.doc';

				// Create download link element
				var downloadLink = document.createElement("a");

				document.body.appendChild(downloadLink);

				if (navigator.msSaveOrOpenBlob) {
					navigator.msSaveOrOpenBlob(blob, filename);
				} else {
					// Create a link to the file
					downloadLink.href = url;

					// Setting the file name
					downloadLink.download = filename;

					//triggering the function
					downloadLink.click();
				}

				document.body.removeChild(downloadLink);
			})
		})

	</script>

	<!-- Custom Js -->
	<script src="<?php echo base_url() ?>/js/admin.js"></script>

	<!-- Demo Js -->
	<script src="<?php echo base_url() ?>/js/demo.js"></script>
</body>

</html>
