(function($) {
  'use strict';
  var c3LineChart = c3.generate({
    bindto: '#c3-line-chart',
    data: {
      x: 'x',
      columns: [
        ['x', 10, 20, 30, 40, 50, 60],
        ['View', 30, 200, 100, 400, 150, 250],
        ['cilck', 50, 20, 10, 40, 15, 25]
      ]
    },
    color: {
      pattern: ['rgba(88,216,163,1)', 'rgba(237,28,36,0.6)', 'rgba(4,189,254,0.6)']
    },
    padding: {
      top: 0,
      right: 0,
      bottom: 30,
      left: 0,
    }
  });

  setTimeout(function() {
    c3LineChart.load({
      columns: [
        ['View', 230, 190, 300, 500, 300, 400]
      ]
    });
  }, 1000);

  setTimeout(function() {
    c3LineChart.load({
      columns: [
        ['cilck', 130, 150, 200, 300, 200, 100]
      ]
    });
  }, 1500);



})(jQuery);