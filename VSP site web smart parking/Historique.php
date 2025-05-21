<?php
include_once('connect.php');
$sql = "select * from historique ";
$usr = mysqli_query($connect,$sql);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet"
    type ="text/css" href ="Historique.css" media="screen" />
    <link rel="stylesheet" type ="text/css" href ="footer.css" media="screen" />
    <link rel="stylesheet" type ="text/css" href ="nav.css" media="screen" />
    <meta charset ="utf-8"/>
    <meta name="description" content="Notre site vous permet de réserver une place de parking à distance et en toute sécurité. Nous vous offrons un accès facile et rapide à nos places de parking et vous pouvez consulter toutes les informations sur notre parking en ligne. Avec VSP , vous n'avez plus à vous soucier de trouver une place de parking - réservez dès maintenant et profitez d'un stationnement pratique et abordable">
    <meta name="keywords" content="Intelligence artificielle,Smart,Web,Mobile,Parking,IOT">
    <meta name="author" content="Rayen Mathlouthi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title> Historique </title>
</head>
<body>
    <?php include 'nav.php' ?>
    <div class="banner">
      <img src ="bleu bilfazett.png" alt="image" height ="170" width="20%"><font color ="gray"><h1><u>Historique</u></h1></font>
    </div>
          <br><br><hr><br><br>
        <font color="black" size ="6" face="normal" > <p align ="center"><u>L'historique :</u></p> </font>
  <table class="table caption-top" >
     <thead>
       <tr>
        <th scope="col">id</th>
        <th scope="col">matricule</th>
        <th scope="col">date_action</th>
        <th scope="col">action</th>
       </tr>
     </thead>
  <tbody>
  <?php
        while($pp = mysqli_fetch_assoc($usr))
          {
   ?>
    <tr>
      <th scope="row"><?php echo $pp['id'] ?></th>
      <td><?php echo $pp['matricule'] ?></td>
      <td><?php echo $pp['date_action'] ?></td>
      <td><?php echo $pp['action'] ?></td>
    </tr>
  <?php
      }
  ?>
  </tbody>
  </table> 
   <br><br><br><br>
  <div>
      <center>  <button type="reset" id="res"> << back </button></center>
  </div>
      <br><br>
  <?php include 'footer.php'?>
           <script>
             document.getElementById("res").addEventListener("click", function() {
               window.location.href = "pageAdmin.php";});
           </script>  
           <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>        
 </body>
</html>