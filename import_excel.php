<?php
require 'vendor/autoload.php'; // เรียกใช้ PhpSpreadsheet
require 'db_connect.php'; // เชื่อมต่อฐานข้อมูล

use PhpOffice\PhpSpreadsheet\IOFactory;

if (isset($_FILES['excel_file'])) {
    $file = $_FILES['excel_file']['tmp_name'];

    // ตรวจสอบว่าไฟล์เป็น Excel หรือไม่
    $extension = pathinfo($_FILES['excel_file']['name'], PATHINFO_EXTENSION);
    if ($extension != 'xls' && $extension != 'xlsx') {
        die('กรุณาอัพโหลดไฟล์ Excel (.xls หรือ .xlsx)');
    }

    // โหลดไฟล์ Excel
    $spreadsheet = IOFactory::load($file);
    $worksheet = $spreadsheet->getActiveSheet();
    $rows = $worksheet->toArray();

    // นำเข้าข้อมูลทีละแถว
    foreach ($rows as $index => $row) {
        if ($index == 0) continue; // ข้ามแถวหัวตาราง

        $head = $row[0];
        $type_np = $row[1];
        $park = $row[2];
        $type_com = $row[3];
        $year_np = $row[4];
        $np_id = $row[5];
        $brand_id = $row[6];
        $cpu_id = $row[7];
        $purpose = $row[8];
        $status_np = $row[9];

        // เตรียม SQL สำหรับการนำข้อมูลเข้าฐานข้อมูล
        $sql = "INSERT INTO computertable (head, type_np, park, type_com, year_np, np_id, brand_id, cpu_id, purpose, status_np)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssssss", $head, $type_np, $park, $type_com, $year_np, $np_id, $brand_id, $cpu_id, $purpose, $status_np);
        $stmt->execute();
    }

    echo "นำเข้าข้อมูลเรียบร้อยแล้ว";
} else {
    echo "กรุณาเลือกไฟล์ Excel";
}

try {
    // โหลดไฟล์ Excel
    $spreadsheet = IOFactory::load($file);
} catch (\PhpOffice\PhpSpreadsheet\Reader\Exception $e) {
    die('ไม่สามารถโหลดไฟล์ Excel ได้: ' . $e->getMessage());
}


?>
