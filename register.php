<?php
//check submit
header("Content-Type:   text/html; charset= utf8");
if(!isset($_POST['submit'])){
    exit("Wrong operation, plese try again.");
}

//fetch username & password
$username = $_POST["email"];
$password = $_POST["pwd1"];

//generate the user identity using sha1

$str = $username . $password;
$hash = sha1($str);

//Store into the database
include("connect.php");
$q = "insert into VoterData(username,password,blockchain_id) values ('$username','$password','$hash)";
$result = mysqli_query($connect, $q);
if(!$result){
    die('Worng SQL insert' . mysqli_error($connect));
}
//echo $result;
//$rows=mysqli_num_rows($result);
header("refresh:0;url=index.html");
mysqli_close($connect)


?>