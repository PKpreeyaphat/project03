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

    <!-- Sweet Alert Css -->
    <link href="<?php echo base_url() ?>/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

	<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
	<link href="<?php echo base_url() ?>/css/themes/all-themes.css" rel="stylesheet" />

    <!-- Select2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
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
                                แบบฟอร์มการสมัคร
                            </h2>
                        </div>
                        <?php
                        ?>
                        <div class="body table-responsive">
                            <form action="<?php echo base_url()."index.php/StudentRegist"?>" method="post">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <select class="form-control show-tick" id="subject">
                                    <option value=''>———กรุณาเลือกวิชา———</option>
                                    <?php foreach ($allsubject as $x) { ?>
                                        <option value="<?=$x->Subject_id?>"><?=$x->Subject_id.' '.$x->Subject_name?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <select class="form-control show-tick" id="student">
                                    <option value=''>———กรุณาเลือกนิสิต———</option>
                                    <?php foreach ($student as $x) { ?>
                                        <option value="<?=$x->Student_id?>"><?=$x->Student_id.' '.$x->Student_firstname.' '.$x->Student_lastname?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="" name="Student_grade" class="form-control" placeholder="เกรดรายวิชา">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="" name="Student_email" class="form-control" placeholder="E-mail">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <select class="form-control" name="Degree">
                                            <option value="1">ป.ตรี</option>
                                            <option value="2">ป.โท</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id=""  name="Student_tel" class="form-control" placeholder="เบอร์โทรศัพท์">
                                    </div>
                                </div>
                            </div>
                            <h5>ช่วงเวลาที่ต้องการปฏิบัติการ <span id="subject_name"></span></h5>
                            <table id="tb" class="table table-bordered display dataTable with-check">
                                <thead>
                                    <tr>
                                    <th><center>วัน-เวลา</th>
                                        <th><center>8.00-9.50</th>
                                        <th><center>10.00-11.50</th>
                                        <th><center>13.00-14.50</th>
                                        <th><center>15.00-16.50</th>
                                        <th><center>17.00-18.50</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-day="1">
                                        <th>จันทร์</th>
                                        <td data-start="8.00" data-end="9.50"></td>
                                        <td data-start="10.00" data-end="11.50"></td>
                                        <td data-start="13.00" data-end="14.50"></td>
                                        <td data-start="15.00" data-end="16.50"></td>
                                        <td data-start="17.00" data-end="18.50"></td>
                                    </tr>
                                    <tr data-day="2">
                                        <th>อังคาร</th>
                                        <td data-start="8.00" data-end="9.50"></td>
                                        <td data-start="10.00" data-end="11.50"></td>
                                        <td data-start="13.00" data-end="14.50"></td>
                                        <td data-start="15.00" data-end="16.50"></td>
                                        <td data-start="17.00" data-end="18.50"></td>
                                    </tr>
                                    <tr data-day="3">
                                        <th>พุธ</th>
                                        <td data-start="8.00" data-end="9.50"></td>
                                        <td data-start="10.00" data-end="11.50"></td>
                                        <td data-start="13.00" data-end="14.50"></td>
                                        <td data-start="15.00" data-end="16.50"></td>
                                        <td data-start="17.00" data-end="18.50"></td>
                                    </tr>
                                    <tr data-day="4">
                                        <th>พฤหัสบดี</th>
                                        <td data-start="8.00" data-end="9.50"></td>
                                        <td data-start="10.00" data-end="11.50"></td>
                                        <td data-start="13.00" data-end="14.50"></td>
                                        <td data-start="15.00" data-end="16.50"></td>
                                        <td data-start="17.00" data-end="18.50"></td>
                                    </tr>
                                    <tr data-day="5">
                                        <th>ศุกร์</th>
                                        <td data-start="8.00" data-end="9.50"></td>
                                        <td data-start="10.00" data-end="11.50"></td>
                                        <td data-start="13.00" data-end="14.50"></td>
                                        <td data-start="15.00" data-end="16.50"></td>
                                        <td data-start="17.00" data-end="18.50"></td>
                                    </tr>
                                    <tr data-day="6">
                                        <th>เสาร์</th>
                                        <td data-start="8.00" data-end="9.50"></td>
                                        <td data-start="10.00" data-end="11.50"></td>
                                        <td data-start="13.00" data-end="14.50"></td>
                                        <td data-start="15.00" data-end="16.50"></td>
                                        <td data-start="17.00" data-end="18.50"></td>
                                    </tr>
                                    <tr data-day="0">
                                        <th>อาทิตย์</th>
                                        <td data-start="8.00" data-end="9.50"></td>
                                        <td data-start="10.00" data-end="11.50"></td>
                                        <td data-start="13.00" data-end="14.50"></td>
                                        <td data-start="15.00" data-end="16.50"></td>
                                        <td data-start="17.00" data-end="18.50"></td>
                                    </tr>
                                </tbody>
                            </table>
                                <?php
                                if(isset($subject) && (isset($semester) && $semester->isOpen)){ ?>
                                    <center>
                                        <button type="button" name="btnsave" class="btn btn-primary m-t-15 waves-effect" disabled>ยืนยัน</button>
                                        <button name="btnDelete" type="reset" class="btn btn-danger m-t-15 waves-effect">ยกเลิก</button>
                                    </center>
                                <?php } ?>
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

    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="<?php echo base_url() ?>/plugins/sweetalert/sweetalert.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

    <script type="text/javascript">
    $(function(){
        var time = {
                1:{}, 
                2:{},
                3:{},
                4:{},
                5:{},
                6:{},
                0:{}
            }
        $('#student').select2({
            matcher: matchCustom
        })
        $('#subject').select2({
            matcher: matchCustom
        })

        var draw = function(){
            $('#tb tbody tr td').css('background-color', '')
            for(var day in time){
                for(var t in time[day]){
                    var t_r = t.split('-');
                    if(time[day][t]){
                        $('tr[data-day='+day+']').find('td[data-start="'+t_r[0]+'"][data-end="'+t_r[1]+'"]')
                            .css('background-color', '#ffcc33');
                    }
                }
            }
        };

        $('button[name=btnsave]').click(function(){
            swal({
                title: "Are you sure?",
                text: "ต้องการสมัคร TA",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#1f91f3",
                confirmButtonText: "ใช่!",
                confirmButtonColor: "#1f91f3",
                cancelButtonText: "ยกเลิก!",                    
                closeOnConfirm: false,
                showLoaderOnConfirm: true
            }, function () {
                $.post("<?=base_url()?>index.php/StudentRegist/SaveRegister", {
                    Student_id: $('#student').val(),
                    Student_grade: $('input[name=Student_grade]').val(),
                    Student_email: $('input[name=Student_email]').val(),
                    Student_tel: $('input[name=Student_tel]').val(),
                    Subject_id: $('#subject').val(),
                    Degree: $('select[name=Degree]').val(),
                    time: JSON.stringify( time )
                }, function(data){
                    swal("บันทึกสำเร็จ!", "รายละเอียดถูกบันทึกเรียบร้อย", "success");
                    //window.location.href = 'HomeStudent';                 
                })
            });
        });

        $('#tb').on('click', 'tbody > tr > td', function(){
            // add
            var day = $(this).parents('tr').data('day');
            var t = $(this).data('start') + '-' + $(this).data('end');
            if($(this).css('background-color') != 'rgb(255, 204, 51)'){
                $(this).css('background-color', '#ffcc33');
                time[day][t] = true
            }
            // remove
            else{
                $(this).css('background-color', '#fff')
                time[day][t] = false
            }
        });

        var load = function(){
            var data = {
                Student_id: $('#student').val(),
                Subject_id: $('#subject').val()
            }
            $.post("<?=base_url()?>index.php/AdminRegister/getStudent", {data: data}, function(rs){
                rs = JSON.parse(rs)
                $('input[name=Student_grade]').val(rs.Student_grade)
                $('input[name=Student_email]').val(rs.Student_email)
                $('input[name=Student_tel]').val(rs.Student_tel)
                $('select[name=Degree]').val(rs.Degree)
            })
            $.post("<?=base_url()?>index.php/AdminRegister/getRegister", {data: data}, function(rs){
                rs = JSON.parse(rs)
                console.log(rs);
                if(rs.length > 0){
                    time = rs;
                }
                else{
                    for(var day in time){
                        time[day] = {
                            '8.00-9.50': false, 
                            '10.00-11.50': false,
                            '13.00-14.50': false, 
                            '15.00-16.50': false, 
                            '17.00-18.50': false
                        }
                    }
                }
                draw();
            })
        }

        $('#subject').change(function(){
            if($('#student').val() && $('#subject').val()){
                $('button[name=btnsave]').prop('disabled', false)
            }else{
                $('button[name=btnsave]').prop('disabled', true)
            }
            $('#subject_name').html($('#subject option:selected').text())
            load()
        })

        $('#student').change(function(){
            if($('#student').val() && $('#subject').val()){
                $('button[name=btnsave]').prop('disabled', false)
            }else{
                $('button[name=btnsave]').prop('disabled', true)
            }
            load()
        })

        function matchCustom(params, data) {
            // If there are no search terms, return all of the data
            if ($.trim(params.term) === '') {
            return data;
            }

            // Do not display the item if there is no 'text' property
            if (typeof data.text === 'undefined') {
            return null;
            }

            // `params.term` should be the term that is used for searching
            // `data.text` is the text that is displayed for the data object
            if (data.text.indexOf(params.term) > -1 || data.id.indexOf(params.term) > -1) {
            var modifiedData = $.extend({}, data, true);

            // You can return modified objects from here
            // This includes matching the `children` how you want in nested data sets
            return modifiedData;
            }

            // Return `null` if the term should not be displayed
            return null;
        }
    })
    </script>

    <!-- Custom Js -->
	<script src="<?php echo base_url() ?>/js/admin.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url() ?>/js/demo.js"></script>

</body>

</html>
