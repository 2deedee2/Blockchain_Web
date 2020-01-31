<?php

$nodeAddress = "http://localhost:5001";

//get chain data from node
$mine = file_get_contents("$nodeAddress/mine");

echo "<h1> Successful </h1>" . $mine;