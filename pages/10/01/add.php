<!DOCTYPE html>
<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-footer-fixed" dir="ltr" data-theme="theme-bordered" data-assets-path="/webDNP/assets/" data-template="vertical-menu-template">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>ระบบฐานข้อมูลเพื่อการตัดสินใจในการบริหารจัดการอุทยานแห่งชาติ</title>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="/webDNP/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="/webDNP/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="/webDNP/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/webDNP/assets/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" type="text/css" href="/webDNP/assets/css/theme-bordered.css" class="template-customizer-theme-css">
    <link rel="stylesheet" href="/webDNP/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/webDNP/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/webDNP/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="/webDNP/assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="/webDNP/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />
    <link rel="stylesheet" href="/webDNP/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet" href="/webDNP/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
    <link rel="stylesheet" href="/webDNP/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css">
    <!--<link rel="stylesheet" href="/webDNP/assets/vendor/libs/jquery-datetime-picker/jquery.datetimepicker.min.css">-->
    <link rel="stylesheet" href="/webDNP/assets/css/my_style.css" />
    <!-- Page CSS -->
    
    <!-- Helpers -->
    <script src="/webDNP/assets/js/helpers.js"></script>
    <script src="/webDNP/assets/js/template-customizer.js"></script>
    <script src="/webDNP/assets/js/config.js"></script>

    
</head>
<body>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
            <!-- Left Menu -->
            <!-- Menu -->
        <div id="leftMenu"></div>
        <script src="/webDNP/assets/js/leftMenu.js"></script>
            
<!-- / Menu -->            <!-- / Left Menu -->

<!-- Layout container -->
<div class="layout-page">
    <!-- Navbar -->
    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
<div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
<a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
<i class="bx bx-menu bx-sm"></i>
</a>
</div>

<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">


<div class="navbar-nav align-items-center">
<div class="nav-item navbar-search-wrapper mb-0">
        <img src="/webDNP/assets/img/logo/logo-dnp.png" width="45" height="45">
        <span class="d-none d-md-inline-block"><h6>ระบบฐานข้อมูลเพื่อการตัดสินใจในการบริหารจัดการอุทยานแห่งชาติ</h6></span>
</div>
</div> 

<ul class="navbar-nav flex-row align-items-center ms-auto">

</ul>
</div>

<!-- Search Small Screens -->
<div class="navbar-search-wrapper search-input-wrapper  d-none">
<input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
<i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
</div>

</nav>                <!-- / Navbar -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h6 class="fw-bold">
<span class="text-muted fw-light">ข้อมูลครุภัณฑ์คอมพิวเตอร์ /</span> เพิ่มข้อมูล</h6>

<div class="card">
<div class="card-header d-flex align-items-center justify-content-between">
<h5 class="mb-0">เพิ่มข้อมูลครุภัณฑ์คอมพิวเตอร์</h5>
</div>
<!-- <hr class="my-0 mx-0" /> -->
<div class="card-body">
        <form method="POST" id="form_risk_report" enctype="multipart/form-data">
    <div class="row">

    <div class="mb-3 col-md-6">
            <label class="fw-bold">สำนักบริหารพื้นที่อนุรักษ์<small class="text-danger ms-1">*</small></label>
            <select id="ddl_pta_code" name="ddl_pta_code" class="select2 form-select">
                <option value="">-- เลือกหน่วยงาน --</option>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/webDNP/select_head.php'; ?>
            </select>
        </div>

        <div></div>

<div class="mb-3 col-md-6">
    <label class="fw-bold">ประเภทหน่วยงาน<small class="text-danger ms-1">*</small></label>
    <select id="ddl_pta_code" name="ddl_pta_code" class="select2 form-select">
        <option value="">-- เลือกประเภท --</option>
        <option value="national_park">อุทยานแห่งชาติ</option>
        <option value="forest_park">วนอุทยาน</option>
        <!-- เพิ่มตัวเลือกอื่น ๆ ได้ที่นี่ -->
    </select>
</div>

        <div class="mb-3 col-md-6">
            <label class="fw-bold">หน่วยงาน<small class="text-danger ms-1">*</small></label>
            <select id="ddl_pta_code" name="ddl_pta_code" class="select2 form-select">
                <option value="">-- เลือกหน่วยงาน --</option>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/webDNP/select_park.php'; ?>
            </select>
        </div>

        <div></div>

