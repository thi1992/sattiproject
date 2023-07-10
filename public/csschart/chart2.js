const ctx2 = document.getElementById('barchart2');

new Chart(ctx2, {
  type: 'radar',
  data: {
    labels: ['Automation', 'Software', 'Robot', 'Innovation', 'CNC'],
    datasets: [{
      data: [30, 19, 40, 60, 72],
      borderWidth: 3
    }]
  },
  options: {
    plugins: {
      title: {
        display: true,
        text: 'Training Result By Fields',
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
