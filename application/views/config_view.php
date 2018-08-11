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
                                                    <li role="presentation" class="active"><a href="#home_animation_2" data-toggle="tab">ตั้งค่าระบบ</a></li>
                                                    <li role="presentation"><a href="#settings_animation_2" data-toggle="tab">รายชื่อนิสิต</a></li>
                                                    <li role="presentation"><a href="#settings_animation_3" data-toggle="tab">ปีการศึกษา</a></li>
                                                    <li role="presentation"><a href="#settings_animation_4" data-toggle="tab">ตั้งค่าเอกสาร</a></li>
                                                    <li role="presentation"><a href="#settings_animation_5" data-toggle="tab">จัดการหน้าเอกสาร</a></li>
                                                </ul>

                                        <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade in active" id="home_animation_2">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label><b>ปีการศึกษา :</b></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <select class="form-control show-tick" name="semester">
                                                                <?php
                                                                    foreach($allsemester as $row){
                                                                        if($semester->Semester_ID == $row->Semester_ID){
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
                                                            <label><b>จำนวนชั่วโมงการทำงาน :</b></label>
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
                                                        <label><b>เปิด-ปิดรับสมัคร :</b></label>
                                                            <label>
                                                                <input <?=($semester->isOpen == 1)? 'checked': ''?> name="isopen" type="checkbox">
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
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label><b>คณบดี :</b></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                            <input value="<?=(isset($president))? $president->Config_value : 0 ?>" class="form-control" type="text" name="president">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label><b>รองคณบดี :</b></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input value="<?=(isset($vice_president))? $vice_president->Config_value : 0 ?>" class="form-control" type="text" name="vice_president">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label><b>ค่าตอบแทน :</b></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="number" value="<?=(isset($semester))? $semester->Amount : 0 ?>" id="" name="Amount" class="form-control" placeholder="" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6">
                                                        <button type="button" name="btnsave_configdoc" class="btn btn-success m-t-15 waves-effect">บันทึก</button>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="settings_animation_5">
                                                    <div class="col-md-5">
                                                        <p>
                                                            <b>เลือกรายวิชา :</b>
                                                        </p>
                                                        <select class="form-control show-tick" id="subject">
                                                        <option>———กรุณาเลือก———</option>
                                                        <?php foreach ($subject as $x) { ?>
                                                            <option data-normal="<?=$x->GroupNomal?>" data-special="<?=$x->GroupSpecial?>" value="<?=$x->Subject_id?>"><?=$x->Subject_id.' '.$x->Subject_name?></option>
                                                        <?php } ?>
                                                        ?>
                                                        </select>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <p></p>
                                                            <button name="btnpdf" class="btn btn-sm btn-default m-t-20 waves-effect">บันทึกข้อวคาม</button>
                                                        </div>
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

    <div id="doc" style="display: none;width: 29.7cm;height: 21cm;">
        <div id="page-doc" style="word-wrap: break-word;margin-top:4em;margin-left:8em;margin-right:4em;" class="container font-sarabun">
            <div class="row">
                <div style="width: 20%; display: inline;">
                    <img style="width: 100px; height: 100px;" src="http://council.buu.ac.th/image/LogoBuuThai.jpg" />
                </div>
                <div style="width: 60%;text-align: center;font-weight: bold;font-size: 18px;display: inline-block;vertical-align: bottom;">
                    <span>บันทึกข้อความ</span>
                </div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <p><strong style="margin-right:1em;">ส่วนงาน</strong> คณะวิทยาการสารสนเทศ สำนักงานจัดการศึกษา โทร ๓๐๙๖</p>
                <p><strong>ที่</strong> ศธ ๖๓๑๓.๒/๕๖๖ <strong style="margin-left:18em;">วันที่</strong> <span id="doc_date"></span></p>
                <p><strong style="margin-right:2.5em;">เรื่อง</strong> ขออนุมัติในหลักการค่าตอบแทนนิสิตระดับปริญญาตรีช่วยปฏิบัติงาน</p>
                <br>
                <p><strong style="margin-right:2.5em;">เรียน</strong> คณบดีคณะวิทยาการสารสนเทศ</p>
                <br>
                <p style="text-indent: 4em;">ด้วยคณบดีวิทยาการสารสนเทศ มหาวิทยาลัยบูรพา ได้เปิดสอนรายวิชา <span name="doc_subject"></span> จำนวน <span id="doc_credit"></span> ในภาคเรียนที่  <span name="doc_semester"></span>
                <span id="doc_normal"></span> <span id="doc_special"></span> ในการนี้สำนักงานจัดการศึกษา ขออนุมัติจ้างนิสิตช่วยงานห้องปฏิบัติการในรายวิชา <span name="doc_subject"></span> รายนามดังนี้
                </p>
                <center>
                    <table class="table-doc">
                        <tbody id="tbody-doc">
                        </tbody>
                    </table>
                </center>
                <p>โดยปฏิบัติงานในภาคเรียนที่ <span name="doc_semester"></span> เพื่อช่วยงานสอนของอาจารย์ในชั่งโมงปฏิบัติการ สำหรับหมวดวิชาศึกษาทั่วไปรายวิชา <span name="doc_subject"></span> ของคณะวิทยาการสารสนเทศ</p>
                <br>
                <p style="text-indent: 4em;">จึงเรียนมาเพื่อโปรดพิจรณาอนุมัติในหลักการ การปฏิบัติงานของนิสิตช่วยงาน โดยมีสิทธิเบิกค่าตอบแทนจำนวนเงิน <span id="doc_amount"></span> โดยเบิกจากเงินรายได้ แผนกงานจัดการศึกษาอุดมศึกษา งานจัดการศึกษาระดับปริญญาตรีด้านวิทยาศาสตร์และเทคโนโลยี กองทุนเพื่อการศึกษา งบดำเนินงาน หมวดค่าตอบแทนใช้สอยและวัสดุ
                <br>
                <br>
                <br>
                <div style="display: block;width: 50%; float: left;">
                <br>
                <br>
                <br>
                <br>
                </div>
                <div style="display: block;width: 50%; float: right;">
                    <center><p>(<?=$vice_president->Config_value?>)</p></center>
                    <center><p>รองคณบดี</p></center>
                </div>
                <div style="display: block;width: 50%;">
                    <center><p>อนุมัติ</p></center>
                    <br>
                    <br>
                    <center><p>(<?=$president->Config_value?>)</p></center>
                    <center><p>คณบดีคณะวิทยาการสาสนเทศ</p></center>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url() ?>/plugins/jquery/jquery.min.js"></script>

    <script type="text/javascript">
		$(document).ready(function (e) {
            $("body").css("overflow", "hidden")

            $('button[name=btnsave_configdoc]').click(function(){
                var data = {
                    vice_president: $('input[name=vice_president]').val(),
                    president: $('input[name=president]').val(),
                    Amount: $('input[name=Amount]').val()
                }
                $.post('<?php echo base_url();?>index.php/Config/saveConfigDoc', {data: data}, function(res){
                    swal("บันทึกสำเร็จ!", "บันทึกตั้งค่าเอกสารเรียบร้อย", "success");
                })
            })

            $('button[name=btnsave_semester]').click(function(){
                var iserror = false
                $('.error.focused').removeClass('error focused')
                if(!$('input[name=Semester_Year]').val()){
                    var form_line = $('input[name=Semester_Year]').closest('.form-line');
                    $(form_line).addClass('error focused')
                    iserror = true
                }
                if(!$('input[name=Semester_Start]').val()){
                    var form_line = $('input[name=Semester_Start]').closest('.form-line');
                    $(form_line).addClass('error focused')
                    iserror = true
                }
                if(!$('input[name=Semester_Stop]').val()){
                    var form_line = $('input[name=Semester_Stop]').closest('.form-line');
                    $(form_line).addClass('error focused')
                    iserror = true
                }
                if(iserror){
                    return
                }
                $.post('<?php echo base_url();?>index.php/Config/insertSemester', 
                {
                    Semester_Name: $('select[name=Semester_Name]').val(),
                    Semester_Year: $('input[name=Semester_Year]').val(),
                    Semester_Start: $('input[name=Semester_Start]').val(),
                    Semester_Stop: $('input[name=Semester_Stop]').val(),
                    Amount:  $('input[name=Amount]').val()
                }, function(res){
                    swal("บันทึกสำเร็จ!", "บันทึกปีการศึกษาเรียบร้อย", "success");
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
        $(function(){
            var toThainum = function(num){
                var thainum = 
                {
                    '1': '๑',
                    '2': '๒',
                    '3': '๓',
                    '4': '๔',
                    '5': '๕',
                    '6': '๖',
                    '7': '๗',
                    '8': '๘',
                    '9': '๙',
                    '0': '๐'}
                var result = ''
                num = num + ''
                for(var i in num){
                    if(thainum[num[i]]){
                        result += thainum[num[i]]
                    }
                    else{
                        result += num[i]
                    }
                }
                return result
            }
            var year = toThainum(<?=$year?> + 543)
            var month = Number('<?=$month?>') - 1
            var day = toThainum('<?=$day?>')
            var monthThai = ["มกราคม","กุมภาพันธ์","มีนาคม",
                "เมษายน","พฤษภาคม","มิถุนายน", "กรกฎาคม","สิงหาคม","กันยายน",
                "ตุลาคม","พฤศจิกายน","ธันวาคม"]
            var semester = JSON.parse('<?=json_encode($semester)?>')
            semester.thaibath = ArabicNumberToText(semester.Amount)
            semester.Amount = toThainum(Number(semester.Amount).toLocaleString(undefined, {minimumFractionDigits: 2}))
            semester.txt = toThainum(semester.Semester_Name + '/' + semester.Semester_Year)
            $('span[name=doc_semester]').html(semester.txt)
            $('#doc_amount').html(semester.Amount + ' บาท (' + semester.thaibath +')')
            $('#doc_date').html(day +' ' + monthThai[month] + ' พ.ศ. '+ year)

            var isOpen = false;
            $('button[name=btnSave]').click(function(){
                var isopen = $('input[name=isopen]').prop('checked')
                $.get("<?=base_url()?>index.php/Config/OpenRegister", { 
                        maxHour: $('input[name=txtMaxhour]').val(),
                        Semester_ID: $('select[name=semester]').val(),
                        isOpen: (isopen)? 1 : 0 
                    }, function(data){
                    console.log(data);
                    isOpen = isopen;
                    if(isopen){
                        swal("บันทึกสำเร็จ!", "เปิดรับสมัคร เรียบร้อย", "success");
                    }else{
                        swal("บันทึกสำเร็จ!", "ปิดรับสมัคร เรียบร้อย", "success");
                    }
                });
            })

            $('button[name=btnReset]').click(function(){
                $('input[name=isopen]').prop('checked', isOpen);
            })

            var loadWork = function(){
                var data = {
                    Subject_id: $('#subject').val()
                }
                $.post('table/loadStudentWork', {data: data}, function(res){
                    res = JSON.parse(res)
                    loadtopdf(res)
                })
            }

            $('#subject').change(function(){
                loadWork()
            })

            $('button[name=btnpdf]').click(function(){
                pdf()
            })

            var loadtopdf = function(res){
                var dict_stu = {}
                var html = ''
                var html_r = []
                var count = 0
                var count_ = 0
                for(var i in res){
                    if(!dict_stu[res[i].Student_id]){
                        dict_stu[res[i].Student_id] = true
                        count++
                    }
                }
                dict_stu = []
                for(var i in res){
                    if(!dict_stu[res[i].Student_id]){
                        count_++
                        html_r.push('<td>'+toThainum(Number(i) + 1)+'. <span style="margin-left:0.5em;">'+toThainum(res[i].Student_id)+' '+res[i].Student_firstname+' '+res[i].Student_lastname+'<span></td>')
                        dict_stu[res[i].Student_id] = true
                        if(count_ == Math.round(count / 2)){
                            break
                        }
                    }
                }
                count_ = 0
                for(var i in res){
                    if(!dict_stu[res[i].Student_id]){
                        count_++
                        html_r[count_] = '<tr>' + html_r[count_] + '<td>'+toThainum(Number(i) + 1)+'. <span style="margin-left:0.5em;">'+toThainum(res[i].Student_id)+' '+res[i].Student_firstname+' '+res[i].Student_lastname+'<span></td></tr>'
                        dict_stu[res[i].Student_id] = true
                    }
                }
                html = html_r.join('')
                $('#tbody-doc').html(html)
            }

            var pdf = function(){
                var mywindow = window.open('', 'new div', 'height=400,width=600');
                mywindow.document.write('<html><head><title></title>');
                mywindow.document.write('<style>'+$('style[name=print]').html()+ '</style><style type="text/css" media="print"></style>');
                mywindow.document.write('<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">')
                mywindow.document.write('<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">')
                mywindow.document.write('<link href="<?php echo base_url() ?>/css/style.css" rel="stylesheet">')
                mywindow.document.write('</head><body onload="window.print();window.close();">');
                mywindow.document.write($('#doc').html());
                mywindow.document.write('</body></html>');
                mywindow.document.close();
                mywindow.focus();
            }
        })
    </script>

    <!-- Custom Js -->
    <script src="<?php echo base_url() ?>/js/admin.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url() ?>/js/demo.js"></script>
</body>

</html>