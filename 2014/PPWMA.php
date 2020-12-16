<!doctype html>
<html class="no-js" lang="en">

  <head>
    <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
    <title>Preferred Waste Management Activities</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
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
                <button type="button" class="navbar-toggle"
                  data-toggle="collapse" data-target=".navbar-collapse">
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
                      data-toggle="dropdown">Methodology <b
                        class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li class="divider"></li>
                      <li>
                        <t><a href="eismethodology.php"
                            style="color: DarkGreen">Cal
                            EcoMaps Environmental Impact Score</a></t>
                      </li>
                      <li class="divider"></li>
                      <li><a href="Methodology.php">Scope</a></li>
                      <li class="divider"></li>
                      <li>
                        <t><a href="eri.php"
                            style="color: DarkGreen">Environmental
                            Impact Indicators</a></t>
                      </li>
                      <li class="divider"></li>
                      <li><a href="TOTALTOXICRELEASES.php">Total Toxic
                          Releases</a>
                      </li>
                      <li><a href="RPKR.php">Releases per $1000 Revenue</a></li>
                      <li><a href="toxicity.php">Toxicity of Total Releases</a>
                      </li>
                      <li><a href="CancerMethod.php">Regional Contribution to
                          Lifetime
                          Cancer Risk </a></li>

                      <li><a href="PPWMA.php">Preferred Waste Management
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
                    <a href="#" class="dropdown-toggle"
                      data-toggle="dropdown">About
                      Us<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="aboutus.php">Project Members</a></li>
                      <li><a href="Acknowledgements.php">Acknowledgements</a>
                      </li>

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

        <h1>Preferred Waste Management Activities</h1>
        Also known as: Waste Managed Through Recycling, Energy Recovery, and
        Treatment
        <br>
        <br>

        <h2>Units: lbs </h2>
        <br>
        <br> This variable represents the facility’s efforts at preventing
        toxic releases into the environment by managing their
        waste through recycling, energy recovery, and treatment. Recycling,
        energy recovery, and treatment are preferred
        waste management activities as defined by EPA’s Waste Management
        Hierarchy. The quantities managed by these methods
        exclude catastrophic, one-time events so that values associated with
        facility production processes are only considered.
        <br>
        <br> More information on this variable and how it was used to
        calculate the
        <a href="eismethodology.php" target="_blank">Cal EcoMaps
          Environmental Impact Score</a> can be found in our
        <a href="Report.php" target="_blank">report</a>.
        <br>
        <br>
        <h3>Percent of Waste Managed through Recycling, Energy Recovery, and
          Treatment</h3>
        <br>
        <br>
        <h2>Units: % = lbs/lbs</h2>
        <br>
        <br> This is the facility’s percentage of waste that is managed
        through recycling, energy recovery, and treatment out
        of its total production-related waste.


        <br>
        <br> Source:
        <a href="https://www2.epa.gov/toxics-release-inventory-tri-program/trinet"
          target="_blank">TRI.NET</a>
        <br>
        <br>
        <br>
        <br>
        <div id="footer">
          <a href="https://www.ioes.ucla.edu/calecomaps/">Home</a> | <a
            href="https://www.ioes.ucla.edu/">IOES</a> | <a
            href="https://www.ioes.ucla.edu/ccep/">CCEP</a> | <a
            href="https://www.ioes.ucla.edu/calecomaps/FeedbackPage.php">Contact
            Us</a>
          |<a href="http://www.ucla.edu/terms-of-use/">Terms of Use/Privacy
            Policy</a>
        </div>
    </div>
  </body>

</html>
