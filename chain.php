<?php

$nodeAddress = "http://localhost:5001";

//get chain data from node
$chain = file_get_contents("$nodeAddress/chain");

echo $chain;