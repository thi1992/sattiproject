// Lấy dữ liệu từ cơ sở dữ liệu
const fetchData = async () => {
  try {
    // Gọi API để lấy số dòng theo năm 2022
    const response = await fetch('/count-by-year?year=2022');
    const countData = await response.json();
    const counts = countData.counts;

    // Cập nhật dữ liệu cho biểu đồ
    const labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    const chartData = {
      labels: labels,
      datasets: [{
        label: 'Students Count',
        data: counts,
        backgroundColor: 'rgba(54, 162, 235, 0.5)',
        borderWidth: 1
      }]
    };

    // Vẽ biểu đồ
    new Chart('barchart1', {
      type: 'bar',
      data: chartData,
      options: {
        // Các tùy chọn khác của biểu đồ
      }
    });
  } catch (error) {
    console.error(error);
  }
};

// Gọi hàm fetchData để lấy dữ liệu và vẽ biểu đồ
fetchData();
