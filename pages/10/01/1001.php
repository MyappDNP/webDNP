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

// เขียนคำสั่ง SQL เพื่อดึงข้อมูลจากตาราง table
$sql = "SELECT id, head, type_np, park, type_com, year_np, np_id, brand_id, cpu_id, purpose, status_np FROM computertable";
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
