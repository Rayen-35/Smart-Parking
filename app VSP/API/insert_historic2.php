<?php

$connection= mysqli_connect("localhost","root","","id20478768_project");

$matricule = $_POST["matricule"];

$sql = "SELECT * FROM utilisateur WHERE matricule='$matricule'";

$result = mysqli_query($connection,$sql);
$result1 = mysqli_fetch_assoc($result);


$prénom = $result1['prénom'];
date_default_timezone_set('Africa/Tunis');
$date = date('Y-m-d H:i:s');

$sql = "insert into historique values('NULL','$matricule','$date','$prénom a affecté une réservation')";
$ppo = mysqli_query($connection,$sql);
if ($ppo){
    echo "historique inserted";
}
else{
    echo "historique failed to be inserted";
}


?>