<div class="mb-3 col-md-6">
    <label class="fw-bold">ปี พ.ศ. ที่ได้รับ<small class="text-danger ms-1">*</small></label>
    <input class="form-control" type="text" id="txt_riskreportyear" name="txt_riskreportyear" placeholder="ปี พ.ศ." maxlength="4" oninput="checkYear(this)">
    <div id="yearError" class="text-danger" style="display: none;">กรุณากรอกปี พ.ศ. ในรูปแบบ 25XX</div>
</div>

<script>
function checkYear(input) {
    const value = input.value;
    // เช็คว่าเป็นปีที่เริ่มต้นด้วย 25 และตามด้วยเลข 2 หลัก
    if (/^25\d{0,2}$/.test(value) || value === "") {
        input.style.borderColor = ""; // Reset border color
        document.getElementById("yearError").style.display = "none"; // Hide error message
    } else {
        input.style.borderColor = "red"; // Highlight invalid input
        document.getElementById("yearError").style.display = "block"; // Show error message
    }}
</script>


<div class="mb-3 col-md-6">
            <label class="fw-bold">ประเภทครุภัณฑ์คอมพิวเตอร์<small class="text-danger ms-1">*</small></label>
            <select id="type_com" name="type_com" class="select2 form-select">
                <option value="">-- เลือกหน่วยงาน --</option>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/webDNP/select_com.php'; ?>
            </select>
        </div>

        <div class="mb-3 col-md-6">
            <label class="fw-bold">พิกัด Latitude</label>
            <input class="form-control" type="text" id="txt_x" name="txt_x" placeholder="พิกัด ละติจูด เหนือ" value="0" />
        </div>
        <div class="mb-3 col-md-6">
            <label class="fw-bold">พิกัด Longitude</label>
            <input class="form-control" type="text" id="txt_y" name="txt_y" placeholder="พิกัด ลองจิจูด ตะวันออก" value="0" />
        </div>

        <div class="mb-3 col-md-6">
            <label class="fw-bold">ประเภทของอุบัติเหตุ/ภัยพิบัติ<small class="text-danger ms-1">*</small></label>
            <select id="ddl_accidenttypeid" name="ddl_accidenttypeid" class="select2 form-select">
                <option value="">-- เลือกประเภทของอุบัติเหตุ/ภัยพิบัติ --</option>
                <option value="01" >พาหนะทางบก</option><option value="02" >พาหนะทางน้ำ</option><option value="03" >สัตว์</option><option value="04" >ตกจากที่สูง</option><option value="05" >จมน้ำ</option><option value="06" >อื่นๆ</option>                        </select>
        </div>
        <div class="mb-3 col-md-6">
            <label class="fw-bold">ความเกี่ยวพันกับเครื่องดื่มแอลกอฮอล์<small class="text-danger ms-1">*</small></label>
            <!-- <div class="col">ไม่เกี่ยวพัน</div> -->
            <div class="col-md">
                <div class="form-check form-check-inline mt-3">
                    <input class="form-check-input" type="radio" name="rdo_riskreportalgohol" id="rdo_riskreportalgohol1" value="y"  />
                    <label class="form-check-label" for="rdo_riskreportalgohol1">เกี่ยวพัน</label>
                </div>
                <div class="form-check form-check-inline mt-3">
                    <input class="form-check-input" type="radio" name="rdo_riskreportalgohol" id="rdo_riskreportalgohol2" value="n"  />
                    <label class="form-check-label" for="rdo_riskreportalgohol2">ไม่เกี่ยวพัน</label>
                </div>
            </div>
        </div>

        <div class="mb-3 col-md-6">
            <label class="fw-bold">จำนวนผู้บาดเจ็บเล็กน้อย</label>
            <div class="input-group input-group-merge">
                <input type="text" class="form-control" id="txt_riskreportinjureminor" name="txt_riskreportinjureminor" placeholder="จำนวนผู้บาดเจ็บเล็กน้อย" value="0" />
                <span class="input-group-text">คน</span>
            </div>
        </div>
        <div class="mb-3 col-md-6">
            <label class="fw-bold">จำนวนผู้บาดเจ็บสาหัส</label>
            <div class="input-group input-group-merge">
                <input type="text" class="form-control" id="txt_riskreportinjurebad" name="txt_riskreportinjurebad" placeholder="จำนวนผู้บาดเจ็บสาหัส" value="0" />
                <span class="input-group-text">คน</span>
            </div>
        </div>

        <div class="mb-3 col-md-6">
            <label class="fw-bold">จำนวนผู้เสียชีวิต</label>
            <div class="input-group input-group-merge">
                <input type="text" class="form-control" id="txt_riskreportdeath" name="txt_riskreportdeath" placeholder="จำนวนผู้เสียชีวิต" value="0" />
                <span class="input-group-text">คน</span>
            </div>
        </div>
        <div class="mb-3 col-md-6">
            <label class="fw-bold">มูลค่าทรัพย์สินเสียหาย</label>
            <div class="input-group input-group-merge">
                <input type="text" class="form-control" id="txt_riskreportcost" name="txt_riskreportcost" placeholder="มูลค่าทรัพย์สินเสียหาย" value="0" />
                <span class="input-group-text">บาท</span>
            </div>
        </div>

        <div class="mb-3 col-md-12">
            <label class="fw-bold">รายละเอียด<small class="text-danger ms-1">*</small></label>
            <textarea class="form-control" rows="10" id="txt_riskreportdesc" name="txt_riskreportdesc" placeholder="รายละเอียด"></textarea>
        </div>

        <div class="mb-3 col-md-12">
            <label class="fw-bold">ความเสียหาย</label>
            <textarea class="form-control" rows="10" id="txt_riskreportdamage" name="txt_riskreportdamage" placeholder="ความเสียหาย"></textarea>
        </div>

        <div class="mb-3 col-md-12">
            <label class="fw-bold">การดำเนินการของเจ้าหน้าที่</label>
            <textarea class="form-control" rows="10" id="txt_riskreportmanage" name="txt_riskreportmanage" placeholder="การดำเนินการของเจ้าหน้าที่"></textarea>
        </div>

        <div class="mb-3 col-md-12">
            <label class="fw-bold">ภาพการเกิดอุบัติเหตุ/ภัยพิบัติ</label>
            <div class="col mb-2">
                <button type="button" class="btn btn-primary" id="btn_risk_pic_add">
                    <span class="tf-icons bx bx-image-add"></span>&nbsp; เพิ่มรูปภาพ
                </button>
                <div id="row_error_risk_pic_add" class="fv-plugins-message-container border border-danger p-1 invalid-feedback clearfix" hidden="true">
                    <span id="lbl_error_risk_pic_add"></span> <button type="button" class="btn btn-xs btn btn-danger float-end" onclick="$('#row_error_risk_pic_add').attr('hidden','hidden');">ปิด</button>
                </div>
            </div>


            <div id="row_risk_pic" class="row p-2 pt-0 row-cols-1 row-cols-md-3 g-4 mb-0">
                                        </div>
        </div>
        <div class="mb-3 col-md-6">
            <label class="fw-bold">ผู้แจ้งและเบอร์ติดต่อ<small class="text-danger ms-1">*</small></label>
            <input class="form-control" type="text" id="txt_riskreportperson" name="txt_riskreportperson" placeholder="ผู้รายงานและเบอร์ติดต่อ" value="" />
        </div>

    </div>

    <div class="row text-center">
        <div class="col-md">
            <input type="submit" class="btn btn-primary me-sm-2 me-1" name="btn_save" value="บันทึก">
            <a class="btn btn-label-secondary" href="?mode=list">ย้อนกลับ</a>
        </div>
    </div>

    <input type="hidden" name="hid_delete_pic" id="hid_delete_pic">
