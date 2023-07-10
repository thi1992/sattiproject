const ctx4 = document.getElementById('doughnut4');

new Chart(ctx4, {
  type: 'doughnut',
  data: {
    labels: ['CL-1', 'CL-2', 'CL-3'],
    datasets: [{
      label: 'Title',
      data: [12, 19, 3],
      borderWidth: 1
    }]
  },
  options: {
    plugins: {
      title: {
        display: true,
        text: 'Training Result By Title',
        font: {
          size: 16
        }
      },
      legend: {
        position: 'bottom' // Hiển thị legend ở vị trí bottom
      }
    },
    maintainAspectRatio: false,
    responsive: true
  }
});
