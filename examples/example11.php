<?php
	namespace PhpGraph;

	require_once('../vendor/autoload.php');

	use PhpGraph\Graph;

	$set1 = array (
		1917 => 4011, 1918 => 4886, 1919 => 5411,
		1920 => 5831, 1921 => 5865, 1922 => 5704, 1923 => 5337, 1924 => 5144,
		1925 => 5018, 1926 => 4971, 1927 => 4630, 1928 => 4411, 1929 => 4287,
		1930 => 4116, 1931 => 3940, 1932 => 3764, 1933 => 3592, 1934 => 3447,
		1935 => 3280, 1936 => 3215, 1937 => 3366, 1938 => 3569, 1939 => 3598,
		1940 => 4436, 1941 => 5939, 1942 => 7397, 1943 => 8855, 1944 => 9835,
		1945 => 9998, 1946 => 10631, 1947 => 11340, 1948 => 11549, 1949 => 11642,
	);

	$set2 = array (
		1910 => 2059, 1911 => 2135, 1912 => 2209, 1913 => 2332, 1914 => 2437,
		1915 => 2786, 1916 => 3747, 1917 => 5011, 1918 => 5886, 1919 => 6411,
		1920 => 6831, 1921 => 6865, 1922 => 6704, 1923 => 6337, 1924 => 6144,
		1925 => 6018, 1926 => 5971, 1927 => 5630, 1928 => 5411, 1929 => 5287,
		1930 => 5116, 1931 => 4940, 1932 => 4764, 1933 => 4592, 1934 => 4447,
		1935 => 4280, 1936 => 4215, 1937 => 4366, 1938 => 4569, 1939 => 4598,
		1940 => 5436, 1941 => 5939, 1942 => 8397, 1943 => 9855, 1944 => 10835,
	);

	$graph = new Graph(600, 400);

	$graph->setTitleLocation('left');
	$graph->setTitle("Two sets with different start points");
	$graph->setBars(false);
	$graph->setLine(true);
	$graph->setDataPoints(false);
	$graph->setLineColor('blue', 'red');
	$graph->setDataValues(false);
	$graph->setXValuesInterval(5);
	$graph->setDataValueColor('blue', 'red');
	$graph->setLegend(true);
	$graph->setLegendTitle("set1", "set2");

	$graph->addData($set1, $set2);

	$graph->createGraph(basename(__FILE__, '.php') . '.png');