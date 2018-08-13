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
    @media print { 
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
                                จัดการเอกสาร
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
                                                <option data-credit="<?=$x->Subject_credit?>" data-normal="<?=$x->GroupNomal?>" data-special="<?=$x->GroupSpecial?>" value="<?=$x->Subject_id?>"><?=$x->Subject_id.' '.$x->Subject_name?></option>
                                            <?php } ?>
                                            ?>
                                            </select>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <p></p>
                                                <button type="button" name="btnpdf" class="btn btn-sm btn-default m-t-20 waves-effect">บันทึกข้อวคาม</button>
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
                <p style="text-indent: 4em;">ด้วยคณบดีวิทยาการสารสนเทศ มหาวิทยาลัยบูรพา ได้เปิดสอนรายวิชา <span name="doc_subject"></span> <span id="doc_credit"></span> ในภาคเรียนที่  <span name="doc_semester"></span>
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

            var loadWork = function(){
                var data = {
                    Subject_id: $('#subject').val()
                }
                // doc
                var doc_subject = toThainum($('#subject option:selected').text())
                $('span[name=doc_subject]').html(doc_subject)
                if($('#subject option:selected').data('normal')){
                    var txt = 'ภาคปกติจำนวน '
                    txt += toThainum(Number($('#subject option:selected').data('normal')).toLocaleString())
                    txt += ' กลุ่ม'
                    $('#doc_normal').html(txt)
                }
                if($('#subject option:selected').data('special')){
                    var txt = 'ภาคพิเศษจำนวน '
                    txt += toThainum(Number($('#subject option:selected').data('special')).toLocaleString())
                    txt += ' กลุ่ม'
                    $('#doc_special').html(txt)                    
                }
                if($('#subject option:selected').data('credit')){
                    var txt = 'จำนวน '
                    txt += toThainum($('#subject option:selected').data('credit'))
                    $('#doc_credit').html(txt)                    
                }
                $.post('<?=base_url()?>index.php/table/loadStudentWork', {data: data}, function(res){
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
                mywindow.document.write('<html><head><title></title><meta charset="UTF-8">');
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