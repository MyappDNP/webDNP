document.addEventListener('DOMContentLoaded', function() {
  // ฟังก์ชันสำหรับโหลดข้อมูลจาก URL
  function loadData(url) {
      fetch(url)
          .then(response => {
              if (!response.ok) {
                  throw new Error('Network response was not ok: ' + response.statusText);
              }
              return response.json();
          })
          .then(data => {
              const tableBody = document.querySelector('#data-table tbody');
              tableBody.innerHTML = ''; // เคลียร์ข้อมูลเก่า

              if (data.length > 0) {
                  data.forEach(row => {
                      const tr = document.createElement('tr');
                      tr.innerHTML = `
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
                      `;
                      tableBody.appendChild(tr);
                  });
              } else {
                  tableBody.innerHTML = '<tr><td colspan="11">ไม่พบข้อมูลที่ตรงกัน</td></tr>';
              }
          })
          .catch(error => {
              console.error('Error:', error);
              const tableBody = document.querySelector('#data-table tbody');
              tableBody.innerHTML = '<tr><td colspan="11">เกิดข้อผิดพลาดในการโหลดข้อมูล</td></tr>';
          });
  }

  // โหลดข้อมูลทั้งหมดเมื่อหน้าโหลดเสร็จ
  loadData('/webDNP/pages/10/01/1001.php');

  // ฟังก์ชันค้นหาด้วย AJAX
  document.getElementById('btn_search').addEventListener('click', function(event) {
      event.preventDefault(); // หยุดการส่งฟอร์ม

      // รับค่าจากฟอร์ม
      var search = document.getElementById('search_input').value;
      var date = document.getElementById('txt_riskreportdate').value;

      // สร้าง URL สำหรับคำขอ AJAX
      var url = '/webDNP/pages/10/01/1001.php?search=' + encodeURIComponent(search) + '&date=' + encodeURIComponent(date);

      // ส่งข้อมูลผ่าน AJAX
      loadData(url);
  });

  // การค้นหาด้วยการกด Enter
  document.querySelector('.search').addEventListener('keydown', function(event) {
      if (event.which === 13) {
          document.getElementById('btn_search').click();
          event.preventDefault();
      }
  });
});
