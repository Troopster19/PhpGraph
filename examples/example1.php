<?php
	namespace PhpGraph;

	require_once('../vendor/autoload.php');

	use PhpGraph\Graph;

	$data = array(
		12124,
		5535,
		43373,
		22223,
		90432,
		23332,
		15544,
		24523,
		32778,
		38878,
		28787,
		33243,
		34832,
		32302
	);

	$graph = new Graph(500, 350);

	$graph->setTitle('Widgets Produced');
	$graph->setGradient('red', 'maroon');

	$graph->addData($data);

	$graph->createGraph(basename(__FILE__, '.php') . '.png');
