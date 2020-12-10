<!doctype html>
<html class="no-js" lang="en">

	<head>
		<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
		<title>Cal EcoMaps Environmental Impact Indicators</title>
		<link href="css/style.css" rel="stylesheet">
		<link href="css/bootstrap.css" rel="stylesheet">

		<script src="js/bootstrap.js"></script>
		<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	</head>

	<body>
		<?php include_once("analyticstracking.php") ?>
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

			<h1>Environmental Impact Indicators</h1>

			Each facility’s Cal EcoMaps Environmental Impact Score was based on five
			environmental impact indicators: <br><br><a href="TOTALTOXICRELEASES.php"
				target="_blank">1)the total amount of toxic releases</a> <br> <a
				href="RPKR.php" target="_blank">2)toxic releases per $1000 of
				revenue</a> <br> <a href="toxicity.php" target="_blank">3)toxicity of
				total releases</a> <br> <a href="CancerMethod.php"
				target="_blank">4)regional contribution to lifetime cancer risk due to
				air emissions</a> <br> <a href="PPWMA.php" target="_blank">5) waste
				managed through recycling, energy recovery, and treatment</a>
			<br><br>These five variables were chosen because they represent the impact
			of each facility’s toxic releases on the environment and public health.

			<br><br>
			<div id="footer"> <?php include('footer.php'); ?> </div>

		</div>


	</body>

</html>
