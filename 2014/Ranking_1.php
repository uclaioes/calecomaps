<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
        <title>Methodology</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
       
        <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script type="text/javascript" src="https://www.google.com/jsapi">
        </script>
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
                data.addColumn('number',
                    'LA County Chemicals Industry Average = 414.35 lbs/employee'
                );
                data.addColumn('number',
                    'CA Chemicals Industry Average = 303.30 lbs/employee');
                data.addRows([
                    ['AMERICAS STYRENICS LLC', 5807.40, 414.35, 303.30],
                    ['AIR PRODUCTS & CHEMICALS INC - LONG BEACH',
                        4254.80, 414.35, 303.30
                    ],
                    ['RHODIA INC', 3791.50, 414.35, 303.30],
                    ['AIRGAS DRY ICE', 2497.29, 414.35, 303.30],
                    ['AIR PRODUCTS & CHEMICALS INC - WILMINGTON',
                        2206.80, 414.35, 303.30
                    ],
                    ['AIR LIQUIDE LARGE INDUSTRIES US LP - EL SEGUNDO',
                        2083.50, 414.35, 303.30
                    ],
                    ['AIR LIQUIDE INDUSTRIAL USLP', 1813.88, 414.35,
                        303.30
                    ],
                    ['3M DRUG DELIVERY SYSTEMS', 923.63, 414.35,
                        303.30
                    ],
                    ['INEOS POLYPROPYLENE LLC', 590.00, 414.35, 303.30],
                    ['PHARMAVITE LLC', 510.13, 414.35, 303.30],

                ]);

                // Create and draw the visualization.
                var ac = new google.visualization.ComboChart(document
                    .getElementById('visualization'));
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

            <div id="headerlogos" style="width:350px">
<a href="https://www.ioes.ucla.edu/"><img src="img/ucla-ioes-logo.png"
      alt="IOES" width="300px" /></a>
<a href="https://www.ioes.ucla.edu/ccep/"><img src="img/cceplogo.jpg"
      alt="IOES" width="300px" /></a>
      </div>
<a href="index.php"><img src="img/logo.png" alt="CalEco Maps"></a>

<nav>
  <!-- Static navbar -->
  <div class="bootstrap">
    <div class="navbar navbar-custom" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Cal EcoMaps</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle"
                data-toggle="dropdown">Methodology <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="divider"></li>
                <li>
                  <t><a href="eismethodology.php" style="color: DarkGreen">Cal
                      EcoMaps Environmental Impact Score</a></t>
                </li>
                <li class="divider"></li>
                <li><a href="Methodology.php">Scope</a></li>
                <li class="divider"></li>
                <li>
                  <t><a href="eri.php" style="color: DarkGreen">Environmental
                      Impact Indicators</a></t>
                </li>
                <li class="divider"></li>
                <li><a href="TOTALTOXICRELEASES.php">Total Toxic Releases</a>
                </li>
                <li><a href="RPKR.php">Releases per $1000 Revenue</a></li>
                <li><a href="toxicity.php">Toxicity of Total Releases</a></li>
                <li><a href="CancerMethod.php">Regional Contribution to Lifetime
                    Cancer Risk </a></li>
   
                <li><a href="PPWMA.php">Preferred Waste Management
                    Activities</a></li>



              </ul>
            </li>


            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Impact
                Score <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="divider"></li>
                <li>
                  <t>Environmental Impact Score Ranking Lists</t>
                </li>
                <li class="divider"></li>
                <li><a href="PetroScores.php">Petroleum </a></li>
                <li><a href="FMscores.php">Fabricated Metals </a></li>
                <li><a href="PMScores.php">Primary Metals </a></li>

                <li><a href="ChemScores.php">Chemicals </a></li>
                <li class="divider"></li>
                <li class="divider"></li>
                <li>
                  <t>Industry Top 10 Facilities Graphs</t>
                </li>
                <li class="divider"></li>
                <li><a href="PMranking.php">Primary Metals</a></li>
                <li><a href="Petroranking.php">Petroleum</a></li>
                <li><a href="FMranking.php">Fabricated Metals</a></li>
                <li><a href="Chemicalsranking.php">Chemicals</a></li>

              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle"
                data-toggle="dropdown">Downloads<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="Report.php">Report</a></li>
                <li><a href="factsheet.php">Fact Sheet</a></li>
                <li><a href="powerpoint.php">Powerpoint Summary</a></li>
                <li><a href="Manual.php">Site Manual</a></li>
                <li><a href="mastersheet.php">Data Sheets</a></li>
             


              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">About
                Us<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="aboutus.php">Project Members</a></li>
                <li><a href="Acknowledgements.php">Acknowledgements</a></li>

              </ul>
            </li>
            <li><a href="FeedbackPage.php">Feedback</a></li>

          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
      <!--/.container-fluid -->
    </div>
  </div>

            <div id="visualization" style="width: 600px; height: 400px;"></div>

            Hello World
        </div>
    </body>

</html>
