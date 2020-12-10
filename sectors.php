<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Sectors</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/custom.css">


<?php include("inc-header.php") ?>

<style type="text/css">

body {
    background-image: url("assets/img/smoke1.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}

.table{
  background-color: white;
  width:75%;
}

#sector  {
  width:10%;
}

#description  {
  width:25%;
}

#number  {
  width:10%;
}

#releases  {
  width:10%;
}

#percentage  {
  width:10%;
}

.transparent {
  background:#7f7f7f;
  background:rgba(255,255,255,0.6);
}

</style>
</head>

<body>


<div class="wrapper">

<?php include("inc-nav.php"); ?>

<div class="container">

<div class="transparent" style="width:90%; margin:0 auto; padding-top:18px; padding-bottom:15px; padding-right:45px; padding-left:45px; border-radius:15px">

<h1>Industries</h1>

<div style="margin: 0 auto; width:60%; text-align: center;">We focused our analysis on the top 5 industries in Los Angeles County with the highest toxicity of air releases (toxicity x lbs) for 2013. These 5 industries account for 99% of the toxicity of air releases and 88% of the total pounds of releases from all L.A. County TRI facilities.
<br></div><br>


<div style="margin: 0 auto; width: 75%"> <img src="img/industries.png" style="width: 100%; margin: 0 auto"></div><br>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th id="sector">Industrial Sector</th>
        <th id="description">Industry Description</th>
        <th id="number">Number of Facilities with Toxic Air Releases</th>
        <th id="releases">Total Air Releases (lb)</th>
        <th id="percentage">Percentage of All L.A. County Air Releases</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td><b>Petroleum</b></td>
        <td>Transform crude petroleum and coal into usable products; refine petroleum products</td>
        <td>16</td>
        <td>1,700,531</td>
        <td>66.7%</td>
      </tr>
      <tr>
        <td><b>Chemical</b></td>
        <td>Formulate products from organic and inorganic raw materials</td>
        <td>55</td>
        <td>347,426</td>
        <td>13.6%</td>
      </tr>
      <tr class="success">
        <td><b>Fabricated Metals</b></td>
        <td>Transform metal into intermediate or end products</td>
        <td>35</td>
        <td>150,263</td>
        <td>5.9%</td>
      </tr>
      <tr>
        <td><b>Petroleum Bulk Terminals</b></td>
        <td>Store petroleum products</td>
        <td>13</td>
        <td>42,514</td>
        <td>1.7%</td>
      </tr>
      <tr class="success">
        <td><b>Primary Metals</b></td>
        <td>Smelt and refine ferrous and nonferrous metals, manufacture metal products</td>
        <td>27</td>
        <td>8,151</td>
        <td>0.3%</td>
      </tr>
      <tr>
        <td><b><i>Total for 5 Industries</i></b></td>
        <td></td>
        <td><b><i>156</i></b></td>
        <td><b><i>2,248,885</i></b></td>
        <td><b><i>88.2%</i></b></td>
      </tr>
    </tbody>
  </table>
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
