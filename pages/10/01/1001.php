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

// เขียนคำสั่ง SQL โดยใช้ Prepared Statements
$sql = "SELECT id, head, type_np, park, type_com, year_np, np_id, brand_id, cpu_id, purpose, status_np FROM computertable WHERE 1=1";

// ตรวจสอบเงื่อนไขการค้นหาและเพิ่มเงื่อนไขใน SQL
if (!empty($search)) {
    $sql .= " AND (head LIKE ? OR park LIKE ? OR type_np LIKE ?)";
}
if (!empty($date)) {
    $sql .= " AND year_np = ?";
}

$stmt = $conn->prepare($sql);

// ตรวจสอบและผูกค่าพารามิเตอร์
if (!empty($search) && !empty($date)) {
    $searchParam = "%$search%";
    $stmt->bind_param('ssss', $searchParam, $searchParam, $searchParam, $date);
} elseif (!empty($search)) {
    $searchParam = "%$search%";
    $stmt->bind_param('sss', $searchParam, $searchParam, $searchParam);
} elseif (!empty($date)) {
    $stmt->bind_param('s', $date);
}

// รันคำสั่ง SQL
$stmt->execute();
$result = $stmt->get_result();

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
$stmt->close();
$conn->close();
?>
