<!DOCTYPE html>
<html lang="vi">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    
        <link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/1.2.0/css/searchPanes.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
       
    <title>Lịch sử đào tạo SATTI P</title>
    <style>
        table thead {
            background-color: #4760e9;
            color: azure;
        }      
    </style>
</head>
<body>
    <div id="contenedor" class="shadow-lg p-3 mb-5 bg-white"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Mã nhân viên</th>
                            <th>Tên nhân viên</th>
                            <th>Team</th>
                            <th>Tên khóa học</th>
                            <th>Năm</th>
                            <th>Tháng</th>                         
                        </tr>
                    </thead>
                    <tbody id="table-body"></tbody>        
                </table>
            </div>            
        </div>
    </div>
     
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
      
    <script src="https://cdn.datatables.net/searchpanes/1.2.0/js/dataTables.searchPanes.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
    <script src=https://code.highcharts.com/highcharts.js></script>

    
    <script>
        $(document).ready(function() {
            // Tạo DataTable
            var table = $('#example').DataTable({
                dom: 'Pfrtip', // Để hiển thị panel tìm kiếmtrong DataTables
                paging: true, // Cho phép phân trang
                pageLength: 10,
                lengthMenu: [10, 25, 50, 75, 100],
                ajax: {
                    url: "{{ route('getData') }}",
                    type: 'GET',
                    dataSrc: 'data'
                },
                columns: [
                    { data: 'gen_c' }, // Thay 'nombre' bằng tên trường tương ứng trong bảng
                    { data: 'name_c' }, // Thay 'puesto' bằng tên trường tương ứng trong bảng
                    { data: 'team_c' }, // Thay 'pais' bằng tên trường tương ứng trong bảng
                    { data: 'courses_name_c' }, // Thay 'edad' bằng tên trường tương ứng trong bảng
                    { data: 'year_c' }, // Thay 'pais' bằng tên trường tương ứng trong bảng
                    { data: 'month_c' }, // Thay 'edad' bằng tên trường tương ứng trong bảng
                ],
                searchPanes: {
                cascadePanes: true,
                layout: 'columns-6',
                dtOpts: {
                    dom: 'Pfrtip', // Để hiển thị panel tìm kiếm trong các pane con
                }
                },
                select: {
                    style: 'multi'
                },
                extensions: ['searchPanes'] // Thêm extension searchPanes vào đây
                
            });

            // Tạo biểu đồ với dữ liệu ban đầu
            var container = $('#contenedor');
            var chart = Highcharts.chart(container[0], {
                chart: {
                    type: 'pie',
                },
                title: {
                    text: 'DỮ LIỆU ĐÀO TẠO SATTI P',
                },
                credits: {
                enabled: false
                },
                series: [
                    {
                        data: chartData(table),
                    },
                ],
            });

            // Cập nhật dữ liệu biểu đồ khi có bộ lọc
            table.on('draw.dt', function () {
                chart.series[0].setData(chartData(table));
            });

            // Cập nhật dữ liệu biểu đồ khi thay đổi trang
            table.on('page.dt', function () {
                chart.series[0].setData(chartData(table));
            });

            // Hàm chartData
            function chartData(table) {
                var affectedRows = {};
                // Đếm số dòng cho mỗi chức vụ (Puesto)
                table.column(2, { search: 'applied' }).data().each(function (val) {
                    if (affectedRows[val]) {
                        affectedRows[val] += 1;
                    } else {
                        affectedRows[val] = 1;
                    }
                });

                // Ánh xạ vào định dạng sử dụng bởi Highcharts
                var chartData = [];
                for (var key in affectedRows) {
                    chartData.push({
                        name: key,
                        y: affectedRows[key],
                    });
                }
                return chartData;
            }
        });
    </script>
</body>
</html>