</form>

</div>
</div>

<div id="myModal" class="modal">
<span class="close">&times;</span>
<img class="modal-content" id="img01">
</div>


<div id="card_risk_pic_add" class="card p-0 me-1 border-0" style="width: 100px;" hidden>
<img class="rounded img_risk" />
<div class="card-body p-0">
<a href="#" id="btn_del" class="btn btn-xs btn-outline-danger w-100">ลบ</a>
<input name="uploadfile[]" type="file" hidden>
</div>
</div>                    </div>
        <!-- / Content -->

        <!-- Footer -->
        <footer class="content-footer footer bg-footer-theme">
<div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
<div class="mb-2 mb-md-0">
&copy; ลิขสิทธิ์ข้อมูล ศูนย์เฝ้าระวังภัยคุกคามพื้นที่อุทยานแห่งชาติ สำนักอุทยานแห่งชาติ กรมอุทยานแห่งชาติ สัตว์ป่า และพันธุ์พืช
</div>

</div>
</footer>                    <!-- / Footer -->

        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>


<!-- Drag Target Area To SlideIn Menu On Small Screens -->
<div class="drag-target"></div>

</div>
<!-- / Layout wrapper -->

<form method="post" id="form_delete">
<input type="hidden" name="hid_id_delete" id="hid_id_delete">
</form>

