<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- Custom styles -->
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript">
    google.load('visualization', '1.0', { 'packages': ['corechart'] });
    google.setOnLoadCallback(drawVisualization);

    function drawVisualization() {
      // Your data and chart drawing logic here
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Item');
      data.addColumn('number', 'Quantity');
      data.addRows([
        ['Item 1', 10],
        ['Item 2', 20],
        ['Item 3', 15],
        ['Item 4', 30],
        // Add more rows as per your actual data
      ]);

      var options = {
        title: 'Sales by Item',
        pieHole: 0.4,
      };

      var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
  </script>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f9fa;
    }

    #sidebar {
      height: 100%;
      width: 250px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #343a40;
      padding-top: 20px;
      color: white;
    }

    #sidebar a {
      padding: 16px;
      font-size: 18px;
      color: white;
      display: block;
      transition: 0.3s;
    }

    #sidebar a:hover {
      background-color: #5a5e63;
      color: white;
      text-decoration: none;
    }

    #content {
      margin-left: 50px;
      padding: 20px;
    }
  </style>
</head>

<body>



  <!-- Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

</body>

</html>