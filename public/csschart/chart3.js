const ctx3 = document.getElementById('barchart3');

new Chart(ctx3, {
  type: 'bar',
  data: {
    labels: ['Level-1', 'Level-2', 'Level-3', 'Level-4', 'Level-5'],
    datasets: [{
      data: [12, 19, 3, 5, 2],
      borderWidth: 1
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
        text: 'Training Result By Level',
        font: {
          size: 16
        }
      },
      legend: {
        display: false
      }
    },
    maintainAspectRatio: false,
    responsive: true
  }
});
