<?php
error_reporting(0);
session_start();

$host ="localhost";
$username ="root";
$password="";
$db ="school_project";

$data = mysqli_connect($host,$username,$password,$db);

if($data ===false){
    echo "Connection error";
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name= $_POST['username'];
    $password= $_POST['password'];

$sql ="select *  FROM user WHERE username='".$name."' AND password='".$password."' ";
$result = mysqli_query($data,$sql);
$row = mysqli_fetch_array($result);

if($row["usertype"]=="student")
{
    $_SESSION['username']=$name;
    //one cant log into admin using direct  url from studenthome line 27
    $_SESSION['usertype']="student";

    header("location:studenthome.php");
}
elseif($row["usertype"]=="admin")
{
    $_SESSION['username']=$name;

    $_SESSION['usertype']="admin";

    header("location:adminhome.php");
}
else {
   
    $message = "Username or Password do not match";
    $_SESSION['loginMessage']=$message;

    header("location:login.php");
}
}
?>