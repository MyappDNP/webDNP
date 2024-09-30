$(document).ready(function() {
    $('#head').on('change', function() {
        var headId = $(this).val(); // รับค่า head ที่เลือก
        console.log("Head ID selected: " + headId); // แสดงค่าใน console เพื่อตรวจสอบ

        if (headId) {
            $.ajax({
                url: '/webDNP/pages/10/01/get_park.php', // ไฟล์ PHP ที่จะใช้ดึงข้อมูล
                type: 'POST',
                data: {head: headId}, // ส่งค่า head ไปยังไฟล์ PHP
                dataType: 'json',
                success: function(response) {
                    console.log("Response: ", response); // ตรวจสอบ response ที่ส่งกลับมา

                    // อัปเดต dropdown ของประเภทหน่วยงาน
                    $('#type_np').empty().append('<option value="">-- เลือกประเภท --</option>');
                    $.each(response.types, function(key, value) {
                        $('#type_np').append('<option value="'+ value +'">'+ value +'</option>');
                    });

                    // อัปเดต dropdown ของหน่วยงาน
                    $('#park').empty().append('<option value="">-- เลือกหน่วยงาน --</option>');
                    $.each(response.parks, function(key, value) {
                        $('#park').append('<option value="'+ value.id +'">'+ value.park +'</option>');
                    });
                },
                error: function(xhr, status, error) {
                    console.log("Error: " + error); // แสดงข้อความ error ถ้ามี
                }
            });
        } else {
            $('#type_np').empty().append('<option value="">-- เลือกประเภท --</option>');
            $('#park').empty().append('<option value="">-- เลือกหน่วยงาน --</option>');
        }
    });
});
