<?php


header("Content-Type: text/html; charset=utf8");
/*
if(!isset($_POST["submit"])){
exit("Wrong operation, plese try again.");
}
*/

//connect PHP
include('connect.php');
$username = $_POST['email'];
$password = $_POST['pwd'];
setcookie('uname',$username);
if($username && $password){
    if($username == "admin@test.com" && $password == "admin"){
        header( 'Location: http://localhost/Blockchain_web/admin.html') ;
    }
    $sql = "select * from VoterData where username='$username' && password='$password'";
    //run sql
    $result = mysqli_query($connect, $sql);
    $rows = mysqli_num_rows($result);
    if($rows){
        header("refresh:0;url=index.html");
        exit;
    }else{
        echo "worng username of password.";
    }
}else{
    echo "username and password can not be empty!";
}
?>