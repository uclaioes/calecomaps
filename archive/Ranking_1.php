<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
    <title>Methodology</title>
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
        google.load('visualization', '1', {
            packages: ['corechart']
        });

    </script>
    <script type="text/javascript">
        function drawVisualization() {
            // Create and populate the data table.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Facility Name');
            data.addColumn('number', 'Toxic Releases (lbs) per Employee');
            data.addColumn('number', 'LA County Chemicals Industry Average = 414.35 lbs/employee');
            data.addColumn('number', 'CA Chemicals Industry Average = 303.30 lbs/employee');
            data.addRows([
                ['AMERICAS STYRENICS LLC', 5807.40, 414.35, 303.30],
                ['AIR PRODUCTS & CHEMICALS INC - LONG BEACH', 4254.80, 414.35, 303.30],
                ['RHODIA INC', 3791.50, 414.35, 303.30],
                ['AIRGAS DRY ICE', 2497.29, 414.35, 303.30],
                ['AIR PRODUCTS & CHEMICALS INC - WILMINGTON', 2206.80, 414.35, 303.30],
                ['AIR LIQUIDE LARGE INDUSTRIES US LP - EL SEGUNDO', 2083.50, 414.35, 303.30],
                ['AIR LIQUIDE INDUSTRIAL USLP', 1813.88, 414.35, 303.30],
                ['3M DRUG DELIVERY SYSTEMS', 923.63, 414.35, 303.30],
                ['INEOS POLYPROPYLENE LLC', 590.00, 414.35, 303.30],
                ['PHARMAVITE LLC', 510.13, 414.35, 303.30],

            ]);

            // Create and draw the visualization.
            var ac = new google.visualization.ComboChart(document.getElementById('visualization'));
            ac.draw(data, {
                title: 'Chemicals Industry: 2012 Top 10 Facilities with Highest Toxic Releases per Employee in Los Angeles County',
                width: 600,
                height: 400,
                vAxis: {
                    title: "Toxic Releases (lbs) per Employee"
                },
                hAxis: {
                    title: "Facility Name (n=76)"
                },
                legend: {
                    position: 'bottom'
                },
                seriesType: "line",
                series: {
                    0: {
                        type: "bars",
                        color: 'yellow',
                        visibleInLegend: true
                    },
                    1: {
                        color: 'black'
                    },
                    2: {
                        color: 'darkgray'
                    }
                }



            });
        }


        google.setOnLoadCallback(drawVisualization);

    </script>
</head>

<body>
    <div class="wrapper">

        <?php include('header.php'); ?>
        <div id="visualization" style="width: 600px; height: 400px;"></div>

        Hello World
    </div>
</body>

</html>
