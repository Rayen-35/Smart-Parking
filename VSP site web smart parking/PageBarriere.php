<?php
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
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8"/>
        <meta name="description" content="Notre site vous permet de réserver une place de parking à distance et en toute sécurité. Nous vous offrons un accès facile et rapide à nos places de parking et vous pouvez consulter toutes les informations sur notre parking en ligne. Avec VSP , vous n'avez plus à vous soucier de trouver une place de parking - réservez dès maintenant et profitez d'un stationnement pratique et abordable">
        <meta name="keywords" content="Intelligence artificielle,Smart,Web,Mobile,Parking,IOT">
        <meta name="author" content="Rayen Mathlouthi">
        <title>PageBarriere</title>
        <link rel="stylesheet" type ="text/css" href ="Barriere.css" media="screen" />
        <link rel="stylesheet" type ="text/css" href ="footer.css" media="screen" />
        <link rel="stylesheet" type ="text/css" href ="nav.css" media="screen" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      </head>
<body>
<?php include 'nav.php' ?>
    <div class="banner">
      <img src ="bleu bilfazett.png" alt="image" height ="170" width="20%"><h1>Bienvenue dans notre Parking VSP</h1>
      <p>  <p>Vous trouverez ici les boutons pour manipuler les barrières</p></p>
    </div>
    <hr>
    <form action="" method="POST">
              <div class="manipulationB">
                    <button id="ouvrir" style="background-color: blue;" name="barrière_entrée_ouvert">Ouvrir barrière d'entrée</button>
                    <button id="fermer"  style="background-color: red;" name="barrière_entrée_fermé">Ouvrir barrière de Sortie</button> 
                  </div>
      </form>
                <script>
                    document.getElementById("annuler_res").addEventListener("click", function() {
                      window.location.href = "index.php";
                    });
                  </script>
        <hr>
     <form> <font color="black" size ="5" face="normal"><p align="left">Nous sommes ravis que vous ayez choisi notre service de réservation de parking pour votre véhicule. Nous tenons à vous informer que vous aurez un accès complet à la manipulation de la barrière de parking dès que vous aurez effectué votre réservation en ligne.
            Lorsque vous arriverez au parking, vous n'aurez qu'à cliquer sur le bouton blue pour que la barrière s'ouvre automatiquement et vous permette d'accéder à votre place de parking réservée. Et lorsque vous sortez du parking, cliquez simplement sur le bouton rouge pour ouvrir la barrière de sortie .
            Nous espérons que cette information vous sera utile et nous restons à votre disposition pour toute question ou demande complémentaire .</p></font>
       </form>   <div>
          </div>
          <br> <hr> <br>
          <hr><hr>
          <div style="display:flex;flex-direction:row;"> 
            <img src="noir.png" style="width:50%;padding-right:10px;">
            <img src="barriere.png" style="width:50%;">
          </div>
          <div>
          <?php include 'footer.php'?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>      
</body>
</html>