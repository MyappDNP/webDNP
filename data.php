<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "npdb";

// สร้างการเชื่อมต่อฐานข้อมูล
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// เขียนคำสั่ง SQL เพื่อดึงข้อมูลจากตาราง msanimalbackuptable
$sql = "SELECT id, bio_code, sci_name_e, com_name_t, com_name_e, phylum, class, mbio_des_t, mbio_des_e, ord_n_t, ord_n_e, fam_n_t, fam_n_e, spcies1 FROM msanimalbackuptable";
$result = $conn->query($sql);

// สร้างอาร์เรย์เพื่อเก็บข้อมูล
$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// ส่งข้อมูลออกเป็น JSON
echo json_encode($data);

// ปิดการเชื่อมต่อฐานข้อมูล
$conn->close();
?>
