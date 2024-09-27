$(document).ready(function() {
    $('#head').change(function() {
        var headId = $(this).val();

        // เช็คว่ามีการเลือกหรือไม่
        if (headId) {
            $.ajax({
                type: 'POST',
                url: '/webDNP/pages/10/01/get_parks.php',
                data: { head_id: headId },
                success: function(response) {
                    $('#park').html(response); // อัปเดตตัวเลือกหน่วยงาน
                },
                error: function(xhr, status, error) {
                    console.error('เกิดข้อผิดพลาด: ' + error);
                }
            });
        } else {
            $('#park').html('<option value="">-- เลือกหน่วยงาน --</option>');
        }
    });
});