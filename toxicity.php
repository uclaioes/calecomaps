<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Toxicity of Total Releases</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/custom.css">

	<?php include("inc-header.php"); ?>
</head>

<body>
	
		<div class="wrapper">

			<?php include("inc-nav.php"); ?>

				<h1>Toxicity of Total Releases</h1>
				<h2>Units: lbs x toxicity</h2>
				<br>
				<br>
				<p>Toxicity of Total Releases is provided by the TRI and measures the relative health-related impacts between different facilities. The facility’s total toxic releases is multiplied by a specific toxicity factor determined by the EPA’s Risk Screening
					Environmental Indicators (RSEI) for each chemical released. Only toxicity of on-site toxic releases were considered for this local analysis of health-related impacts.</p>

				<p>More information on this variable and how it was used to calculate the <a href="eismethodology.php" target="_blank">Cal EcoMaps Environmental Impact Score</a> can be found in our <a href="Report.php" target="_blank">report</a>.</p>


				<p>Sources:<a href="http://www.epa.gov/opptintr/rsei/tools/glossary.html" target="_blank">RSEI</a></p>

			
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
