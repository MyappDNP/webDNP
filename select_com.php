<?php
//header('Content-Type: application/json');
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

// สร้าง Query เพื่อดึงข้อมูลอุทยานแห่งชาติที่ไม่ซ้ำกัน
$sql = "SELECT DISTINCT id, type_name, price FROM computer_type";
$result = $conn->query($sql);  // รันคำสั่ง SQL และดึงข้อมูล

// ตรวจสอบว่ามีข้อมูลในฐานข้อมูลหรือไม่ และแสดงค่าไม่ซ้ำ
if ($result->num_rows > 0) {
    // วนลูปเพื่อแสดงรายการอุทยานแห่งชาติใน select option
    while ($row = $result->fetch_assoc()) {
        echo '<option value="' . $row['id'] . '">' . htmlspecialchars($row['type_name']) . '</option>';
    }
} else {
    echo '<option value="">ไม่มีข้อมูล</option>';
}

// ปิดการเชื่อมต่อฐานข้อมูล
$conn->close();
?>
