<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
        <title>Petroleum Industry Ranking</title>
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
                data.addColumn('number', 'Total Quantity Released');
                data.addColumn('number',
                    'LA County Petroleum Industry Average (lbs)');
                data.addColumn('number', 'CA Petroleum Industry Average (lbs)');
                data.addColumn('number', 'US Petroleum Industry Average (lbs)');
                data.addRows([
                    ['CHEVRON PRODUCTS CO DIV OF CHEVRON USA INC',
                        910757.20, 93602, 90564, 110099
                    ],
                    ['BP WEST COAST PRODUCTS LLC CARSON BP CARSON REFINERY',
                        668569.60, 93602, 90564, 110099
                    ],
                    ['EXXON MOBIL OIL CORP - TORRANCE REFINERY', 362552,
                        93602, 90564, 110099
                    ],
                    ['TESORO LOS ANGELES REFINERY', 242676.37, 93602,
                        90564, 110099
                    ],
                    ['PHILLIPS 66 LOS ANGELES REFINERY WILMINGTON PLANT',
                        134595.50, 93602, 90564, 110099
                    ],
                    ['ULTRAMAR INC WILMINGTON REFINERY', 110200.12,
                        93602, 90564, 110099
                    ],
                    ['MARGUESO & COINC', 46189, 93602, 90564, 110099],
                    ['PHILLIPS 66 LOS ANGELES REFINERY CARSON PLANT',
                        39238.70, 93602, 90564, 110099
                    ],
                    ['PARAMOUNT PETROLEUM CORP', 8652.52, 93602, 90564,
                        110099
                    ],
                    ['ULTRAMAR INC MARINE TERMINAL', 1757.26, 93602,
                        90564, 110099
                    ],

                ]);

                // Create and draw the visualization.
                var ac = new google.visualization.ComboChart(document
                    .getElementById('ToxicReleases'));
                ac.draw(data, {
                    title: 'Petroleum Industry: 2012 Ten Facilities with Highest Total Toxic Releases On- and Off-Site in Los Angeles County',
                    vAxis: {
                        title: "Total Toxic Releases (lbs)"
                    },
                    hAxis: {
                        title: "Facility Name (n=27)"
                    },
                    legend: {
                        position: 'side'
                    },
                    seriesType: "line",
                    series: {
                        0: {
                            type: "bars",
                            color: 'red',
                            visibleInLegend: true
                        },
                        1: {
                            color: 'black'
                        },
                        2: {
                            color: 'darkgray'
                        },
                        3: {
                            color: 'darkorange'
                        }
                    }



                });
            }


            google.setOnLoadCallback(drawVisualization);

        </script>



        <script type="text/javascript">
            function drawVisualization() {
                // Create and populate the data table.
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Facility Name');
                data.addColumn('number',
                    'Toxic Releases in lbs/$1,000 of Revenue');
                data.addColumn('number',
                    'LA County Petroleum Industry Average (lbs/$1000)');
                data.addColumn('number',
                    'CA Petroleum Industry Average (lbs/$1000)');
                data.addRows([
                    ['BP WEST COAST PRODUCTS LLC CARSON BP CARSON REFINERY',
                        71.03, 8.37, 3.23
                    ],
                    ['CHEVRON PRODUCTS CO DIV OF CHEVRON USA INC',
                        64.56, 8.37, 3.23
                    ],
                    ['M ARGUESO & CO INC', 5.30, 8.37, 3.23],
                    ['PHILLIPS 66 LOS ANGELES REFINERY CARSON PLANT',
                        0.73, 8.37, 3.23
                    ],
                    ['PHILLIPS 66 LOS ANGELES REFINERY WILMINGTON PLANT',
                        0.34, 8.37, 3.23
                    ],
                    ['TESORO LOS ANGELES REFINERY', 0.12, 8.37, 3.23],
                    ['EXXON MOBIL OIL CORP - TORRANCE REFINERY', 0.05,
                        8.37, 3.23
                    ],
                    ['ULTRAMAR INC MARINE TERMINAL', 0.03, 8.37, 3.23],
                    ['BP WILMINGTON CALCINER', 0.03, 8.37, 3.23],
                    ['VALERO WILMINGTON ASPHALT PLANT', 0.02, 8.37,
                        3.23
                    ],

                ]);

                // Create and draw the visualization.
                var ac = new google.visualization.ComboChart(document
                    .getElementById('Revenue'));
                ac.draw(data, {
                    title: 'Petroleum Industry: 2012 Ten Facilities with Highest Toxic Releases per $1000 Revenue in Los Angeles County',
                    vAxis: {
                        title: "Toxic Releases in lbs/$1,000 of Revenue"
                    },
                    hAxis: {
                        title: "Facility Name (n=27)"
                    },
                    legend: {
                        position: 'side'
                    },
                    seriesType: "line",
                    series: {
                        0: {
                            type: "bars",
                            color: 'red',
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



        <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="https://www.google.com/jsapi">
        </script>
        <script type="text/javascript">
            google.load('visualization', '1', {
                packages: ['corechart']
            });

        </script>
        <script type="text/javascript">
            function drawTPounds() {
                // Create and populate the data table.
                var toxp = new google.visualization.DataTable();
                toxp.addColumn('string', 'Facility Name');
                toxp.addColumn('number',
                    'Total On-Site Releases (Toxicity x lbs)');
                toxp.addColumn('number',
                    'LA County Petroleum Industry Average (Toxicity x lbs)');
                toxp.addColumn('number',
                    'CA Petroleum Industry Average (Toxicity x lbs)');
                toxp.addColumn('number',
                    'US Petroleum Industry Average (Toxicity x lbs)');
                toxp.addRows([
                    ['CHEVRON PRODUCTS CO DIV OF CHEVRON USA INC',
                        73080227, 8083647, 12551183, 79247263
                    ],
                    ['EXXON MOBIL OIL CORP - TORRANCE REFINERY',
                        72814848, 8083647, 12551183, 79247263
                    ],
                    ['BP WEST COAST PRODUCTS LLC CARSON BP CARSON REFINERY',
                        45186467, 8083647, 12551183, 79247263
                    ],
                    ['TESORO LOS ANGELES REFINERY', 9407618, 8083647,
                        12551183, 79247263
                    ],
                    ['PHILLIPS 66 LOS ANGELES REFINERY WILMINGTON PLANT',
                        9402232, 8083647, 12551183, 79247263
                    ],
                    ['PHILLIPS 66 LOS ANGELES REFINERY CARSON PLANT',
                        3874744, 8083647, 12551183, 79247263
                    ],
                    ['ULTRAMAR INC WILMINGTON REFINERY', 3002472,
                        8083647, 12551183, 79247263
                    ],
                    ['BP WILMINGTON CALCINER', 841020, 8083647,
                        12551183, 79247263
                    ],
                    ['PARAMOUNT PETROLEUM CORP', 236157, 8083647,
                        12551183, 79247263
                    ],
                    ['ULTRAMAR INC MARINE TERMINAL', 132176, 8083647,
                        12551183, 79247263
                    ],

                ]);

                // Create and draw the visualization.
                var atox = new google.visualization.ComboChart(document
                    .getElementById('TPounds'));
                atox.draw(toxp, {
                    title: 'Petroleum Industry: 2012 Ten Facilities with Highest Toxicity of Total Releases in Los Angeles County',
                    vAxis: {
                        title: "Total On-Site Releases (Toxicity x lbs)"
                    },
                    hAxis: {
                        title: "Facility Name (n=27)"
                    },
                    legend: {
                        position: 'side'
                    },
                    seriesType: "line",
                    series: {
                        0: {
                            type: "bars",
                            color: 'red',
                            visibleInLegend: true
                        },
                        1: {
                            color: 'black'
                        },
                        2: {
                            color: 'darkgray'
                        },
                        3: {
                            color: 'darkorange'
                        }
                    }



                });
            }


            google.setOnLoadCallback(drawTPounds);

        </script>




        <script type="text/javascript">
            function drawVisualization() {
                // Create and populate the data table.
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Facility Name');
                data.addColumn('number',
                    'Percent of Preferred Waste Management Activities');
                data.addColumn('number',
                    'LA County Petroleum Industry Average');
                data.addColumn('number', 'CA Petroleum Industry Average');
                data.addRows([
                    ['DEMENNO/KERDOON INC', 100, 93.04, 93.14],
                    ['ULTRAMAR INC WILMINGTON REFINERY', 98.91, 93.04,
                        93.14
                    ],
                    ['LUBRICATING SPECIALTIES CO', 98.04, 93.04, 93.14],
                    ['LUNDAY-THAGARD CO', 97.03, 93.04, 93.14],
                    ['PHILLIPS 66 LOS ANGELES REFINERY CARSON PLANT',
                        89.23, 93.04, 93.14
                    ],
                    ['EXXON MOBIL OIL CORP - TORRANCE REFINERY', 70.68,
                        93.04, 93.14
                    ],
                    ['PHILLIPS 66 LOS ANGELES REFINERY WILMINGTON PLANT',
                        68.07, 93.04, 93.14
                    ],
                    ['CHEVRON PRODUCTS CO DIV OF CHEVRON USA INC',
                        65.64, 93.04, 93.14
                    ],
                    ['BP WEST COAST PRODUCTS LLC CARSON BP CARSON REFINERY',
                        64.30, 93.04, 93.14
                    ],
                    ['OWENS CORNING ROOFING & ASPHALT LLC', 47.30,
                        93.04, 93.14
                    ],

                ]);

                // Create and draw the visualization.
                var ac = new google.visualization.ComboChart(document
                    .getElementById('PWMA'));
                ac.draw(data, {
                    title: 'Petroleum Industry: 2012 Ten Facilties in Preferred Waste Management Activites (Recycling, Energy Recovery, Treatment)',
                    vAxis: {
                        title: "% = [Preferred Waste Management Activites (lbs)] / [Total Production Waste (lbs)]"
                    },
                    hAxis: {
                        title: "Facility Name (n=27)"
                    },
                    legend: {
                        position: 'side'
                    },
                    seriesType: "line",
                    series: {
                        0: {
                            type: "bars",
                            color: 'red',
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



        <script type="text/javascript">
            function drawVisualization() {
                // Create and populate the data table.
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Facility Name');
                data.addColumn('number',
                    'Lifetime Cancer Estimate per million');
                data.addColumn('number',
                    'LA County Petroleum Industry Average');
                data.addRows([
                    ['EXXON MOBIL OIL CORP - TORRANCE REFINERY', 20.92,
                        2.74
                    ],
                    ['TESORO LOS ANGELES REFINERY', 12.46, 2.74],
                    ['PHILLIPS 66 LOS ANGELES REFINERY WILMINGTON PLANT',
                        8.18, 2.74
                    ],
                    ['BP WILMINGTON CALCINER', 7.68, 2.74],
                    ['BP WEST COAST PRODUCTS LLC CARSON BP CARSON REFINERY',
                        7.37, 2.74
                    ],
                    ['CHEVRON PRODUCTS CO DIV OF CHEVRON USA INC', 7.08,
                        2.74
                    ],
                    ['ULTRAMAR INC WILMINGTON REFINERY', 3.93, 2.74],
                    ['PHILLIPS 66 LOS ANGELES REFINERY CARSON PLANT',
                        2.55, 2.74
                    ],
                    ['LUNDAY - THAGARD CO', 1.44, 2.74],
                    ['PARAMOUNT PETROLEUM CORP', 0.80, 2.74],

                ]);

                // Create and draw the visualization.
                var ac = new google.visualization.ComboChart(document
                    .getElementById('CancerRisk'));
                ac.draw(data, {
                    title: 'Petroleum Industry: 2012 Ten Facilities with Highest Regional Contribution to Lifetime Cancer Risk from Air Emission in Los Angeles County',
                    vAxis: {
                        title: "Air Emissions Lifetime Cancer Estimate (number of cancers in one million people)"
                    },
                    hAxis: {
                        title: "Facility Name (n=27)"
                    },
                    legend: {
                        position: 'side'
                    },
                    seriesType: "line",
                    series: {
                        0: {
                            type: "bars",
                            color: 'red',
                            visibleInLegend: true
                        },
                        1: {
                            color: 'black'
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

            <div align="center">
                <h2>Total Toxic Releases
                    <a href="TOTALTOXICRELEASES.php " target="_blank">[?]</a>
                </h2>
            </div>
            <div id="ToxicReleases"></div>
            <br>
            <div align="center">
                <h2>Releases per $1000 Revenue
                    <a href="RPKR.php" target="_blank">[?]</a>
                </h2>
            </div>
            <div id="Revenue"></div>
            <br>
            <div align="center">
                <h2>Toxicity of Total Releases</h2>
            </div>
            <div id="TPounds"></div>
            <br>
            <div align="center">
                <h2>Percent of Preferred Waste Management Activities
                    <a href="PPWMA.php" target="_blank">[?]</a>
                </h2>
            </div>
            <div id="PWMA"></div>
            <br>
            <div align="center">
                <h2>Regional Contribution to Lifetime Cancer Risk
                    <a href="CancerMethod.php" target="_blank">[?]</a>
                </h2>
            </div>
            <div id="CancerRisk"></div>
            <div id="footer">
                <?php include('footer.php'); ?> </div>
        </div>
    </body>

</html>
