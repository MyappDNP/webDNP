<?php
// เชื่อมต่อกับฐานข้อมูล
include $_SERVER['DOCUMENT_ROOT'] . '/webDNP/db_connect.php';

if (isset($_GET['head_id'])) { // ตรวจสอบว่าใช้ GET หรือ POST
    $head_id = $_GET['head_id']; // เปลี่ยนจาก POST เป็น GET

    // Query เพื่อดึงข้อมูลจากตาราง park_name โดยอิงตาม head_id
    $query = "SELECT id, park FROM park_name WHERE head = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $head_id); // ใช้ bind_param เพื่อตรวจสอบข้อมูล

    if ($stmt->execute()) {
        $result = $stmt->get_result();

        // สร้างตัวเลือกสำหรับ dropdown ของหน่วยงาน
        if ($result->num_rows > 0) {
            echo '<option value="">-- เลือกหน่วยงาน --</option>'; // ให้ค่าเริ่มต้น
            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . $row['id'] . '">' . $row['park'] . '</option>';
            }
        } else {
            echo '<option value="">-- ไม่มีหน่วยงานให้เลือก --</option>';
        }
    } else {
        echo "Error executing query: " . $stmt->error;
    }
} else {
    echo '<option value="">-- ไม่มีหน่วยงานให้เลือก --</option>';
}
?>
