<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
        <title>Fabricated Metals Industry Ranking</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <script src="js/bootstrap.js"></script>
        <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
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
                    'LA County Fabricated Metals Industry Average (lbs)');
                data.addColumn('number',
                    'CA Fabricated Metals Industry Average (lbs)');
                data.addColumn('number',
                    'US Fabricated Metals Industry Average (lbs)');
                data.addRows([
                    ['MAXIMA ENTERPRISES INC', 496159.37, 19580, 11096,
                        15683
                    ],
                    ['GEORGE INDUSTRIES', 380990, 19580, 11096, 15683],
                    ['VALMONT COATINGS CALWEST GALVANIZING', 111037,
                        19580, 11096, 15683
                    ],
                    ['REXAM BEVERAGE CAN CORE: CHATSWORTH FACILITY',
                        105069.75, 19580, 11096, 15683
                    ],
                    ['TRIUMPH PROCESSING INC', 22773.62, 19580, 11096,
                        15683
                    ],
                    ['ARDAGH METAL PACKAGING USA INC', 16200, 19580,
                        11096, 15683
                    ],
                    ['ATLAS GALVANIZING LLC', 10172, 19580, 11096,
                        15683
                    ],
                    ['PICO RIVERA PLATING INC', 9745, 19580, 11096,
                        15683
                    ],
                    ['ALLOYS CLEANING INC', 6598, 19580, 11096, 15683],
                    ['BOWMAN PLATING CO INC', 6470.19, 19580, 11096,
                        15683
                    ],

                ]);

                // Create and draw the visualization.
                var ac = new google.visualization.ComboChart(document
                    .getElementById('ToxicReleases'));
                ac.draw(data, {
                    title: 'Fabricated Metals Industry: 2012 Ten Facilities with Highest Total Toxic Releases On- and Off-Site in Los Angeles County',
                    vAxis: {
                        title: "Total Toxic Releases (lbs)"
                    },
                    hAxis: {
                        title: "Facility Name (n=61)"
                    },
                    legend: {
                        position: 'side'
                    },
                    seriesType: "line",
                    series: {
                        0: {
                            type: "bars",
                            color: 'green',
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



        <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
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
                data.addColumn('number',
                    'Toxic Releases in lbs/$1,000 of Revenue');
                data.addColumn('number',
                    'LA County Fabricated Metals Industry Average (lbs/$1000)'
                );
                data.addColumn('number',
                    'CA Fabricated Metals Industry Average (lbs/$1000)');
                data.addRows([
                    ['GEORGE INDUSTRIES', 21.65, 0.80, 1.22],
                    ['VALMONT COATINGS CALWEST', 8.75, 0.80, 1.22],
                    ['PICO RIVERA PLATING INC', 5.40, 0.80, 1.22],
                    ['TRIUMPH PROCESSING INC', 2.50, 0.80, 1.22],
                    ['SURFACE TREATMENT & INSPECTION (ST&I) INC', 1.30,
                        0.80, 1.22
                    ],
                    ['REXAM BEVERAGE CAN AMERICAS', 1.17, 0.80, 1.22],
                    ['AERO-ELECTRIC CONNECTOR INC', 1.17, 0.80, 1.22],
                    ['ATLAS GALVANIZING LLC', 1.06, 0.80, 1.22],
                    ['AVIATION REPAIR SOLUTIONS', 1.00, 0.80, 1.22],
                    ['OLD COUNTRY MILLWORK INC', 0.65, 0.80, 1.22],

                ]);

                // Create and draw the visualization.
                var ac = new google.visualization.ComboChart(document
                    .getElementById('Revenue'));
                ac.draw(data, {
                    title: 'Fabricated Metals Industry: 2012 Ten Facilities with Highest Toxic Releases per $1000 Revenue in Los Angeles County',
                    vAxis: {
                        title: "Toxic Releases in lbs/$1,000 of Revenue"
                    },
                    hAxis: {
                        title: "Facility Name (n=61)"
                    },
                    legend: {
                        position: 'side'
                    },
                    seriesType: "line",
                    series: {
                        0: {
                            type: "bars",
                            color: 'green',
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
                    'LA County Fabricated Metals Industry Average (Toxicity x lbs)'
                );
                toxp.addColumn('number',
                    'CA Fabricated Metals Industry Average (Toxicity x lbs)'
                );
                toxp.addColumn('number',
                    'US Fabricated Metals Industry Average (Toxicity x lbs)'
                );
                toxp.addRows([
                    ['REXAM BEVERAGE CAN CO RE: CHATSWORTH FACILITY',
                        6475100, 268566, 1565375, 4284884
                    ],
                    ['CARLTON FORGE WORKS', 4964506, 268566, 1565375,
                        4284884
                    ],
                    ['ARDAGH METAL PACKAGING USA INC', 1592210, 268566,
                        1565375, 4284884
                    ],
                    ['REDMAN EQUIPMENT & MANUFACTURING CO', 978750,
                        268566, 1565375, 4284884
                    ],
                    ['SHULTZ STEEL CO', 609970, 268566, 1565375,
                        4284884
                    ],
                    ['AERO-ELECTRIC CONNECTOR INC', 602800, 268566,
                        1565375, 4284884
                    ],
                    ['SURFACE TREATMENT & INSPECTION (ST&I) INC',
                        399180, 268566, 1565375, 4284884
                    ],
                    ['METAL SURFACES INC', 189864, 268566, 1565375,
                        4284884
                    ],
                    ['GEORGE INDUSTRIES', 138600, 268566, 1565375,
                        4284884
                    ],
                    ['ALCOA FASTENING SYSTEMS', 107346, 268566, 1565375,
                        4284884
                    ],

                ]);

                // Create and draw the visualization.
                var atox = new google.visualization.ComboChart(document
                    .getElementById('TPounds'));
                atox.draw(toxp, {
                    title: 'Fabricated Metals Industry: 2012 Ten Facilities with Highest Toxicity of Total Releases in Los Angeles County',
                    vAxis: {
                        title: "Total On-Site Releases (Toxicity x lbs)"
                    },
                    hAxis: {
                        title: "Facility Name (n=61)"
                    },
                    legend: {
                        position: 'side'
                    },
                    seriesType: "line",
                    series: {
                        0: {
                            type: "bars",
                            color: 'green',
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



        <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
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
                data.addColumn('number',
                    'Percent of Preferred Waste Management Activities');
                data.addColumn('number',
                    'LA County Fabricated Metals Industry Average');
                data.addColumn('number',
                    'CA Fabricated Metals Industry Average');
                data.addRows([
                    ['AAA PLATING & INSPECTION INC', 100, 82.60, 89.17],
                    ['AVIBANK MANUFACTURING INC', 100, 82.60, 89.17],
                    ['AVK INDUSTRIAL PRODUCTS', 100, 82.60, 89.17],
                    ['CUNICO CORP', 100, 82.60, 89.17],
                    ['KLUNE INDUSTRIES INC', 100, 82.60, 89.17],
                    ['LUSK QUALITY MACHINE PRODUCTS', 100, 82.60,
                        89.17
                    ],
                    ['MECHANICAL METAL FINISHING', 100, 82.60, 89.17],
                    ['PRIVE PLATING', 100, 82.60, 89.17],
                    ['WEBER METALS INC', 100, 82.60, 89.17],
                    ['ALERT PLATING CO', 100, 82.60, 89.17],

                ]);

                // Create and draw the visualization.
                var ac = new google.visualization.ComboChart(document
                    .getElementById('PWMA'));
                ac.draw(data, {
                    title: 'Fabricated Metals Industry: 2012 Ten Facilties in Preferred Waste Management Activites (Recycling, Energy Recovery, Treatment)',
                    vAxis: {
                        title: "% = [Preferred Waste Management Activites (lbs)] / [Total Production Waste (lbs)]"
                    },
                    hAxis: {
                        title: "Facility Name (n=61)"
                    },
                    legend: {
                        position: 'side'
                    },
                    seriesType: "line",
                    series: {
                        0: {
                            type: "bars",
                            color: 'green',
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
            function drawVisualization() {
                // Create and populate the data table.
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Facility Name');
                data.addColumn('number',
                    'Lifetime Cancer Estimate per million');
                data.addColumn('number',
                    'LA County Fabricated Metals Industry Average');
                data.addRows([
                    ['CARLTON FORGE WORKS', 15.07, 1.85],
                    ['AERO-ELECTRIC CONNECTOR INC', 1.91, 1.85],
                    ['SHULTZ STEEL CO', 1.19, 1.85],
                    ['METAL SURFACES INC', 0.10, 1.85],
                    ['CHROMAL PLATING CO', 0.10, 1.85],
                    ['DESIGNED METAL CONNECTIONS', 0.04, 1.85],
                    ['ALCOA FASTENING SYSTEMS', 0.03, 1.85],
                    ['VALLEY PLATING WORKS INC', 0.01, 1.85],
                    ['ARROWHEAD BRASS & PLUMBING LLC', 0.01, 1.85],
                    ['MAXIMA ENTERPRISES INC', 0.00, 1.85],

                ]);

                // Create and draw the visualization.
                var ac = new google.visualization.ComboChart(document
                    .getElementById('CancerRisk'));
                ac.draw(data, {
                    title: 'Fabricated Metals Industry: 2012 Ten Facilities with Highest Regional Contribution to Lifetime Cancer Risk from Air Emission in Los Angeles County',
                    vAxis: {
                        title: "Air Emissions Lifetime Cancer Estimate (number of cancers in one million people)"
                    },
                    hAxis: {
                        title: "Facility Name (n=61)"
                    },
                    legend: {
                        position: 'side'
                    },
                    seriesType: "line",
                    series: {
                        0: {
                            type: "bars",
                            color: 'green',
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
                <a href="https://www.ioes.ucla.edu/"><img
                        src="img/ucla-ioes-logo.png" alt="IOES"
                        width="300px" /></a>
                <a href="https://www.ioes.ucla.edu/ccep/"><img
                        src="img/cceplogo.jpg" alt="IOES" width="300px" /></a>
            </div>
            <a href="index.php"><img src="img/logo.png" alt="CalEco Maps"></a>

            <nav>
                <!-- Static navbar -->
                <div class="bootstrap">
                    <div class="navbar navbar-custom" role="navigation">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle"
                                    data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle
                                        navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="index.php">Cal
                                    EcoMaps</a>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle"
                                            data-toggle="dropdown">Methodology
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li class="divider"></li>
                                            <li>
                                                <t><a href="eismethodology.php"
                                                        style="color: DarkGreen">Cal
                                                        EcoMaps Environmental
                                                        Impact Score</a></t>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a
                                                    href="Methodology.php">Scope</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <t><a href="eri.php"
                                                        style="color: DarkGreen">Environmental
                                                        Impact Indicators</a>
                                                </t>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a
                                                    href="TOTALTOXICRELEASES.php">Total
                                                    Toxic Releases</a>
                                            </li>
                                            <li><a href="RPKR.php">Releases per
                                                    $1000 Revenue</a></li>
                                            <li><a href="toxicity.php">Toxicity
                                                    of Total Releases</a></li>
                                            <li><a href="CancerMethod.php">Regional
                                                    Contribution to Lifetime
                                                    Cancer Risk </a></li>

                                            <li><a href="PPWMA.php">Preferred
                                                    Waste Management
                                                    Activities</a></li>



                                        </ul>
                                    </li>


                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle"
                                            data-toggle="dropdown">Impact
                                            Score <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li class="divider"></li>
                                            <li>
                                                <t>Environmental Impact Score
                                                    Ranking Lists</t>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="PetroScores.php">Petroleum
                                                </a></li>
                                            <li><a href="FMscores.php">Fabricated
                                                    Metals </a></li>
                                            <li><a href="PMScores.php">Primary
                                                    Metals </a></li>

                                            <li><a href="ChemScores.php">Chemicals
                                                </a></li>
                                            <li class="divider"></li>
                                            <li class="divider"></li>
                                            <li>
                                                <t>Industry Top 10 Facilities
                                                    Graphs</t>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="PMranking.php">Primary
                                                    Metals</a></li>
                                            <li><a
                                                    href="Petroranking.php">Petroleum</a>
                                            </li>
                                            <li><a href="FMranking.php">Fabricated
                                                    Metals</a></li>
                                            <li><a
                                                    href="Chemicalsranking.php">Chemicals</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle"
                                            data-toggle="dropdown">Downloads<b
                                                class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="Report.php">Report</a>
                                            </li>
                                            <li><a href="factsheet.php">Fact
                                                    Sheet</a></li>
                                            <li><a href="powerpoint.php">Powerpoint
                                                    Summary</a></li>
                                            <li><a href="Manual.php">Site
                                                    Manual</a></li>
                                            <li><a href="mastersheet.php">Data
                                                    Sheets</a></li>



                                        </ul>
                                    </li>

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle"
                                            data-toggle="dropdown">About
                                            Us<b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="aboutus.php">Project
                                                    Members</a></li>
                                            <li><a
                                                    href="Acknowledgements.php">Acknowledgements</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li><a href="FeedbackPage.php">Feedback</a>
                                    </li>

                                </ul>
                            </div>
                            <!--/.nav-collapse -->
                        </div>
                        <!--/.container-fluid -->
                    </div>
                </div>

                <div align="center">
                    <h2>Total Toxic Releases
                        <a href="TOTALTOXICRELEASES.php "
                            target="_blank">[?]</a>
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
                    <a href="https://www.ioes.ucla.edu/calecomaps/">Home</a> |
                    <a href="https://www.ioes.ucla.edu/">IOES</a> | <a
                        href="https://www.ioes.ucla.edu/ccep/">CCEP</a> | <a
                        href="https://www.ioes.ucla.edu/calecomaps/FeedbackPage.php">Contact
                        Us</a>
                    |<a href="http://www.ucla.edu/terms-of-use/">Terms of
                        Use/Privacy
                        Policy</a>
                </div>
        </div>
    </body>

</html>
