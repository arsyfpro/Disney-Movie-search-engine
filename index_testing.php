<?php
	require_once realpath(__DIR__)."/vendor/autoload.php";
    require_once __DIR__."/html_tag_helpers.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Web Semantik - Project</title>
</head>
<body>
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

	    $jena_endpoint = 'http://localhost:3030/film/query';
	    $sparql_jena = new \EasyRdf\Sparql\Client($jena_endpoint);

	    $sparql_query = '
	    	SELECT ?judul ?tahun ?link_rotten ?f ?no
			WHERE {
			  ?f a film:movie;
			     rdfs:label ?judul;
				 film:year ?tahun;
				 film:nomor ?no;
				 foaf:homepage ?link_rotten.
			}
			ORDER BY rand()';

		$result = $sparql_jena->query($sparql_query);

		foreach ($result as $row) {

			$rotten_tomatoes = \EasyRdf\Graph::newAndLoad($row->link_rotten);
			$src_poster = $rotten_tomatoes->image;
			
		?>
			<h2><?= $row->judul ?> (<?= $row->tahun ?>)</h2>
			<img src="<?= $src_poster ?>"/>
			<p>Nomor : <?= $row->no ?></p>
			<p>Link Rotten : <?= $row->link_rotten ?></p>
			<p>DBPedia : <a href="test.php?source=123">Link DBPedia</a></p>
			<br><br>
		<?php } ?>
</body>
</html>