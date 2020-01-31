<?php

$nodeAddress = "http://localhost:5001";

//get chain data from node
$total_nodes = file_get_contents("$nodeAddress/nodes/resolve");

echo "<h1>Resolve successful.</h1>".$total_nodes;