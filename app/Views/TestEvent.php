<!Doctype html>
<html>
<head>
  <title>Google Date Wise Bar and Line Chart Codeigniter Tutorial</title>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
  <script type="text/javascript">
      google.charts.load('visualization', "1", {
          packages: ['corechart']
      });
  </script>
</head>
<body>
    
<div class="row">

  <div class="col-md-12">
  <?php 
            //  foreach ($year_wise as $row){?>
    <div id="line_date_wise" style="width: 900px; height: 500px; margin: 0 auto"></div>
    <div id="bar_date_wise" style="width: 900px; height: 500px; margin: 0 auto"></div>
            
  </div>  
</div>
</body>
</html>
<script language="JavaScript">
  // Draw the pie chart for registered users month wise
  google.charts.setOnLoadCallback(lineChart);
 
  // Draw the pie chart for registered users year wise
  google.charts.setOnLoadCallback(barChart);
   
  //for
  function lineChart() {
 
        /* Define the chart to be drawn.*/
        var data = google.visualization.arrayToDataTable([
            
            ['ปี', 'จำนวนการจอง'],
            <?php 
             foreach ($year_wise as $row){
             echo "['".$row->year."',".$row->total."],";
             }
             ?>
        ]);
 
        var options = {
          title: 'ปีจำนวนการจอง',
          curveType: 'function',
          legend: { position: 'bottom' },
          is3D: true
        };
        /* Instantiate and draw the chart.*/
        var chart = new google.visualization.LineChart(document.getElementById('line_date_wise'));
        chart.draw(data, options);
  }
  // for
  function barChart() {
 
    /* Define the chart to be drawn.*/
    var data = google.visualization.arrayToDataTable([
        ['เดือน', 'จำนวนการจอง','ปี'],
      
        <?php 
         foreach ($month_wise as $row){
         echo "['".$row->month."',".$row->total."],";
         }
         ?>
    ]);
    var options = {
        title: 'เดือนจำนวนการจอง',
        is3D: true,
    };
    /* Instantiate and draw the chart.*/
    var chart = new google.visualization.BarChart(document.getElementById('bar_date_wise'));
    chart.draw(data, options);
  }
  
</script>