<?php
include_once('connect.php');
session_start();
$email=$_SESSION['email'];
$password=$_SESSION['password'];

if (isset($_GET['led1_on']))
{
  
$url = 'http://192.168.43.148/led1_on';
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

curl_close($ch);
}
if (isset($_GET['led1_off']))
{

  $url = 'http://192.168.43.148/led1_off';
  $ch = curl_init($url);
  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
  $response = curl_exec($ch);
  
  curl_close($ch);
}
if (isset($_GET['led2_on']))
{ 

  $url = 'http://192.168.43.148/led2_on';
  $ch = curl_init($url);
  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
  $response = curl_exec($ch);
  
  curl_close($ch);
}
if (isset($_GET['led2_off']))
{ 

  $url = 'http://192.168.43.148/led2_off';
  $ch = curl_init($url);
  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
  $response = curl_exec($ch);
  
  curl_close($ch);
}
if (isset($_GET['led3_on']))
{ 

  $url = 'http://192.168.43.148/led3_on';
  $ch = curl_init($url);
  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
  $response = curl_exec($ch);
  
  curl_close($ch);
}
if (isset($_GET['led3_off']))
{

  $url = 'http://192.168.43.148/led3_off';
  $ch = curl_init($url);
  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
  $response = curl_exec($ch);
  
  curl_close($ch);
}
if (isset($_GET['led4_on']))
{ 
  $url = 'http://192.168.43.148/led4_on';
  $ch = curl_init($url);
  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
  $response = curl_exec($ch);
  
  curl_close($ch); 
}
if (isset($_GET['led4_off']))
{ 

  $url = 'http://192.168.43.148/led4_off';
  $ch = curl_init($url);
  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
  $response = curl_exec($ch);
  
  curl_close($ch);
}
if (isset($_POST['barrière_entrée_ouvert']))
{ 

  $url = 'http://192.168.43.148/servor1';
  $ch = curl_init($url);
  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
  $response = curl_exec($ch);
  
  curl_close($ch);
}
if (isset($_POST['barrière_entrée_fermé']))
{ 

  $url = 'http://192.168.43.148/servor2';
  $ch = curl_init($url);
  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
  $response = curl_exec($ch);
  
  curl_close($ch);
}
if (isset($_POST['laser_on']))
{ 

  $url = 'http://192.168.43.148/alarme_on';
  $ch = curl_init($url);
  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
  $response = curl_exec($ch);
  
  curl_close($ch);
}
if (isset($_POST['laser_off']))
{ 
  $url = 'http://192.168.43.148/alarme_off';
  $ch = curl_init($url);
  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
  $response = curl_exec($ch);
  
  curl_close($ch);
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet"
  type ="text/css" href ="Admin.css" media="screen" />
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
    <title> pageAdmin </title>
</head>
<body>
<?php include 'nav.php' ?>
  <div class="banner">
    <left><img src ="bleu bilfazett.png" alt="image" height ="170" width="20%"></left><font color="gray" size ="4" face="normal"><center> <u><h1>Cher Administrateur</h1></u></centre></font>
  </div>
  <div>
          <font color="Gray" size ="5" face="normal"> <u><h2 align="center" class="sous_titres"> Manipulation du laser:</h2></u></font>
          <form action="" method="POST">
            <div id="div1">
              <button id="ONcam" style="background-color:green;" name="laser_on">ON</button>
              <button id="voir_photo_cam" style="background-color:red;" name="laser_off">OFF</button>
            </div>  
          </form>
  <font color="Gray" size ="5" face="normal"> <u><h2 align="center" class="sous_titres"> Manipulation des Barrières :</h2></u></font>
        <hr>
        <form action="" method="POST">
              <div class="manipulationB">
                    <button id="ouvrir" style="background-color: blue;" name="barrière_entrée_ouvert">Ouvrir barrière d'entrée</button>
                    <button id="fermer"  style="background-color: red;" name="barrière_entrée_fermé">Ouvrir barrière de Sortie</button> 
                  </div>
      </form>
        <div>
          <font color="Gray" size ="5" face="normal"> <u><h2 align="center" class="sous_titres"> Manipulation des lampes :</h2></u></font>
          <form action="" method="GET">
            <div id="div1">
              <button id="ONcam" style="background-color:green;" name="led1_on">Lampe 1</button>
              <button id="voir_photo_cam" style="background-color:red;" name="led1_off">Lampe 1</button>
            </div>  
          </form>
          <form action="" method="GET">
            <div id="div1">
              <button id="ONcam" style="background-color:green;" name="led2_on">Lampe 2</button>
              <button id="voir_photo_cam" style="background-color:red;" name="led2_off">Lampe 2</button>
            </div>  
          </form>
          <form action="" method="GET">
            <div id="div1">
              <button id="ONcam" style="background-color:green;" name="led3_on">Lampe 3</button>
              <button id="voir_photo_cam" style="background-color:red;" name="led3_off">Lampe 3</button>
            </div>  
          </form>
          <form action="" method="GET">
            <div id="div1">
              <button id="ONcam" style="background-color:green;" name="led4_on">Lampe 4</button>
              <button id="voir_photo_cam" style="background-color:red;" name="led4_off">Lampe 4</button>
            </div>  
          </form>
        </div>
          <br> <hr> <br>
         <div> <font color="Gray" size ="5" face="normal"> <u><h2 align="center" class="sous_titres"> Information sur ...</h2></u></font>
            <div class="informations">
               <center> 
                <button  type="reset" id="parking" >informations sur le parking</button>
                <button type="reset" id="réservation" >informations sur les réservations</button><br>
                <button type="reset" id="clients" >informations sur les clients</button>
                <button type="reset" id="historique">l'historique</button>
            </center> 
            </div>  
          </div> 
          <br><br> <hr><br><br>
         <center><img src ="chabaka.png" alt="image" height =" 500" width="100%"> <br><br></center> <br><br>
         <?php include 'footer.php'?>
<script>
                  document.getElementById("parking").addEventListener("click", function() {
                    window.location.href = "Parking.php";
                  });
</script>
<script>
                document.getElementById("réservation").addEventListener("click", function() {
                  window.location.href = "Réservations.php";
                });
</script>
<script>
                document.getElementById("clients").addEventListener("click", function() {
                  window.location.href = "Client.php";
                });
</script>
<script>
                document.getElementById("historique").addEventListener("click", function() {
                  window.location.href = "Historique.php";
                });
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>      
</body>
</html>