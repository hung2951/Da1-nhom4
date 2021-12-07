<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div id="piechart"></div>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            // Load google charts
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            // Draw the chart and set the chart values
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Hóa đơn', 'Thống kê hóa đơn'],

                    <?php
                    $i = 1;
                    $sum = count($chart);
                    foreach ($chart as $item) {
                        if ($i == $sum) $comma = "";
                        else $comma = ",";
                        echo "['" . $item['status'] . "', " . $item['so_luong'] . "]" . $comma;

                    }
                    ?>

                ]);

                // Optional; add a title and set the width and height of the chart
                var options = {
                    'title': 'Biểu đồ thống kê hóa đơn',
                    'width': 1200,
                    'height': 500
                };

                // Display the chart inside the <div> element with id="piechart"
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data, options);
            }
        </script>
    </div>
</body>

</html>