<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Cal EcoMaps</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/custom.css">


		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript">
			google.load('visualization', '1', {
				packages: ['corechart', 'table']
			});

		</script>

		<!-- MapBox CSS (JavaScripts are in footer) -->

		<link href="https://api.tiles.mapbox.com/mapbox.js/v1.6.2/mapbox.css" rel="stylesheet" />
		<link href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.24.0/L.Control.Locate.css" rel="stylesheet" />

	</head>

	<body>
		

		<?php include("inc-nav.php"); ?>

		<div class="welcome">
			<div class="container">
				<div class="row">
					<div class="col-md-2"><img src="img/callogo.jpg"
							style="width:200px"></div>
					<div class="col-md-1" style="width:90px"></div>

					<div class="col-md-6">
						<p>
							Use the interactive map below to learn more about Los Angeles
							county Toxics Release Inventory (TRI) facilities near your
							neighborhood or workplace. Hover over an icon to see the
							facility’s name, industry, and toxicity classification. Click on
							an icon to see more facility information.</p>
					</div>
					<div class="col-md-1" style="width:30px"></div>
					<div class="col-md-2" style="float:left; padding-top:25px">
						<div><img src="img/ucla-ioes-logo.png"
								style="width:230px; float:left"></div>
						<div><img src="img/cceplogo.jpg" style="width:230px"></div>
					</div>
				</div>
			</div>
		</div>




		<div id="map">
			<nav class='menu-ui'>
				<div class='industry' style="font-size:15px; font: Helvetica;">
					<Center><b>Select Industry</b></center>
				</div>
				<a href='#' class='active' data-filter='all'>Show all</a>
				<a href='#' data-filter='Petroleum'>Petroleum</a>
				<a href='#' data-filter='Petroleum Bulk'>Petroleum Bulk</a>
				<a href='#' data-filter='Fabricated Metals'>Fabricated Metals</a>
				<a href='#' data-filter='Primary Metals'>Primary Metals</a>
				<a href='#' data-filter='Chemicals'>Chemicals</a>
			</nav>
		</div>
		<div id='legend-content' style='display: none;'>
			<div class='my-legend'>
				<div class='legend-scale'>
					<ul class='legend-labels'>

					</ul>
				</div>
			</div>


		</div>


		<div id='legend-content2' style='display: none;'>
			<div class='my-legend2'>
				<div class='legend-title'><a href='totaltoxicreleases.php'
						target='blank'><b>Toxicity of Air Releases [?]</b></a></div>
				<div class='legend-scale'>
					<ul class='legend-labels'>
						<li><span style='background:#f86767;'></span>Very High</li>
						<li><span style='background:#f5c272;'></span>High</li>
						<li><span style='background:#f1f075;'></span>Moderate</li>
					</ul>
				</div>
			</div>
		</div>


		<br>

		<div class="wrapper">
			<div id="CompanyName"></div>
			<div id="TypeIndustry"></div><br><br>
			<div id="SCORE"></div><br>
		</div>

		<div id="Table"></div>


		<div class="wrapper">
			<div id="Note"></div>
		</div>

		

		<footer role="contentinfo">
			<p><a href="/ccep/calecomaps/">Home</a> | <a href="/">IOES</a> | <a
					href="/ccep/">CCEP</a> | <a
					href="http://www.ucla.edu/terms-of-use/">Terms of Use/Privacy Policy</a>
			</p>
		</footer>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://api.tiles.mapbox.com/mapbox.js/v1.6.2/mapbox.js"></script>
		<script src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.24.0/L.Control.Locate.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>

	</body>

</html>
