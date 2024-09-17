$(document).ready(function() {
    // ฟังก์ชันสำหรับการค้นหาด้วย Ajax
    function fetchFilteredData(search, date_search) {
      $.ajax({
        url: '/webDNP/pages/10/01/1001.php', // ไฟล์ PHP ที่ใช้ดึงข้อมูล
        method: 'GET', // ใช้ GET เพื่อส่งคำค้นหาไปยัง PHP
        data: {
          search: search,   // คำค้นหา
          date: date_search // ค่าวันที่
        },
        dataType: 'json',
        success: function(data) {
          const tableBody = $('#data-table tbody');
          tableBody.empty(); // ล้างข้อมูลเก่าก่อน
  
          // ตรวจสอบว่ามีข้อมูลหรือไม่
          if (data.length > 0) {
            data.forEach(row => {
              const tr = `<tr>
                            <td>${row.id}</td>
                            <td>${row.head}</td>
                            <td>${row.type_np}</td>
                            <td>${row.park}</td>
                            <td>${row.type_com}</td>
                            <td>${row.year_np}</td>
                            <td>${row.np_id}</td>
                            <td>${row.brand_id}</td>
                            <td>${row.cpu_id}</td>
                            <td>${row.purpose}</td>
                            <td>${row.status_np}</td>
                          </tr>`;
              tableBody.append(tr);
            });
          } else {
            // หากไม่มีข้อมูลแสดงข้อความในแถวเดียว
            tableBody.append('<tr><td colspan="11">ไม่พบข้อมูล</td></tr>');
          }
        },
        error: function(xhr, status, error) {
          console.error('Error:', error);
          alert('เกิดข้อผิดพลาดในการค้นหา');
        }
      });
    }
  
    // เมื่อกดปุ่มค้นหา
    $('#btn_search').click(function() {
      const search = $('#search_input').val();        // รับค่าจากช่องค้นหา
      const date_search = $('#txt_riskreportdate').val(); // รับค่าจากช่องวันที่
      fetchFilteredData(search, date_search);         // เรียกใช้ฟังก์ชัน Ajax เพื่อดึงข้อมูล
    });
  
    // กด Enter เพื่อทำการค้นหา
    $('#search_input, #txt_riskreportdate').keydown(function(event) {
      if (event.which == 13) {
        const search = $('#search_input').val();
        const date_search = $('#txt_riskreportdate').val();
        fetchFilteredData(search, date_search);      // เรียกใช้ฟังก์ชัน Ajax เมื่อกด Enter
        event.preventDefault();
      }
    });
  });
  