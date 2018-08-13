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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style name="print">
    @media print { 
        body {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
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
        .table  .white{
            color: white !important;
        }
        .table > caption + thead > tr:first-child > th, .table > colgroup + thead > tr:first-child > th, .table > thead:first-child > tr:first-child > th, .table > caption + thead > tr:first-child > td, .table > colgroup + thead > tr:first-child > td, .table > thead:first-child > tr:first-child > td {
            border-top: 0;
        }
        .table-bordered > thead > tr > th, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > tbody > tr > td, .table-bordered > tfoot > tr > td {
            border: 1px solid #ddd;
        }
        table {
            border-spacing: 0;
            border-collapse: collapse;
        }
        .table-bordered {
            border: 1px solid #ddd;
        }
        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 20px;
        }
        .learn{
            background-color: #C0D0FF !important;
        }
        .white{
            color: white !important;
        }
    }
    .table-doc > tbody > tr > td {
        padding-right: 20px !important;
    }
    
    .font-sarabun{
        font-family: "TH Sarabun PSK";
    }
    body{
        -webkit-print-color-adjust:exact;
    }
    .white{
        color: white !important;
    }
    table.dataTable tbody>tr.selected,table.dataTable tbody>tr>.selected{background-color:#B0BED9}table.dataTable.stripe tbody>tr.odd.selected,table.dataTable.stripe tbody>tr.odd>.selected,table.dataTable.display tbody>tr.odd.selected,table.dataTable.display tbody>tr.odd>.selected{background-color:#acbad4}table.dataTable.hover tbody>tr.selected:hover,table.dataTable.hover tbody>tr>.selected:hover,table.dataTable.display tbody>tr.selected:hover,table.dataTable.display tbody>tr>.selected:hover{background-color:#aab7d1}table.dataTable.order-column tbody>tr.selected>.sorting_1,table.dataTable.order-column tbody>tr.selected>.sorting_2,table.dataTable.order-column tbody>tr.selected>.sorting_3,table.dataTable.order-column tbody>tr>.selected,table.dataTable.display tbody>tr.selected>.sorting_1,table.dataTable.display tbody>tr.selected>.sorting_2,table.dataTable.display tbody>tr.selected>.sorting_3,table.dataTable.display tbody>tr>.selected{background-color:#acbad5}table.dataTable.display tbody>tr.odd.selected>.sorting_1,table.dataTable.order-column.stripe tbody>tr.odd.selected>.sorting_1{background-color:#a6b4cd}table.dataTable.display tbody>tr.odd.selected>.sorting_2,table.dataTable.order-column.stripe tbody>tr.odd.selected>.sorting_2{background-color:#a8b5cf}table.dataTable.display tbody>tr.odd.selected>.sorting_3,table.dataTable.order-column.stripe tbody>tr.odd.selected>.sorting_3{background-color:#a9b7d1}table.dataTable.display tbody>tr.even.selected>.sorting_1,table.dataTable.order-column.stripe tbody>tr.even.selected>.sorting_1{background-color:#acbad5}table.dataTable.display tbody>tr.even.selected>.sorting_2,table.dataTable.order-column.stripe tbody>tr.even.selected>.sorting_2{background-color:#aebcd6}table.dataTable.display tbody>tr.even.selected>.sorting_3,table.dataTable.order-column.stripe tbody>tr.even.selected>.sorting_3{background-color:#afbdd8}table.dataTable.display tbody>tr.odd>.selected,table.dataTable.order-column.stripe tbody>tr.odd>.selected{background-color:#a6b4cd}table.dataTable.display tbody>tr.even>.selected,table.dataTable.order-column.stripe tbody>tr.even>.selected{background-color:#acbad5}table.dataTable.display tbody>tr.selected:hover>.sorting_1,table.dataTable.order-column.hover tbody>tr.selected:hover>.sorting_1{background-color:#a2aec7}table.dataTable.display tbody>tr.selected:hover>.sorting_2,table.dataTable.order-column.hover tbody>tr.selected:hover>.sorting_2{background-color:#a3b0c9}table.dataTable.display tbody>tr.selected:hover>.sorting_3,table.dataTable.order-column.hover tbody>tr.selected:hover>.sorting_3{background-color:#a5b2cb}table.dataTable.display tbody>tr:hover>.selected,table.dataTable.display tbody>tr>.selected:hover,table.dataTable.order-column.hover tbody>tr:hover>.selected,table.dataTable.order-column.hover tbody>tr>.selected:hover{background-color:#a2aec7}table.dataTable tbody td.select-checkbox,table.dataTable tbody th.select-checkbox{position:relative}table.dataTable tbody td.select-checkbox:before,table.dataTable tbody td.select-checkbox:after,table.dataTable tbody th.select-checkbox:before,table.dataTable tbody th.select-checkbox:after{display:block;position:absolute;top:1.2em;left:50%;width:12px;height:12px;box-sizing:border-box}table.dataTable tbody td.select-checkbox:before,table.dataTable tbody th.select-checkbox:before{content:' ';margin-top:-6px;margin-left:-6px;border:1px solid black;border-radius:3px}table.dataTable tr.selected td.select-checkbox:after,table.dataTable tr.selected th.select-checkbox:after{content:'\2714';margin-top:-11px;margin-left:-4px;text-align:center;text-shadow:1px 1px #B0BED9, -1px -1px #B0BED9, 1px -1px #B0BED9, -1px 1px #B0BED9}div.dataTables_wrapper span.select-info,div.dataTables_wrapper span.select-item{margin-left:0.5em}@media screen and (max-width: 640px){div.dataTables_wrapper span.select-info,div.dataTables_wrapper span.select-item{margin-left:0;display:block}}
    table > thead > tr > th {
        background-color: #00a968;
        color: white;
    }
    table > tbody > tr > th{
        background-color: #A0A0A0;
        color: white;
    }
    #tb > tbody > tr > td {
        cursor: pointer;
    }
    .table > caption + thead > tr:first-child > th, .table > colgroup + thead > tr:first-child > th, .table > thead:first-child > tr:first-child > th, .table > caption + thead > tr:first-child > td, .table > colgroup + thead > tr:first-child > td, .table > thead:first-child > tr:first-child > td {
        border-top: 0;
    }
    .table-bordered > thead > tr > th, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > tbody > tr > td, .table-bordered > tfoot > tr > td {
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
                            <div class="row clearfix">
                                
                                <div class="col-lg-12 m-b-20">
                                    <h2>ตารางการทำงาน TA</h2>
                                </div>

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
                                <div class="col-md-3">
                                    <p>
                                        <b>เลือกห้อง :</b>
                                    </p>
                                    <select class="form-control show-tick" id="room">
                                    <option>———กรุณาเลือก———</option>
                                    </select>

                                </div>
                                <div class="col-md-1">
                                    <p></p>
                                    <button name="btnfresh" class="btn btn-sm btn-default m-t-20 waves-effect"><i class="material-icons">refresh</i></button>
                                </div>
                                <div class="col-md-1">
                                    <p></p>
                                    <button name="btnprint" class="btn btn-sm btn-default m-t-20 waves-effect" data-placement="right" data-toggle="tooltip" title="" data-original-title="พิมพ์">
                                        <i class="fa fa-print"></i>
                                    </button>
                                </div>
                                
                                <div class="col-md-1">
                                    <p></p>
                                    <button name="btnreport" class="btn btn-sm btn-default m-t-20 waves-effect"><i class="fa fa-file-excel-o" aria-hidden="true"></i>&nbsp; Report</button>
                                </div>
                            </div>
                        </div>
                        <div id="loadTable">
                            <div class="body table-responsive">
                                <table id="tb" class="table table-bordered display dataTable with-check">
                                    <thead>
                                        <tr>
                                            <th class="white"><center>วัน-เวลา</center></th>
                                            <th class="white"><center>08.00-09.50</center></th>
                                            <th class="white"><center>10.00-11.50</center></th>
                                            <th class="white"><center>12.00-13.00</center></th>
                                            <th class="white"><center>13.00-14.50</center></th>
                                            <th class="white"><center>15.00-16.50</center></th>
                                            <th class="white"><center>17.00-18.50</center></th>
                                            <th class="white"><center>19.00-20.50</center></th>
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
                                <table id="tb_report" class="table table-bordered" style="display: none;">
                                    <thead>
                                        <tr>
                                            <th>นิสิต</th>
                                            <th>วิชา</th>
                                            <th>กลุ่ม</th>
                                            <th>ห้อง</th>
                                            <th>วัน</th>
                                            <th>เวลา</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody_report">
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
    <script src="<?php echo base_url() ?>/js/thaibath.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.8.0/xlsx.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.8.0/jszip.js"></script>

    <script type="text/javascript">
        function loadTable(){
            $.post('table/loadTable',{Room_id:""+$('select#room').val()+""},function(res){
                $('div#loadTable').html(res);
            });
        }

        var tableToExcel = (function() {
            var uri = 'data:application/vnd.ms-excel;base64,'
                , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--><meta http-equiv="content-type" content="text/plain; charset=UTF-8"/></head><body><table>{table}</table></body></html>'
                , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
                , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
            return function(table, name) {
                if (!table.nodeType) table = document.getElementById(table)
                var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
                window.location.href = uri + base64(format(template, ctx))
            }
        })()

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
            loadWork = function(){
                var data = {
                    Subject_id: $('#subject').val()
                }
                $.post('table/loadStudentWork', {data: data}, function(res){
                    res = JSON.parse(res)
                    for(var i in res){
                        res[i].Section_start_time = convertime(res[i].Section_start_time)
                        res[i].Section_end_time = convertime(res[i].Section_end_time)
                        var time_str = res[i].Section_start_time + '-' + res[i].Section_end_time
                        var sh_time = time[mapDayWeek[res[i].Section_day]][time_str]
                        if(!sh_time.register[res[i].sw_Student_id]){
                            sh_time.register[res[i].sw_Student_id] = {
                                Name: res[i].Student_firstname + ' ' + res[i].Student_lastname,
                                subject: res[i].Subject_id,
                                Section_id: res[i].Section_id,
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
                    loadWork()
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
                            var text_r = [], i = 0
                            var duplicate = {}
                            var dict_room = {}
                            for(var stu in data.register){
                                if(sel_room == 'All' || sel_room == data.register[stu].Room_id){
                                    i++
                                    if(!duplicate[data.register[stu].Room_id]){
                                        for(var rm in data.Room[data.register[stu].Room_id]){
                                            var r = data.Room[data.register[stu].Room_id][rm]
                                            text_r.push('<b>'+data.register[stu].Room_name + ' กลุ่ม ' + r.Section_id + '  (' + r.Qty + ' คน)</b><br>')
                                            dict_room[data.register[stu].Room_name] = 
                                            { 
                                                text: '<b>'+data.register[stu].Room_name + ' กลุ่ม ' + r.Section_id + '  (' + r.Qty + ' คน)</b><br>',
                                                register: []
                                            }
                                        }
                                        duplicate[data.register[stu].Room_id] = true
                                    }
                                    dict_room[data.register[stu].Room_name].register.push(stu + '<br>')
                                    text_r.push(stu + '<br>')
                                }
                            }
                            var txt = ''
                            for(var r in dict_room){
                                txt += dict_room[r].text
                                txt += dict_room[r].register.join('')
                            }
                            td.html(txt)
                            td.css('background-color', '')
                            if(data.isLearn && data.studentIsFree && data.register[student]){
                                // ฟ้า
                                td.css('background-color', '#C0D0FF')
                            }
                            else if(data.isLearn && data.studentIsFree){
                                // เทา
                                td.css('background-color', '#C0D0FF')
                            }
                            else if(data.isLearn){
                                // แดง
                                td.css('background-color', '#C0D0FF')
                            }
                        }
                    }
                }
            }

            resetTime()

            $('button[name=btnprint]').click(function(){
                var mywindow = window.open('', 'new div', 'height=400,width=600');
                mywindow.document.write('<html><head><meta charset="UTF-8"><title></title>');
                mywindow.document.write('<style>'+$('style[name=print]').html()+ '</style><style type="text/css" media="print">@page { size: landscape; }</style>');
                mywindow.document.write('<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">')
                mywindow.document.write('<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">')
                mywindow.document.write('</head><body onload="window.print();window.close();">');
                mywindow.document.write($('.body.table-responsive').html());
                mywindow.document.write('</body></html>');
                mywindow.document.close();
                mywindow.focus();

                return true;
            })

            $('button[name=btnreport]').click(function(){
                var html = '', data = {},
                    Day = {0: 'อาทิตย์', 1: 'จันทร์', 2 :'อังคาร', 3: 'พุธ', 4: 'พฤหัส', 5:'ศุกร์', 6:'เสาร์'}
                var sel_room = $('#room').val()
                for(var day in time){
                    for(var t in time[day]){
                        for(var stu in time[day][t].register){
                            var regis = time[day][t].register[stu]
                            if(sel_room == 'All' || regis.Room_id == sel_room){
                                if(!data[stu]){
                                    data[stu] = []
                                }
                                data[stu].push({ 
                                    student_id: stu,
                                    Name: regis.Name,
                                    Section_id: regis.Section_id,
                                    Subject: regis.subject,
                                    Room_name: regis.Room_name,
                                    Day: Day[day],
                                    Time: t
                                })
                            }
                        }
                    }
                }
                for(var stu in data){
                    var pre_stu = '', post_stu = ''
                    var pre_subj = '', post_subj = ''
                    for(var i in data[stu]){
                        var txt_stu = ''
                        var txt_subj = ''
                        var regis = data[stu][i]
                        pre_stu = stu;
                        pre_subj = regis.Subject
                        if(pre_subj != post_subj)
                            txt_subj = regis.Subject
                        if(pre_stu != post_stu)
                            txt_stu = stu+' '+regis.Name

                        html += '<tr><td>'+txt_stu+'</td>'+
                            '<td>'+txt_subj+'</td>'+
                            '<td>'+regis.Section_id+'</td>'+
                            '<td>'+regis.Room_name+'</td>'+
                            '<td>'+regis.Day+'</td>'+
                            '<td>'+regis.Time+'</td></tr>'
                        post_stu = stu
                        post_subj = regis.Subject
                    }
                }
                $('#tbody_report').html(html)
                var mywindow = window.open('', 'new div', 'height=400,width=600');
                mywindow.document.write('<html><meta charset="UTF-8"><head><title></title>');
                mywindow.document.write('<style>'+$('style[name=print]').html()+ '</style><style type="text/css" media="print">@page { size: landscape; }</style>');
                mywindow.document.write('<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">')
                mywindow.document.write('<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">')
                mywindow.document.write('</head><body onload="window.print();window.close();">');
                mywindow.document.write('<table class="table table-bordered">'+$('#tb_report').html() + '</table>');
                mywindow.document.write('</body></html>');
                mywindow.document.close();
                mywindow.focus();

                return true;
                //tableToExcel('tb_report', 'ตารางการทำงาน TA')
            })

            $('button[name=btnfresh]').click(function(){
                $('#subject').trigger('change')
            })

            $('#subject').change(function(){
                resetTime(student = false)
                var data = {
                    id: $(this).val()
                }
                $.post('table/loadRoom', {data: data}, function(res){
                    res = JSON.parse(res)
                    var html = '<option value="All">All</option>'
                    for(var i in res){
                        html += '<option data-name="'+res[i].Room_name+'" value="'+res[i].Room_id+'">'+res[i].Room_name+' ('+res[i].Room_qty+' คน)</option>'
                    }
                    $('#room').html(html)
                    data = {
                        Subject_id: $('#subject').val()
                    }
                    $.post('table/loadStudent', {data: data}, function(res){
                        res = JSON.parse(res)
                        var html = ''
                        for(var i in res){
                            html += '<option value="'+res[i].Student_id+'">'+res[i].Student_firstname+' '+res[i].Student_lastname+'</option>'
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