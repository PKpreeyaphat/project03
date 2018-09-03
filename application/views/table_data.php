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

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url() ?>/css/themes/all-themes.css" rel="stylesheet" />

    <!-- Select2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

    <style>
    table.dataTable tbody>tr.selected,table.dataTable tbody>tr>.selected{background-color:#B0BED9}table.dataTable.stripe tbody>tr.odd.selected,table.dataTable.stripe tbody>tr.odd>.selected,table.dataTable.display tbody>tr.odd.selected,table.dataTable.display tbody>tr.odd>.selected{background-color:#acbad4}table.dataTable.hover tbody>tr.selected:hover,table.dataTable.hover tbody>tr>.selected:hover,table.dataTable.display tbody>tr.selected:hover,table.dataTable.display tbody>tr>.selected:hover{background-color:#aab7d1}table.dataTable.order-column tbody>tr.selected>.sorting_1,table.dataTable.order-column tbody>tr.selected>.sorting_2,table.dataTable.order-column tbody>tr.selected>.sorting_3,table.dataTable.order-column tbody>tr>.selected,table.dataTable.display tbody>tr.selected>.sorting_1,table.dataTable.display tbody>tr.selected>.sorting_2,table.dataTable.display tbody>tr.selected>.sorting_3,table.dataTable.display tbody>tr>.selected{background-color:#acbad5}table.dataTable.display tbody>tr.odd.selected>.sorting_1,table.dataTable.order-column.stripe tbody>tr.odd.selected>.sorting_1{background-color:#a6b4cd}table.dataTable.display tbody>tr.odd.selected>.sorting_2,table.dataTable.order-column.stripe tbody>tr.odd.selected>.sorting_2{background-color:#a8b5cf}table.dataTable.display tbody>tr.odd.selected>.sorting_3,table.dataTable.order-column.stripe tbody>tr.odd.selected>.sorting_3{background-color:#a9b7d1}table.dataTable.display tbody>tr.even.selected>.sorting_1,table.dataTable.order-column.stripe tbody>tr.even.selected>.sorting_1{background-color:#acbad5}table.dataTable.display tbody>tr.even.selected>.sorting_2,table.dataTable.order-column.stripe tbody>tr.even.selected>.sorting_2{background-color:#aebcd6}table.dataTable.display tbody>tr.even.selected>.sorting_3,table.dataTable.order-column.stripe tbody>tr.even.selected>.sorting_3{background-color:#afbdd8}table.dataTable.display tbody>tr.odd>.selected,table.dataTable.order-column.stripe tbody>tr.odd>.selected{background-color:#a6b4cd}table.dataTable.display tbody>tr.even>.selected,table.dataTable.order-column.stripe tbody>tr.even>.selected{background-color:#acbad5}table.dataTable.display tbody>tr.selected:hover>.sorting_1,table.dataTable.order-column.hover tbody>tr.selected:hover>.sorting_1{background-color:#a2aec7}table.dataTable.display tbody>tr.selected:hover>.sorting_2,table.dataTable.order-column.hover tbody>tr.selected:hover>.sorting_2{background-color:#a3b0c9}table.dataTable.display tbody>tr.selected:hover>.sorting_3,table.dataTable.order-column.hover tbody>tr.selected:hover>.sorting_3{background-color:#a5b2cb}table.dataTable.display tbody>tr:hover>.selected,table.dataTable.display tbody>tr>.selected:hover,table.dataTable.order-column.hover tbody>tr:hover>.selected,table.dataTable.order-column.hover tbody>tr>.selected:hover{background-color:#a2aec7}table.dataTable tbody td.select-checkbox,table.dataTable tbody th.select-checkbox{position:relative}table.dataTable tbody td.select-checkbox:before,table.dataTable tbody td.select-checkbox:after,table.dataTable tbody th.select-checkbox:before,table.dataTable tbody th.select-checkbox:after{display:block;position:absolute;top:1.2em;left:50%;width:12px;height:12px;box-sizing:border-box}table.dataTable tbody td.select-checkbox:before,table.dataTable tbody th.select-checkbox:before{content:' ';margin-top:-6px;margin-left:-6px;border:1px solid black;border-radius:3px}table.dataTable tr.selected td.select-checkbox:after,table.dataTable tr.selected th.select-checkbox:after{content:'\2714';margin-top:-11px;margin-left:-4px;text-align:center;text-shadow:1px 1px #B0BED9, -1px -1px #B0BED9, 1px -1px #B0BED9, -1px 1px #B0BED9}div.dataTables_wrapper span.select-info,div.dataTables_wrapper span.select-item{margin-left:0.5em}@media screen and (max-width: 640px){div.dataTables_wrapper span.select-info,div.dataTables_wrapper span.select-item{margin-left:0;display:block}}
    table > thead >tr > th {
        background-color: #00a968;
        color: white;
    }
    table > tbody tr > th{
        background-color: #A0A0A0;
        color: white;
    }
    #tb > tbody > tr > td {
        cursor: pointer;
    }
    </style>
