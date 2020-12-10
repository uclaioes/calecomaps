<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Total Toxicity of Air Releases</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/custom.css">

	<?php include("inc-header.php"); ?>


</head>

<body>
	

		<div class="wrapper">

			<?php include("inc-nav.php"); ?>

				<div id="chemicals" class="container">

					<h1>Total Toxicity of Air Releases</h1>



					<div class="panel panel-info">
						<div class="panel-heading">
							<h2 class="panel-title">Units: Lbs</h2>
						</div>
						<div class="panel-body">
							<p>To account for the amount of chemicals released into the environment, the Toxicity of Air Releases variable was selected to evaluate facilities because specific toxic releases can have significant environmental and public health effects, especially
								if they are released in extremely large quantities. This variable includes on- and off-site releases from production to air. It excludes toxic releases due to catastrophic, one-time events so that toxic releases related to facility production
								processes are only considered.</p>

							<p>More information on this variable can be found in our <a href="Report.php" target="_blank">report</a>.
								<br>
								<br>Database: <a href="https://www2.epa.gov/toxics-release-inventory-tri-program/trinet" target="_blank">TRI.NET</a></p>
						</div>
					</div>

				</div>

				<footer role="contentinfo">
			<p><a href="/ccep/calecomaps/">Home</a> | <a href="/">IOES</a> | <a
					href="/ccep/">CCEP</a> | <a
					href="http://www.ucla.edu/terms-of-use/">Terms of Use/Privacy
					Policy</a></p>
		</footer>


		<script
			src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
		</script>
		<script src="https://api.tiles.mapbox.com/mapbox.js/v1.6.2/mapbox.js">
		</script>
		<script
			src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.24.0/L.Control.Locate.js">
		</script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
		
</body>

</html>
