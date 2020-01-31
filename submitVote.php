<?php

//send Transactions(JSON) via POST

$uname = $_COOKIE['uname'];
$can = $_COOKIE['can'];
if($can == "can1"){
    $can = "Candidate 1";
}elseif ($can == "can2") {
    $can = "Candidate 2";
}elseif ($can == "can3") {
    $can = "Candidate 3";
}

//Store into the database
include("connect.php");
$q = "select * FROM `VoterData` WHERE username='$uname' ";
$result = mysqli_query($connect, $q);
if(!$result){
    die('Worng SQL insert' . mysqli_error($connect));
}else if(mysqli_num_rows($result) > 0){
    while($row = $result->fetch_assoc()){
        $hash = $row["blockchain_id"];
        $username = $row["username"];
    }
}
//echo $result;
//$rows=mysqli_num_rows($result);
//header("refresh:0;url=index.html");
mysqli_close($connect);


$Ballot = array(
    'sender' => "$uname",
    'recipient' => "1ac215e48ad94c3f932fbbcd7dfd1798",
    'ballot' => "$can"
);
$AddBallotUrl = "http://localhost:5001/transactions/new";
$ch = curl_init($AddBallotUrl);
$jsonDataEncoded = json_encode($Ballot);
curl_setopt($ch , CURLOPT_POST , 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
echo "<h1>Thanks for your participation!</h1>";
echo $jsonDataEncoded . "</br>";
$result = curl_exec($ch);



?>