</head>

<body class="theme-maroon">
    <!-- Page Loader -->
    <div class="wrapper">
        <?php require_once 'header.php';?>
        <?php require_once 'sidebar_admin.php';?>
    </div>
    <!-- #END# Page Loader -->
    <div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>จัดตารางการทำงาน TA ปีการศึกษา <?=($semester != null) ? $semester->Semester_Year : "" ?> ภาคเรียนที่ <?=($semester != null) ? $semester->Semester_Name : "" ?></h2>
                        </div>
                        <br>
                        <div class="container-fluid">
                            <div class="row clearfix">
                                <div class="col-md-3">
                                    <p>
                                        <b>เลือกรายวิชา :</b>
                                    </p>
                                    <select class="form-control show-tick" id="subject">
                                    <option>———กรุณาเลือก———</option>
                                    <?php foreach ($subject as $x) { ?>
                                        <option value="<?=$x->Subject_id?>"><?=$x->Subject_id.' '.$x->Subject_name?></option>
                                    <?php } ?>
                                    ?>
                                    </select>

                                </div>
                                <div class="col-md-3">
                                    <p>
                                        <b>เลือกห้อง :</b>
                                    </p>
                                    <select class="form-control show-tick" id="room">
                                    <option>———กรุณาเลือก———</option>
                                    </select>

                                </div>
                                <div class="col-md-4">
                                    <p>
                                        <b>เลือกผู้รับผิดชอบ :</b>
                                    </p>
                                    <select class="form-control show-tick" id="student">
                                    <option value=''>———กรุณาเลือก———</option>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <h6>สีเทา = วัน-เวลาว่างของนิสิตตรงกับวัน-เวลาที่มีเรียน **สามารถลงได้**</h6>
                                <h6>สีแดง = วัน-เวลาของนิสิตไม่ตรงกับวัน-เวลาที่มีเรียน **ไม่สามารถลงได้**</h6>
                                <h6>สีฟ้า = นิสิตลงวัน-เวลาที่เลือกแค่คนเดียว **มีที่ว่างอีก 1 คน**</h6>
                                <h6>สีเขียว = นิสิตของกลุ่มที่ต้องการเต็มแล้ว</h6>
                            </div>
                        </div>    
                        <div id="loadTable">
                            <div class="body table-responsive">
                                <table id="tb" class="table table-bordered display dataTable with-check">
                                    <thead>
                                        <tr>
                                        <th><center>วัน-เวลา</th>
                                            <th><center>08.00-09.50</th>
                                            <th><center>10.00-11.50</th>
                                            <th><center>12.00-13.00</th>
                                            <th><center>13.00-14.50</th>
                                            <th><center>15.00-16.50</th>
                                            <th><center>17.00-18.50</th>
                                            <th><center>19.00-20.50</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr data-day="1">
                                            <th>จันทร์</th>
                                            <td data-start="08.00" data-end="09.50"></td>
                                            <td data-start="10.00" data-end="11.50"></td>
                                            <td data-start="12.00" data-end="13.00"></td>
                                            <td data-start="13.00" data-end="14.50"></td>
                                            <td data-start="15.00" data-end="16.50"></td>
                                            <td data-start="17.00" data-end="18.50"></td>
                                            <td data-start="19.00" data-end="20.50"></td>
                                        </tr>
                                        <tr data-day="2">
                                            <th>อังคาร</th>
                                            <td data-start="08.00" data-end="09.50"></td>
                                            <td data-start="10.00" data-end="11.50"></td>
                                            <td data-start="12.00" data-end="13.00"></td>
                                            <td data-start="13.00" data-end="14.50"></td>
                                            <td data-start="15.00" data-end="16.50"></td>
                                            <td data-start="17.00" data-end="18.50"></td>
                                            <td data-start="19.00" data-end="20.50"></td>
                                        </tr>
                                        <tr data-day="3">
                                            <th>พุธ</th>
                                            <td data-start="08.00" data-end="09.50"></td>
                                            <td data-start="10.00" data-end="11.50"></td>
                                            <td data-start="12.00" data-end="13.00"></td>
                                            <td data-start="13.00" data-end="14.50"></td>
                                            <td data-start="15.00" data-end="16.50"></td>
                                            <td data-start="17.00" data-end="18.50"></td>
                                            <td data-start="19.00" data-end="20.50"></td>
                                        </tr>
                                        <tr data-day="4">
                                            <th>พฤหัสบดี</th>
                                            <td data-start="08.00" data-end="09.50"></td>
                                            <td data-start="10.00" data-end="11.50"></td>
                                            <td data-start="12.00" data-end="13.00"></td>
                                            <td data-start="13.00" data-end="14.50"></td>
                                            <td data-start="15.00" data-end="16.50"></td>
                                            <td data-start="17.00" data-end="18.50"></td>
                                            <td data-start="19.00" data-end="20.50"></td>
                                        </tr>
                                        <tr data-day="5">
                                            <th>ศุกร์</th>
                                            <td data-start="08.00" data-end="09.50"></td>
                                            <td data-start="10.00" data-end="11.50"></td>
                                            <td data-start="12.00" data-end="13.00"></td>
                                            <td data-start="13.00" data-end="14.50"></td>
                                            <td data-start="15.00" data-end="16.50"></td>
                                            <td data-start="17.00" data-end="18.50"></td>
                                            <td data-start="19.00" data-end="20.50"></td>
                                        </tr>
                                        <tr data-day="6">
                                            <th>เสาร์</th>
                                            <td data-start="08.00" data-end="09.50"></td>
                                            <td data-start="10.00" data-end="11.50"></td>
                                            <td data-start="12.00" data-end="13.00"></td>
                                            <td data-start="13.00" data-end="14.50"></td>
                                            <td data-start="15.00" data-end="16.50"></td>
                                            <td data-start="17.00" data-end="18.50"></td>
                                            <td data-start="19.00" data-end="20.50"></td>
                                        </tr>
                                        <tr data-day="0">
                                            <th>อาทิตย์</th>
                                            <td data-start="08.00" data-end="09.50"></td>
                                            <td data-start="10.00" data-end="11.50"></td>
                                            <td data-start="12.00" data-end="13.00"></td>
                                            <td data-start="13.00" data-end="14.50"></td>
                                            <td data-start="15.00" data-end="16.50"></td>
                                            <td data-start="17.00" data-end="18.50"></td>
                                            <td data-start="19.00" data-end="20.50"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <center><button name="btnsave" type="button" class="btn btn-success m-t-15 waves-effect">ยืนยัน</button>
                                <button type="reset" class="btn btn-danger m-t-15 waves-effect">ยกเลิก</button></center>
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

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="<?php echo base_url() ?>/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script type="text/javascript">
        function loadTable(){
            $.post('table/loadTable',{Room_id:""+$('select#room').val()+""},function(res){
                $('div#loadTable').html(res);
            });
        }

        $(function(){
            var time = {
                1:{}, 
                2:{},
                3:{},
                4:{},
                5:{},
                6:{},
                0:{}
            },
            mapDayWeek = {'MO': 1, 'TU': 2, 'WE': 3, 'TH': 4, 'FR': 5, 'SA': 6, 'SU': 0}
            
            var resetTime = function(learn = true, student = true){
                if(learn && student){
                    for(var day in time){
                        time[day] = {
                            '08.00-09.50': { Room: {}, isLearn: false, studentIsFree: false, register: {} }, 
                            '10.00-11.50': { Room: {}, isLearn: false, studentIsFree: false, register: {} }, 
                            '12.00-13.00': { Room: {}, isLearn: false, studentIsFree: false, register: {} }, 
                            '13.00-14.50': { Room: {}, isLearn: false, studentIsFree: false, register: {} }, 
                            '15.00-16.50': { Room: {}, isLearn: false, studentIsFree: false, register: {} }, 
                            '17.00-18.50': { Room: {}, isLearn: false, studentIsFree: false, register: {} }, 
                            '19.00-20.50': { Room: {}, isLearn: false, studentIsFree: false, register: {} }
                        }
                    }
                }
                else if (learn){
                    for(var day in time){
                        for(var t in time[day]){
                            time[day][t].isLearn = false
                            time[day][t].Room = {}
                        }
                    }
                }
                else if (student){
                    for(var day in time){
                        for(var t in time[day]){
                            time[day][t].studentIsFree = false
                        }
                    }
                }
            }
            var loadFreeTime = function(){
                var student  = $('#student').val(),
                    subject = $('#subject').val()
                if(student && subject){
                    var data = {
                        Subject_id: subject,
                        Student_id: student
                    }
                    $.post('table/loadFreeTime', {data: data}, function(res){
                        res = JSON.parse(res)
                        for(var i in res){
                            res[i].Start = convertime(res[i].Start)
                            res[i].End = convertime(res[i].End)
                            var time_str = res[i].Start + '-' + res[i].End
                            if(time[res[i].DayofWeek][time_str]){
                                time[res[i].DayofWeek][time_str].studentIsFree = true
                            }
                        }
                        draw()
                    })
                }
                else{
                    draw()
                }
            },
            loadWork_tmp = function(){
                var data = {
                    Subject_id: $('#subject').val()
                }
                $.post('table/loadStudentWork_tmp', {data: data}, function(res){
                    res = JSON.parse(res)
                    for(var i in res){
                        res[i].Section_start_time = convertime(res[i].Section_start_time)
                        res[i].Section_end_time = convertime(res[i].Section_end_time)
                        var time_str = res[i].Section_start_time + '-' + res[i].Section_end_time
                        var sh_time = time[mapDayWeek[res[i].Section_day]][time_str]
                        if(!sh_time.register[res[i].Student_id]){
                            sh_time.register[res[i].Student_id] = { 
                                Name: res[i].Student_firstname + ' ' + res[i].Student_lastname,
                                Section_id: res[i].Section_id,
                                subject: res[i].Subject_id,
                                Room_id: res[i].Room_id,
                                Room_name: res[i].Room_name
                            }
                        }
                    }
                    loadFreeTime()
                })
            },
            loadSection = function(){
                var data = {
                    Subject_id: $('#subject').val(),
                    Room_id: $('#room').val()
                }
                $.post('table/loadSection', {data: data}, function(res){
                    res = JSON.parse(res)
                    for(var i in res){
                        res[i].Section_start_time = convertime(res[i].Section_start_time)
                        res[i].Section_end_time = convertime(res[i].Section_end_time)
                        var time_str = res[i].Section_start_time + '-' + res[i].Section_end_time
                        time[mapDayWeek[res[i].Section_day]][time_str].isLearn = true
                        if(!time[mapDayWeek[res[i].Section_day]][time_str].Room[res[i].Room_id])
                            time[mapDayWeek[res[i].Section_day]][time_str].Room[res[i].Room_id] = []
                        time[mapDayWeek[res[i].Section_day]][time_str].Room[res[i].Room_id].push(
                            { 
                                Section_id: res[i].Section_id,
                                Qty: res[i].Section_student_quantity
                            })
                    }
                    loadWork_tmp()
                })
            },
            convertime = function(fromtime){
                var rs = fromtime
                if(fromtime.indexOf(':') != -1) {
                    // 09:00 -> 09.00
                    rs = fromtime.replace(':','.')
                }
                else {
                    // 9.00 -> 09.00
                    var time_r = fromtime.split('.')
                    var tmp = '0' + time_r[0]
                    rs = tmp.substr(tmp.length - 2) + '.' + time_r[1]
                }
                return rs
            },
            draw = function(){
                var student = $('#student').val()
                var sel_room = $('#room').val()
                for(var day in  time){
                    for(var t in time[day]){
                        var t_r = t.split('-')
                        if(time[day][t]){
                            var td = $('tr[data-day='+day+']').find('td[data-start="'+t_r[0]+'"][data-end="'+t_r[1]+'"]'),
                                data = time[day][t]
                            var text_r = [], i = 0, isBusy = false
                            var duplicate = {}
                            var dict_room = {}
                            for(var stu in data.register){
                                if(sel_room == 'All' || sel_room == data.register[stu].Room_id){
                                    if(data.register[stu].Name == null)
                                    return
                                    if(!duplicate[data.register[stu].Room_id]){
                                        for(var rm in data.Room[data.register[stu].Room_id]){
                                            var r = data.Room[data.register[stu].Room_id][rm]
                                            text_r.push('<b>'+((sel_room == 'All')? data.register[stu].Room_name : '')+ ' กลุ่ม ' + r.Section_id + '  (' + r.Qty + ' คน)</b><br>')
                                            dict_room[data.register[stu].Room_name] = 
                                            { 
                                                text: '<b>'+((sel_room == 'All')? data.register[stu].Room_name : '')+ ' กลุ่ม ' + r.Section_id + '  (' + r.Qty + ' คน)</b><br>',
                                                register: []
                                            }
                                        }
                                        duplicate[data.register[stu].Room_id] = true
                                    }
                                    var html_stu = (stu == student)?  
                                        '<span style="color: blue;">'+stu + ' ('+data.register[stu].Name+')</span>' : 
                                        stu + ' ('+data.register[stu].Name+')'
                                    dict_room[data.register[stu].Room_name].register.push(html_stu + '<br>')
                                    i++
                                    text_r.push(html_stu + '<br>')
                                }
                                else if(stu == student){
                                    isBusy = true
                                }
                            }
                            if(text_r.length > 0){
                                for(var rm in data.Room[sel_room]){
                                    var r = data.Room[sel_room][rm]
                                    text_r.unshift('กลุ่ม ' + r.Section_id + ' (' + r.Qty + ' คน)<br>')
                                }
                            }
                            var txt = '', isFull = false
                            for(var r in dict_room){
                                txt += dict_room[r].text
                                txt += dict_room[r].register.join('')
                                if(dict_room[r].register.length == 2)
                                {
                                    isFull = true
                                }
                            }
                            td.html(txt)
                            td.css('background-color', '')
                            if(isBusy){
                                // แดง
                                td.css('background-color', '#ff7878')
                            }
                            else if(sel_room != 'All' && isFull){
                                // เขียว
                                td.css('background-color', '#70D09D')
                            }
                            else if(data.isLearn && data.studentIsFree && data.register[student]){
                                // ฟ้า
                                td.css('background-color', '#99d4ff')
                            }
                            else if(data.isLearn && data.studentIsFree){
                                // เทา
                                td.css('background-color', '#cacaca')
                            }
                            else if(data.isLearn){
                                // แดง
                                td.css('background-color', '#ff7878')
                            }
                        }
                    }
                }
            }

            resetTime()
            $('#subject').select2({
                matcher: matchCustom
            })
            $('#room').select2({
                matcher: matchCustom
            })
            $('#student').select2({
                matcher: matchCustom
            })

            $('#tb').on('click', 'tbody > tr > td', function(){
                if($('#room').val() == 'All' || !$('#room').val())
                    return
                var day = $(this).parents('tr').data('day')
                var t = $(this).data('start') + '-' + $(this).data('end'),
                    student = $('#student').val()
                if(time[day][t] && time[day][t].studentIsFree){
                    var data = {
                        Student_id: student,
                        Section_id: time[day][t].Room[$('#room').val()][0].Section_id,
                        Subject_id: $('#subject').val(),
                        Room_id: $('#room').val(),
                        Room_name: $('#room option:selected').data('name')
                    }, json = {
                        Student_id: student,
                        Section_id: time[day][t].Room[$('#room').val()][0].Section_id,
                        Subject_id: $('#subject').val()
                    }
                    $('button[name=btnsave]').prop('disabled', true)
                    $('button[name=btnsave]').html('ยืนยัน')
                    if(!time[day][t].register[student]){
                        // add
                        $.post('table/saveStudentWork_tmp', {data: json}, function(res){
                            res = JSON.parse(res)
                            if(res.isError){
                                swal('Warning', res.Message, 'error')
                            }
                            else{
                                time[day][t].register[student] = { 
                                    Section_id: data.Section_id,
                                    subject: data.Subject_id,
                                    Room_id: data.Room_id,
                                    Room_name: data.Room_name
                                }
                                draw()
                            }
                            $('button[name=btnsave]').prop('disabled', false)
                        })
                    }
                    else{
                        // remove
                        if(time[day][t].register[student].Room_id != $('#room').val()){
                            swal('Warning', 'ไม่สามารถลงได้', 'error')
                            $('button[name=btnsave]').prop('disabled', false)
                            return
                        }
                        data.Section_id = time[day][t].register[student].Section_id
                        data.Subject_id = time[day][t].register[student].subject
                        $.post('table/removeStudentWork_tmp', {data: data}, function(res){
                            delete time[day][t].register[student]
                            draw()
                            $('button[name=btnsave]').prop('disabled', false)
                        })
                    }
                    $('#subject').trigger('change')
                }
                else if(time[day][t] && time[day][t].isLearn){
                    swal('Warning', 'ไม่สามารถลงได้', 'error')
                }
            })

            $('button[name=btnfresh]').click(function(){
                $('#room').trigger('change')
            })

            $(window).keypress(function(event) {
                if (!(event.which == 115 && event.ctrlKey) && !(event.which == 19)) return true;
                $('button[name=btnsave]').trigger('click')
                event.preventDefault();
                return false;
            })

            $('button[name=btnsave]').click(function(){
                if($('button[name=btnsave]').prop('disabled'))
                    return
                var data = {
                    Subject_id: $('#subject').val()
                }
                swal({
                    title: "Are you sure?",
                    text: "ต้องการยืนยัน",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#1f91f3",
                    confirmButtonText: "ใช่!",
                    confirmButtonColor: "#1f91f3",
                    cancelButtonText: "ยกเลิก!",                    
                    closeOnConfirm: false,
                    showLoaderOnConfirm: true
                }, function () {
                    $.post("table/saveTmptoWork", { data: data }, function(data){
                        swal("บันทึกสำเร็จ!", "รายละเอียดถูกบันทึกเรียบร้อย", "success")             
                    })
                });
            })

            $('#student').change(function(){
                resetTime(learn = false)
                loadFreeTime()
            })

            $('#subject').change(function(){
                resetTime(student = false)
                var data = {
                    id: $(this).val()
                }
                $.post('table/loadRoom', {data: data}, function(res){
                    var sel_room = $('#room').val()
                    res = JSON.parse(res)
                    var html = '<option value="All">All</option>'
                    for(var i in res){
                        html += '<option '+((sel_room == res[i].Room_id)? 'selected': '')+' data-name="'+res[i].Room_name+'" value="'+res[i].Room_id+'">'+res[i].Room_name+' ('+res[i].Room_qty+' คน)</option>'
                    }
                    $('#room').html(html)
                    data = {
                        Subject_id: $('#subject').val()
                    }
                    $.post('table/loadStudent', {data: data}, function(res){
                        var sel_stu = $('#student').val()
                        res = JSON.parse(res)
                        var html = ''
                        for(var i in res){
                            var remain = '(เหลือ '+res[i].RemainHour+' ชม.)'
                            if(res[i].RemainHour < 0) {
                                remain = '(เกิน '+Math.abs(res[i].RemainHour)+' ชม.)'
                            }
                            html += '<option '+((sel_stu == res[i].Student_id)? 'selected': '')+' value="'+res[i].Student_id+'">'+res[i].Student_firstname+' '+res[i].Student_lastname+' '+remain+'</option>'
                        }
                        $('#student').html(html)
                        $('#room').trigger('change')
                    })
                })
            })

            $('#room').change(function(){
                resetTime()
                loadSection()
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
    <script src="<?php echo base_url() ?>/js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url() ?>/js/demo.js"></script>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script> -->

    

</body>

</html>