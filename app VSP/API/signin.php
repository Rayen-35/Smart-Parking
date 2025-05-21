<?php

$connection= mysqli_connect("localhost","root","","id20478768_project");

$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM utilisateur WHERE email='$email' and password='$password' ";

$result = mysqli_query($connection,$sql);
$result1 = mysqli_fetch_assoc($result);

if ($result1){
    session_start();
    $_SESSION['email']=$result1['email'];
    $_SESSION['password']=$result1['password'];
    echo "data founded11111";
}
else{
    echo "failed";
}
?>