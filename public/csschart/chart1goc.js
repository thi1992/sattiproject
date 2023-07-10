const ctx1 = document.getElementById('barchart1');
new Chart(ctx1, {
  type: 'bar',
  data: {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    datasets: [{
      label: 'Employee',
      data: [80, 75, 50, 90, 65, 70],
      backgroundColor: 'rgba(54, 162, 235, 0.5)',
      borderWidth: 1
    }, {
      label: 'Class',
      data: [6, 8, 5, 10, 7, 4],
      type: 'line',
      borderColor: 'rgba(255, 99, 132, 1)',
      fill: false
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    },
    plugins: {
      title: {
        display: true,
        text: 'Total Training Result 2023',
        font: {
          size: 26
        }
      },
      datalabels: {
        display: 'auto',
        color: 'black',
        align: 'end',
        anchor: 'end',
        font: {
          size: 12
        },
        formatter: function(value) {
          return value.toString();
        }
      }
    },
    maintainAspectRatio: false,
    responsive: true
  }
});
