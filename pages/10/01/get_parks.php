<?php
if (isset($_POST['head_id'])) {
    $headId = $_POST['head_id'];

    // เชื่อมต่อกับฐานข้อมูล
    include $_SERVER['DOCUMENT_ROOT'] . '/webDNP/db_connect.php';

    // สร้าง query เพื่อดึงข้อมูลหน่วยงานตาม head_id
    $query = "SELECT id, park FROM park_name WHERE head = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $headId);
    $stmt->execute();
    $result = $stmt->get_result();

    // สร้าง options สำหรับ select
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['id'] . "'>" . $row['park'] . "</option>";
    }
}
?>
