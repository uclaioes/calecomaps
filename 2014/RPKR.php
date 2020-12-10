<!doctype html>
<html class="no-js" lang="en">

	<head>
		<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
		<title>Releases per $1000 of Revenue</title>
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

			<h1>Toxic Releases per $1000 of Revenue </h1>
			<h2>Units: lbs/$1000</h2> <br><br>
			Toxic Releases per $1000 of Revenue represents the facility’s efficiency
			at generating the least amount of toxic releases for a standardized amount
			of revenue. This is the first known project to measure a facility’s
			environmental impact relative to its fiscal performance by standardizing
			each facility’s pounds of toxic releases with respect to $1000 of its
			annual revenue . We gathered facility annual revenue data from
			ReferenceUSA, Hoovers, and Orbis.
			<br><br>
			More information on this variable and how it was used to calculate the <a
				href="eismethodology.php" target="_blank">Cal EcoMaps Environmental
				Impact Score</a> can be found in our <a href="Report.php"
				target="_blank">report</a>.


			<br><br>
			Sources: <a
				href="https://www2.epa.gov/toxics-release-inventory-tri-program/trinet"
				target="_blank">TRI.NET</a>, <a href="http://www.referenceusa.com/"
				target="_blank">ReferenceUSA</a>, <a href="http://www.hoovers.com/"
				target="_blank">Hoovers</a>, <a
				href="https://www.bvdinfo.com/en-us/products/company-information/international/orbis-(1)"
				target="_blank">Orbis </a>, <a href="http://www.insideview.com/"
				target="_blank">InsideView</a>

			<br><br><br><br>
			<div id="footer"> <?php include('footer.php'); ?> </div>
		</div>
	</body>



</html>
