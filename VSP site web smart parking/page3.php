<?php
include_once('connect.php');
if (isset($_POST['enregistrer']))
{
  $nom = $_POST['nom'];
  $prénom = $_POST['prenom'];
  $matricule = $_POST['matricule'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "insert into utilisateur values ('$matricule','$nom','$prénom','$email','$password')";
  mysqli_query($connect,$sql);
  $sql3 = "select * from utilisateur where email='$email' and password='$password'";
  $usr3 = mysqli_query($connect,$sql3);
  $pp3 = mysqli_fetch_assoc($usr3);
  $mat = $pp3['matricule'] ;
  $prénom = $pp3['prénom'];
  date_default_timezone_set('Africa/Tunis');
  $date = date('Y-m-d H:i:s');
  $sql4 = "insert into historique values('NULL','$mat','$date','$prénom  a crée un compte')";
  mysqli_query($connect,$sql4);
  header('location:page2.php');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset ="utf-8"/>
    <meta name="description" content="Notre site vous permet de réserver une place de parking à distance et en toute sécurité. Nous vous offrons un accès facile et rapide à nos places de parking et vous pouvez consulter toutes les informations sur notre parking en ligne. Avec VSP , vous n'avez plus à vous soucier de trouver une place de parking - réservez dès maintenant et profitez d'un stationnement pratique et abordable">
    <meta name="keywords" content="Intelligence artificielle,Smart,Web,Mobile,Parking,IOT">
    <meta name="author" content="Rayen MAthlouthi">
    <title>page3</title>
    <link rel="stylesheet" type ="text/css" href ="compte.css" media="screen" />
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
      <p>Page pour créer votre compte</p>
    </div>
    <form id="form-compte" action="" method="post">
<form>
<center><h1><u>S'inscrire</u></h1></center>
  <br>
  <div>
   <center> <font size ="5" color="white"> <label for="nom">Nom :</label></font><br>
     <input type="text" id="nom" name="nom"  placeholder="donnez votre nom"required></center> 
  </div>
    <center><font size ="5"color="white"><label for="prenom">Prénom :</label></font><br>
    <input type="text" id="prenom" name="prenom" placeholder="donnez votre prénom" required></center>
    <div><center>
      <font size ="5" color="white"> <label for="matricule">Matricule :</label></font><br>
    <input type="text" id="matricule" name="matricule" placeholder="donnez votre matricule" required></center>
    </div>
  <div>
  <center> <font size ="5" color="white"> <label for="email">Email :</label></font><br>
    <input type="email" id="email" name="email" placeholder="donnez votre email" required></center>
  </div>
  <div><center>
      <font size ="5" color="white">  <label for="password">Mot de passe :</label></font><br>
    <input type="password" id="password" name="password"  placeholder="donnez votre mot de passe" required></center>
   </div><br>
    <form action="" method="POST">
  <center><button type="submit" id="submit" name="enregistrer">Enregistrer</button></center> 
   </form>
  </form> 
    </form>
<div class="d-flex flex-column h-100">
<?php include 'footer.php'?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>      
</body>
</html>
