<?php

$request = substr($_SERVER['REQUEST_URI'], strpos($_SERVER['REQUEST_URI'], '/', 2)+1);

header('Content-Disposition: filename=teleport.awt');
header('Content-Type: text/awt');

if (empty($request)) {
	echo 'teleport l3d'."\n";
}
else {
	list($world, $north, $west, $alt, $rotation) = split ('_', $request);
	echo "teleport $world $north $west $alt $rotation\n";
}
?>
