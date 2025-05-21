<?php

$connection= mysqli_connect('localhost','root','','id20478768_project');

$matricule = $_POST["matricule"];
$nom = $_POST["nom"];
$prénom = $_POST["prénom"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO utilisateur (matricule,nom,prénom,email,password) VALUES 
('$matricule', '$nom' ,'$prénom','$email','$password')";

$result = mysqli_query($connection,$sql);

if ($result){
    echo "data inserted";
}
else{
    echo "failed";
}
?>