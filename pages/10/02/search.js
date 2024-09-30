
document.addEventListener('DOMContentLoaded', function() {
    // ฟังก์ชันสำหรับสร้าง URL การค้นหา
    function url_search() {
        var search = document.querySelector('.search').value;
        var date_search = document.querySelector('.date_search').value;
        var url = "/webDNP/pages/10/01/1001.php";
        
        if (search != "" && search != undefined) url += "?search=" + encodeURIComponent(search);
        if (date_search != "" && date_search != undefined) url += (search ? "&" : "?") + "date=" + encodeURIComponent(date_search);

        return url;
    }

    // การทำงานเมื่อกดปุ่มค้นหา
    document.getElementById('btn_search').addEventListener('click', function(event) {
        event.preventDefault(); // ป้องกันการโหลดหน้าใหม่
        var url = url_search(); // เรียกใช้ฟังก์ชันสร้าง URL
        
        fetch(url) // ใช้ fetch เพื่อดึงข้อมูลจาก URL
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                const tableBody = document.querySelector('#data-table tbody');
                tableBody.innerHTML = ''; // ล้างข้อมูลเก่าออกก่อน
                
                // แสดงผลข้อมูลในตาราง
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
            })
            .catch(error => console.error('Error:', error));
    });

    // ป้องกันการโหลดหน้าใหม่เมื่อกด Enter ในช่องค้นหา
    document.querySelector('.search').addEventListener('keydown', function(event) {
        if (event.key === 'Enter') {
            event.preventDefault(); // ป้องกันการโหลดหน้าใหม่
            document.getElementById('btn_search').click(); // เรียกใช้งานปุ่มค้นหา
        }
    });
});

