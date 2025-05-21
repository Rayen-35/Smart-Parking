<?php

$connection= mysqli_connect("localhost","root","","id20478768_project");

$matricule = $_POST["matricule"];
$date = $_POST["date"];
$duree = $_POST["dépard"];
$sql = "INSERT INTO réservation (matricule,heure_arriv,heure_dep) VALUES ('$matricule', '$date' , '$duree')";

$result = mysqli_query($connection,$sql);

if ($result){
    echo "data inserted";
}
else{
    echo "failed";
}
?>