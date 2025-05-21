<?php

$connection= mysqli_connect("localhost","root","","id20478768_project");

$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM utilisateur WHERE email='$email' and password='$password' ";

$result = mysqli_query($connection,$sql);
$result1 = mysqli_fetch_assoc($result);

$matricule = $result1['matricule'];
$prénom = $result1['prénom'];
date_default_timezone_set('Africa/Tunis');
$date = date('Y-m-d H:i:s');

$sql = "insert into historique values('NULL','$matricule','$date','$prénom a crée un compte')";
$ppo = mysqli_query($connection,$sql);
if ($ppo){
    echo "historique inserted";
}
else{
    echo "historique failed to be inserted";
}


?>