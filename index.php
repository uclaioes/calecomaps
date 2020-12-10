<!DOCTYPE html>
<html>
<head>


	<title>Cal EcoMaps</title>

	<?php include("inc-header.php") ?>
	

	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script type="text/javascript">
	google.load('visualization', '1', {packages: ['corechart', 'table']});
	</script>

	<!-- Load javascript and css from mapbox api -->
	<script src="https://api.tiles.mapbox.com/mapbox.js/v1.6.2/mapbox.js"></script>
	<link href="https://api.tiles.mapbox.com/mapbox.js/v1.6.2/mapbox.css" rel="stylesheet" />
	<script src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.24.0/L.Control.Locate.js"></script>
	<link href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.24.0/L.Control.Locate.css" rel="stylesheet" />

	</head>

<body>
<?php include("analyticstracking.php"); ?>

<?php include("inc-nav.php"); ?>

<div class="welcome">
	<div class="container">
				<div class="row">
          			<div class="col-md-2"><img src="assets/img/callogo.jpg" style="width:200px"></div>
          			<div class="col-md-1" style="width:90px"></div>

        			<div class="col-md-6" style="padding-top:15px; padding-bottom:15px; background-color:#e5f8ff; border-radius:15px">
						<p style="text-align:center; font-size:15px; width:100%; margin: auto; ">Use the interactive map below to learn more about Los Angeles county Toxics Release Inventory (TRI) facilities near your neighborhood or workplace. Hover over an icon to see the facility’s name, industry, and toxicity classification. Click on an icon to see more facility information.</p></div>
					<div class="col-md-1" style="width:30px"></div>
					<div class="col-md-2" style="float:left; padding-top:25px">
						<div><img src="assets/img/ucla-ioes-logo.png" style="width:230px; float:left"></div>
						<div><img src="assets/img/cceplogo.jpg" style="width:230px"></div>
					</div>
	</div>
</div>
</div>




<div id="map">
		<nav class='menu-ui'>
		  <div class='industry' style="font-size:15px; font: Helvetica;"><Center><b>Select Industry</b></center></div>
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
<div class='legend-title' ><a href='totaltoxicreleases.php' target='blank'><b>Toxicity of Air Releases [?]</b></a></div>
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

	<?php include("inc-footer.php"); ?>
</body>
</html>
