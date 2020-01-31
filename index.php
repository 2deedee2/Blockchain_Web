<?php
require_once "router.php";
route('/', function () {
    return "Hello World";
});
//fetch username & password
//$username = $_POST["email"];
//$password = $_POST["pwd"];

//defind the node address
$nodeAddress = "http://localhost:5001";

//get chain data from node
$chain = file_get_contents("$nodeAddress/chain");

echo $chain;













//mine the chain
//$mine = file_get_contents("http://localhost:5001/mine");

//resolve the chain
//$resolve = file_get_contents("http://localhost:5001/nodes/resolve"););

//generate the user identity using sha1
/*
$str = $username . $password;
$shaTest = sha1($username);
echo $shaTest;
*/

//send Transactions(JSON) via POST

/*
$Ballot = array(
    'sender' => '0',
    'recipient' => "1ac215e48ad94c3f932fbbcd7dfd1798",
    'ballot' => 'B'
);
$AddBallotUrl = "http://localhost:5001/transactions/new";
$ch = curl_init($AddBallotUrl);
$jsonDataEncoded = json_encode($Ballot);
curl_setopt($ch , CURLOPT_POST , 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
$result = curl_exec($ch);
echo $result;
*/

//var_dump($username,$password,$shaTest);
?>