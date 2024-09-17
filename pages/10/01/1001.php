<?php
header('Content-Type: application/json');

// ข้อมูลการเชื่อมต่อฐานข้อมูล
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

// รับค่าการค้นหาจาก GET
$search = isset($_GET['search']) ? $_GET['search'] : '';
$date = isset($_GET['date']) ? $_GET['date'] : '';

// เขียนคำสั่ง SQL เพื่อดึงข้อมูลจากตาราง และกรองตามค่าที่ค้นหา
$sql = "SELECT id, head, type_np, park, type_com, year_np, np_id, brand_id, cpu_id, purpose, status_np FROM computertable WHERE 1=1";

// เพิ่มเงื่อนไขการค้นหาตามคำค้นหาที่กรอก
if (!empty($search)) {
    $sql .= " AND (head LIKE '%$search%' OR park LIKE '%$search%' OR type_np LIKE '%$search%')";
}

// เพิ่มเงื่อนไขการค้นหาตามวันที่ที่กรอก
if (!empty($date)) {
    $sql .= " AND year_np = '$date'"; // สมมติว่า `year_np` เป็นปีที่ต้องการค้นหา
}

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