<!-- Modal -->
<div class="modal fade" id="modalDelete" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title">ยืนยันการลบข้อมูล</h5>
    <button
        type="button"
        class="btn-close"
        data-bs-dismiss="modal"
        aria-label="Close"
    ></button>
</div>

<div class="modal-body">
    ต้องการลบข้อมูลนี้หรือไม่?
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
        ยกเลิก
    </button>
    <button type="button" class="btn btn-success" id="btn_ok">ตกลง</button>
</div>
</div>
</div>
</div>

<div class="modal fade" id="modalAlert" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="modalTitle">อัพโหลดรูปภาพ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col mb-0" id="modalText">123 ทดสอบ</div>
        </div>
         
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            ปิด
        </button>
    </div>
</div>
</div>
</div>


<!-- Core JS -->
    <!-- build:js -->
    <script src="/webDNP/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/webDNP/assets/vendor/libs/popper/popper.js"></script>
    <script src="/webDNP/assets/vendor/js/bootstrap.js"></script>
    <script src="/webDNP/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="/webDNP/assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="/webDNP/assets/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="/webDNP/assets/vendor/libs/select2/select2.js"></script> 
    <script src="/webDNP/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="/webDNP/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
    <script src="/webDNP/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

    <script src="/webDNP/assets/vendor/libs/moment/moment.js"></script>
    <script src="/webDNP/assets/vendor/libs/datatables/jquery.dataTables.js"></script>
    <script src="/webDNP/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="/webDNP/assets/vendor/libs/datatables-responsive/datatables.responsive.js"></script>
    <script src="/webDNP/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js"></script>
    <script src="/webDNP/assets/vendor/libs/datatables-buttons/datatables-buttons.js"></script>
    <script src="/webDNP/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js"></script>

    <!--<script src="/webDNP/assets/vendor/libs/jquery-datetime-picker/jquery.datetimepicker.js"></script>-->
    <!--<script src="/webDNP/assets/js/datepicker_config.js"></script>-->
    <!-- Main JS -->
    <script src="/webDNP/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="/webDNP/assets/js/pages/menu_accident_risk.js"></script>



<!--ช่องค้นหาใน รายชื่อต่างๆ-->
<script>
    function url_search(){
        var search = $('.search').val();
        var date_search = $('.date_search').val();
        var url =  "?mode=list";

        if(search !="" && search != undefined) url = url+ "&search=" + encodeURIComponent(search);
        if(date_search !="" && date_search != undefined) url = url + "&date=" + encodeURIComponent(date_search);

        return url;
    }

    $(function() {
        $('input[type=search]').keydown(function (event) {
            if (event.which == 13) {
                window.location = url_search();
                event.preventDefault();
            }
        });

        var e = $(".select2");
        e.length && e.each(function() {
            var e = $(this);
            e.wrap('<div class="position-relative"></div>'), e.select2({
                dropdownParent: e.parent()
            })
        });
    });

    function modal_delete(id) {
        $("#modalDelete").modal('show');
        $("#modalDelete #btn_ok").click(function () {
            $("#form_delete #hid_id_delete").val(id);
            $("#modalDelete").modal('hide');
            $("#form_delete").submit();
        });
    }

    function modal_alert(title,text){
        $("#modalAlert #modalTitle").html(title);
        $("#modalAlert #modalText").html(text);
        $("#modalAlert").modal('show');
    }
</script>

<script>


</script>

</body>


</html>