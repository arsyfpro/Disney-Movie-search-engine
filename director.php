<?php

	require_once realpath(__DIR__)."/vendor/autoload.php";
    require_once __DIR__."/html_tag_helpers.php";

    $resource = $_GET['q'];

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <?php include 'source.php'; ?>
    <title>Web Semantik - Project</title>
    <style type="text/css">
		#mapid {
			width: 500px;
    		height:250px;
		}
	</style>
</head>
<body>
<?php include "navbar.php";?>

<div class="container">
	<br>
	
<div class="card">
	<div class="row">
		<aside class="col-sm-12">
			<article class="card-body p-5">

			<?php
				\EasyRdf\RdfNamespace::set('geo', 'http://www.w3.org/2003/01/geo/wgs84_pos#');
				\EasyRdf\RdfNamespace::set('foaf', 'http://xmlns.com/foaf/0.1/');
				\EasyRdf\RdfNamespace::set('dbp', 'http://dbpedia.org/property/');
				\EasyRdf\RdfNamespace::set('dbo', 'http://dbpedia.org/ontology/');
				\EasyRdf\RdfNamespace::set('rdf', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#');
				\EasyRdf\RdfNamespace::set('rdfs', 'http://www.w3.org/2000/01/rdf-schema#');
				\EasyRdf\RdfNamespace::set('owl', 'http://www.w3.org/2002/07/owl#');
				\EasyRdf\RdfNamespace::set('film', 'http://example.org/schema/film/');
				\EasyRdf\RdfNamespace::setDefault('og');

				$sparql_endpoint = 'https://dbpedia.org/sparql';
    			$sparql = new \EasyRdf\Sparql\Client($sparql_endpoint);

			    $sparql_query = '
			      SELECT DISTINCT * WHERE {
					<'.$resource.'> dbo:abstract ?abstract;
					                foaf:name ?nama;
					                dbo:birthPlace ?t_l .
					?t_l rdfs:label ?tempat_lahir .
					OPTIONAL {?t_l geo:lat ?lat;
					       		   geo:long ?long.
					       	}
					  FILTER (lang(?abstract) = "en" && lang(?tempat_lahir) = "en" && lang(?nama) = "en")
					}';

			    $result = $sparql->query($sparql_query);

			    foreach ($result as $row) {

			?>
				<h3 class="title mb-3"><?= $row->nama ?></h3>

				<dl class="item-property">
				  <dd>
				  	<p><?= $row->abstract ?></p>
				  </dd>
				</dl>

				<dl class="param param-feature">
					<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
					<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
				  <dt>Birth place</dt>
				  <dd>
				  	<?= $row->tempat_lahir ?>
				  	
				  	<?php

				  	if (!empty($row->lat) && !empty($row->long) ){

			          print "<div id='mapid'></div>";
			          $map_script = "var mymap = L.map('mapid').setView([" . $row->lat . ", " . $row->long . "], 13);
			                L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
			                maxZoom: 18,
			                attribution: 'Map data &copy; <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a> contributors, ' +
			                          '<a href=\"https://creativecommons.org/licenses/by-sa/2.0/\">CC-BY-SA</a>, ' +
			                             'Imagery © <a href=\"https://www.mapbox.com/\">Mapbox</a>',
			                id: 'mapbox/streets-v11',
			                tileSize: 512,
			                zoomOffset: -1
			               }).addTo(mymap);

			               L.marker([" . $row->lat . ", " . $row->long . "]).addTo(mymap)
			               .bindPopup(\"<b>" . $row->tempat_lahir . "</b>\").openPopup();";

			          print "<script>" . $map_script . "</script>";

			        }
			        
			        ?>
				  </dd>
				</dl>  <!-- item-property-hor .// -->

			<?php 
					break;
				} 
			?>

				<hr>

				<a href="javascript:history.back()" class="btn btn-md btn-danger"> Back </a>
			</article> <!-- card-body.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
</div> <!-- card.// -->


</div>
<!--container.//-->