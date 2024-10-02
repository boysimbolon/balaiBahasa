//[Dashboard Javascript]

//Project:  EduAdmin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
  
  var options = {
          series: [{
          name: 'Hours spent',
          data: [8, 9, 2, 4, 7, 1, 6]
        }],
          chart: {
      foreColor:"#bac0c7",
          type: 'bar',
          height: 200,
          stacked: true,
          toolbar: {
            show: false
          },
          zoom: {
            enabled: true
          }
        },
        responsive: [{
          breakpoint: 480,
          options: {
            legend: {
              position: 'bottom',
              offsetX: 0,
              offsetY: 0
            }
          }
        }],   
    grid: {
      show: true,
      borderColor: '#f7f7f7',      
    },
    colors:['#6993ff'],
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '40%',
        colors: {
        backgroundBarColors: ['#f0f0f0'],
        backgroundBarOpacity: 1,
      },
          },
        },
        dataLabels: {
          enabled: false
        },
 
        xaxis: {
          categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        },
        legend: {
          show: false,
        },
        fill: {
          opacity: 1
        }
        };

        var chart = new ApexCharts(document.querySelector("#charts_widget_1_chart"), options);
        chart.render();
  
  
  
  
    var options = {
          series: [5, 11, 3],
      labels: ['In Progress', 'Completed', 'Ye to Start'],
          chart: {
          width:343,
          type: 'donut',
        },
        dataLabels: {
          enabled: false
        },
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
            legend: {
              show: false
            }
          }
        }],
    colors:['#04a08b', '#ec8000', '#0052cc'],
        legend: {
          position: 'right',
          height: 230,
        }
        };

        var chart = new ApexCharts(document.querySelector("#charts_widget_2_chart"), options);
        chart.render();
  
  
    var options = {
      chart: {
      height: 212,
      type: "radialBar"
      },

      series: [77],
      colors: ['#0052cc'],
      plotOptions: {
      radialBar: {
        hollow: {
        margin: 15,
        size: "65%"
        },
        track: {
        background: '#ff9920',
        },

        dataLabels: {
        showOn: "always",
        name: {
          offsetY: -50,
          show: false,
          color: "#888",
          fontSize: "13px"
        },
        value: {
          color: "#111",
          fontSize: "20px",
          show: true
        }
        }
      }
      },

      stroke: {
      lineCap: "round",
      },
      labels: ["Progress"]
    };

    var chart = new ApexCharts(document.querySelector("#revenue5"), options);

    chart.render();

  
}); // End of use strict



// calendar start

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialDate: '2023-01-12',
      editable: true,
      selectable: true,
      businessHours: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2023-01-01'
        },
        {
          title: 'Long Event',
          start: '2023-01-07',
          end: '2023-01-10'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2023-01-09T16:00:00'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2023-01-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2023-01-11',
          end: '2023-01-13'
        },
        {
          title: 'Meeting',
          start: '2023-01-12T10:30:00',
          end: '2023-01-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2023-01-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2023-01-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2023-01-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2023-01-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2023-01-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2023-01-28'
        }
      ]
    });

    calendar.render();
  });

// calendar end