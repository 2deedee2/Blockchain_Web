<?php
$nodeAddress = "http://localhost:5001";

//get chain data from node
$total_nodes = file_get_contents("$nodeAddress/allNodes");

echo "<h1>Total Blockchain nodes:</h1>".$total_nodes;



?>
