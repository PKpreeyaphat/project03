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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2> รายชื่อนิสิตผู้ช่วยสอนปีการศึกษา <?=($semester != null) ? $semester->Semester_Year : "" ?> ภาคเรียนที่ <?=($semester != null) ? $semester->Semester_Name : "" ?></h2>
                        </div>
                        <div class="body">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <select name="subject" class="form-control show-tick">
                                            <option value="">รายวิชา</option>
                                            <?php foreach ($subject as $x) { ?>
                                                <option value="<?=$x->Subject_id?>"><?=$x->Subject_id.' '.$x->Subject_name?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="body table-responsive">
                                <table class="table table-center">
                                    <thead>
                                        <tr>
                                            <th> <center>เลือก</center>
                                            </th>
                                            <th>
                                                <center>
                                                    รหัสนิสิต
                                            </th>
                                            <th>
                                                <center>
                                                    ชื่อ-นามสกุล
                                            </th>
                                            <th>
                                                <center>
                                                    เกรด
                                            </th>
                                            <th>
                                                <center>
                                                    ดำเนินการ
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                    </tbody>
                                </table>
                                <center><button name="btnapprove" type="button" class="btn btn-success m-t-15 waves-effect">อนุมัติ</button>
                                <button name="btnreject" class="btn btn-danger m-t-15 waves-effect">ยกเลิก</button></center>
                            </div>
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

    <!-- Sweet Alert Plugin Js -->
    <script src="<?php echo base_url() ?>/plugins/sweetalert/sweetalert.min.js"></script>

    <script>
        $(function(){
            var LoadData = function(){
                var subject_id = $('select[name=subject]').val();
                $.post("<?=base_url()?>index.php/HomeAdmin/Students", { subject_id: subject_id }, function(data){
                    data = JSON.parse(data);
                    var html = '';
                    for(var i in data){
                        html += 
                            '<tr>'+
                                '<td><input type="checkbox" data-student="'+data[i].Student_id+'" name="chk_approve" id="chk_approve'+i+'" class="filled-in chk-col-cyan">'+
                                '<label for="chk_approve'+i+'"></label></td>'+
                                '<td>'+data[i].Student_id+'</td>'+
                                '<td>'+data[i].Student_firstname+' '+data[i].Student_lastname+'</td>'+
                                '<td>'+data[i].Grade+'</td>'+
                                '<td><center><a href="<?php echo base_url() ?>/index.php/HomeAdmin/updateStatus/'+data[i].Student_id+'/1" class="btn btn-success waves-effect m-r-20">อนุมัติ</a>'+
                                '<a href="<?php echo base_url() ?>/index.php/HomeAdmin/updateStatus/'+data[i].Student_id+'/-1" class="btn btn-danger waves-effect">ยกเลิก</a></td>'+
                            '</tr>';
                    }
                    $('#tbody').html(html);
                });
            };

            $('button[name=btnapprove]').click(function(){
                var data = [], chk = $('input[name=chk_approve]')
                for(var i = 0; i < chk.length; ++i){
                    data.push({
                        Student_id: $(chk[i]).data('student'),
                        status: 1
                    })
                }
                swal({
                    title: "Are you sure?",
                    text: "ต้องการ อนุมัติ",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#1f91f3",
                    confirmButtonText: "ใช่!",
                    confirmButtonColor: "#1f91f3",
                    cancelButtonText: "ยกเลิก!",                    
                    closeOnConfirm: false,
                    showLoaderOnConfirm: true
                }, function () {
                    $.post("<?php echo base_url() ?>/index.php/HomeAdmin/updateStatus_r", { data: data }, function(res){
                        swal("อนุมัติสำเร็จ!", "รายละเอียดถูกบันทึกเรียบร้อย", "success")
                        LoadData()         
                    })
                });
            })

            $('button[name=btnreject]').click(function(){
                var data = [], chk = $('input[name=chk_approve]')
                for(var i = 0; i < chk.length; ++i){
                    if($(chk[i]).prop('checked')){
                        data.push({
                            Student_id: $(chk[i]).data('student'),
                            status: -1
                        })
                    }
                }
                console.log(data);
                swal({
                    title: "Are you sure?",
                    text: "ต้องการ ยกเลิก",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#1f91f3",
                    confirmButtonText: "ใช่!",
                    confirmButtonColor: "#1f91f3",
                    cancelButtonText: "ยกเลิก!",                    
                    closeOnConfirm: false,
                    showLoaderOnConfirm: true
                }, function () {
                    $.post("<?php echo base_url() ?>/index.php/HomeAdmin/updateStatus_r", { data: data }, function(res){
                        swal("อนุมัติสำเร็จ!", "รายละเอียดถูกบันทึกเรียบร้อย", "success")
                        LoadData()         
                    })
                });
            })
            
            $('select[name=subject]').change(function(){
                LoadData();
            })
        })
    </script>

    <!-- Custom Js -->
    <script src="<?php echo base_url() ?>/js/admin.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url() ?>/js/demo.js"></script>
</body>

</html>