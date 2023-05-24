const ctx = document.getElementById('myChart');
  
new Chart(ctx, {
    type: 'line',
    data: {
        datasets: [{
        data: [{x: '29 July', y: 60.8}, {x: '30 July', y: 60.2},
               {x: '31 July', y: 60.2}, {x: '1 Aug', y: 59.8},
               {x: '2 Aug', y: 59.5}, {x: '3 Aug', y: 60},]
        }]
    },
    options: {
        animation: false,
        plugins: {
            legend: {
                display: false
            },
            tooltip:{
                displayColors: false,
                callbacks: {
                    label: function (context) {
                      const value = context.parsed.y;
                      return value.toFixed(1) + ' kg';
                    }
                }
            }
        }
    }
});

// FROM MR GPT
/* <script>
  document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('myChart').getContext('2d');

    const data = {
      datasets: [{
        data: [
          { x: '29 July', y: 60.8 },
          { x: '30 July', y: 60.2 },
          { x: '31 July', y: 60.2 },
          { x: '1 Aug', y: 59.8 },
          { x: '2 Aug', y: 59.5 },
          { x: '3 Aug', y: 60 },
        ]
      }]
    };

    const options = {
      animation: false,
      plugins: {
        legend: {
          display: false
        },
        tooltip: {
          displayColors: false,
          callbacks: {
            label: function (context) {
              const value = context.parsed.y;
              return value.toFixed(1) + ' kg';
            }
          }
        }
      },
      scales: {
        y: {
          beginAtZero: true
        }
      }
    };

    new Chart(ctx, {
      type: 'line',
      data: data,
      options: options
    });
  });
</script> */
