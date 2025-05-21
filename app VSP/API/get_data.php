<?php
$connection= mysqli_connect("localhost","root","","id20478768_project");

$sql ="select nb_places_libres from parking";

$result=mysqli_query($connection,$sql);

$row = mysqli_fetch_assoc($result);

$nombre = $row['nb_places_libres'] ;

//echo $nombre ;

echo json_encode($row);


?>