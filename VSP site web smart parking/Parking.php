<?php
include_once('connect.php');
session_start();
$sql = "select * from parking";
$usr = mysqli_query($connect,$sql);
$fetch = mysqli_fetch_assoc($usr);
$cc1= $fetch['nb_places_libres'] ;
$cc = 4 - $cc1 ;
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet"
  type ="text/css" href ="parking.css" media="screen" />
  <link rel="stylesheet" type ="text/css" href ="footer.css" media="screen" />
  <link rel="stylesheet" type ="text/css" href ="nav.css" media="screen" />
    <meta charset ="utf-8"/>
    <meta name="description" content="Notre site vous permet de réserver une place de parking à distance et en toute sécurité. Nous vous offrons un accès facile et rapide à nos places de parking et vous pouvez consulter toutes les informations sur notre parking en ligne. Avec VSP , vous n'avez plus à vous soucier de trouver une place de parking - réservez dès maintenant et profitez d'un stationnement pratique et abordable">
    <meta name="keywords" content="Intelligence artificielle,Smart,Web,Mobile,Parking,IOT">
    <meta name="author" content="Rayen Mathlouthi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title> Parking </title>
</head>
<body>
<?php include 'nav.php' ?>
<div class="banner">
  <img src ="bleu bilfazett.png" alt="image" height ="170" width="20%"><font color ="gray"><h1><u>Informations sur le parking</u></h1></font>
</div>
          <br><br> 
         <form><h1 align ="center"><u>Informations :</u></h1></form> 
          <div class="box-3" style="height:200px;margin-bottom:0px;">
            <div class="btn btn-three" style="width:30%;height:100px;margin-top:50px;">
              <span style="color:#fff;">L'ouverture de la Parking : 7:00H</span>
            </div>
            <div class="btn btn-three" style="width:30%;height:100px;margin-top:50px;">
                <span style="color: #fff;">La fermeture de la parking : 22:00H</span>
              </div>
              <div class="btn btn-three" style="width:30%;height:100px;margin-top:50px;">
                <span style="color: #fff;">Nombre de places de parking totale : 4</span>
              </div>
          </div>
         <div class="box-4" style="height:130px;margin-top:0px;">
          <div class="btn btn-three" style="width:30%;height:100px;margin-top:10px;">
            <span style="color: #f3efef;">Nombre de places libres : <?php echo $cc1 ?></span>
          </div>
          <div class="btn btn-three" style="width:30%;height:100px;margin-top:10px;">
              <span style="color: #f1f1f1;">Nombre de places réservées : <?php echo $cc?></span>
            </div></div>
            <br>  <br>  <br>  <br> <br>  <br>  <br>  <br>
          <div>
            <center>  <button type="reset" id="res"> << back </button></center>
          </div><script>
            document.getElementById("res").addEventListener("click", function() {
              window.location.href = "pageAdmin.php";
            });
          </script>
          <br>  <br>  <br>  <br>
          <?php include 'footer.php'?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>      
</body>
</html>
