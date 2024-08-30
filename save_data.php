<?php
// นำเข้าการเชื่อมต่อฐานข้อมูล
include 'db_connect.php';

// รับข้อมูลจากฟอร์ม
$bio_code = $_POST['bio_code'];
$sci_name_e = $_POST['sci_name_e'];
$com_name_t = $_POST['com_name_t'];
$com_name_e = $_POST['com_name_e'];
$phylum = $_POST['phylum'];
$class = $_POST['class'];
$mbio_des_t = $_POST['mbio_des_t'];
$mbio_des_e = $_POST['mbio_des_e'];
$ord_n_t = $_POST['ord_n_t'];
$ord_n_e = $_POST['ord_n_e'];
$fam_n_t = $_POST['fam_n_t'];
$fam_n_e = $_POST['fam_n_e'];
$spcies1 = $_POST['spcies1'];

// เตรียมคำสั่ง SQL สำหรับการบันทึกข้อมูล
$stmt = $conn->prepare("INSERT INTO msanimalbackuptable (bio_code, sci_name_e, com_name_t, com_name_e, phylum, class, mbio_des_t, mbio_des_e, ord_n_t, ord_n_e, fam_n_t, fam_n_e, spcies1) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

// ตรวจสอบการเตรียมคำสั่ง SQL
if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}

// ผูกตัวแปรกับคำสั่ง SQL
$stmt->bind_param("sssssssssssss", $bio_code, $sci_name_e, $com_name_t, $com_name_e, $phylum, $class, $mbio_des_t, $mbio_des_e, $ord_n_t, $ord_n_e, $fam_n_t, $fam_n_e, $spcies1);

// ดำเนินการคำสั่ง SQL
if ($stmt->execute()) {
    echo "[บันทึกข้อมูลเรียบร้อยแล้ว]";
} else {
    echo "Error: " . $stmt->error;
}

// ปิดคำสั่ง SQL และการเชื่อมต่อฐานข้อมูล
$stmt->close();
$conn->close();
?>
