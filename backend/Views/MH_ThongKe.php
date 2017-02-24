<?php
//include_once("file:///C|/xampp/htdocs/Controller/admin/C_Thongke.php");
?>
<html>
<head>
    <style>
        #content {
            width: auto;
            height: auto;
            overflow: hidden;
            margin: 55px 0px 70px 0px;
        }

        #topProd, #revenue {
            width: 98%;
            float: left;
            overflow: hidden;
            text-align: center;
            padding-bottom: 40px;
            display: inline-block;
        }

    </style>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Món ăn', 'Số lượng'],
                ['Bánh mỳ', 20],
                ['Phở', 25],
                ['Xôi', 5],
                ['Bún', 8],
                ['Chè', 7]
            ]);

            var options = {
                title: 'Thống kê số lượng món ăn',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));

            chart.draw(data, options);
        }
    </script>

    <script type="text/javascript">
        google.charts.load("current", {packages:['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Element", "Density", { role: "style" } ],
                ["Tháng 1", 8.94, "#b87333"],
                ["Tháng 2", 10.49, "silver"],
                ["Tháng 3", 19.30, "gold"],
                ["Tháng 4", 21.45, "color: #e5e4e2"],
                ["Tháng 5", 42, "color:#FF99FF	"],
                 ["Tháng 6", 45, "color: #999933"],
                 ["Tháng 7", 32, "color: #9933FF"],
                 ["Tháng 8", 18, "color: #007700"],
                 ["Tháng 9", 21, "color: #FFCC33"],
                 ["Tháng 10", 89, "color: #669966"],
                 ["Tháng 11", 73, "color: #006666"],
                 ["Tháng 12", 46, "color: #3300CC"]
            ]);

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                { calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation" },
                2]);

            var options = {
                title: "Số lượt người tương tác",
                /*width: 800,
                height: 400,*/
                bar: {groupWidth: "95%"},
                legend: { position: "none" },
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
            chart.draw(view, options);
        }
    </script>
</head>
<body>
<div id="content">
    <div id="revenue">
        <div id="piechart_3d" style="width: 800px; height: 300px;"></div>
        <h3>Thống kê số lượng các món ăn</h3>
    </div>
    <div id="topProd">
        <div id="columnchart_values"></div>
        <h3>Thống kê số lượt người tương tác theo tháng </h3>
    </div>
</div>
</body>
</html>
