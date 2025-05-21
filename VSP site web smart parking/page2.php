<?php
    include_once('connect.php');
    if (isset($_POST['submit']))
    {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql1 = "select * from utilisateur where email='$email' and password='$password'";
    $usr1=mysqli_query($connect,$sql1);
    $pp1 = mysqli_fetch_assoc($usr1);
    $sql2 = "select * from admin where email='$email' and password='$password'";
    $usr2=mysqli_query($connect,$sql2);
    $pp2 = mysqli_fetch_assoc($usr2);
    if ($pp1)
    {
    session_start();
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    $sql3 = "select * from utilisateur where email='$email' and password='$password'";
    $usr3 = mysqli_query($connect,$sql3);
    $pp3 = mysqli_fetch_assoc($usr3);
    $mat = $pp3['matricule'] ;
    $prénom = $pp3['prénom'];
    date_default_timezone_set('Africa/Tunis');
    $date = date('Y-m-d H:i:s');
    $sql4 = "insert into historique values('NULL','$mat','$date','$prénom a affecté Login')";
    mysqli_query($connect,$sql4);
    header('location:reserver.php');
  }else if ($pp2)
  {
    session_start();
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    $sql3 = "select * from admin where email='$email' and password='$password'";
    $usr3 = mysqli_query($connect,$sql3);
    $pp3 = mysqli_fetch_assoc($usr3);
    $mat = $pp3['cin'] ;
    $prénom = $pp3['prénom'];
    date_default_timezone_set('Africa/Tunis');
    $date = date('Y-m-d H:i:s');
    $sql4 = "insert into historique values('NULL','$mat','$date','$prénom  a affecté Login')";
    mysqli_query($connect,$sql4);
    header('location:pageAdmin.php');
  }else{
    echo "no one is founded";
  }
  }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet"
    type ="text/css" href ="PageLogin.css" media="screen" />
    <link rel="stylesheet" type ="text/css" href ="footer.css" media="screen" />
    <link rel="stylesheet" type ="text/css" href ="nav.css" media="screen" />
    <meta charset ="utf-8"/>
    <meta name="description" content="Notre site vous permet de réserver une place de parking à distance et en toute sécurité. Nous vous offrons un accès facile et rapide à nos places de parking et vous pouvez consulter toutes les informations sur notre parking en ligne. Avec VSP , vous n'avez plus à vous soucier de trouver une place de parking - réservez dès maintenant et profitez d'un stationnement pratique et abordable">
    <meta name="keywords" content="Intelligence artificielle,Smart,Web,Mobile,Parking,IOT">
    <meta name="author" content="Rayen Mathlouthi">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title> page2 </title>
</head>
<body>
    <?php include 'nav.php' ?>
       <div class="banner">
         <img src ="bleu bilfazett.png" alt="image" height ="170" width="20%"><h1>Bienvenue dans notre Parking VSP</h1>
         <p>Découvrez tout ce que j'ai à offrir</p>
       </div>
        <form action="" method="POST">
              <h1><u>Se connecter</u></h1><br>
              <font color="white" size ="5" face="normal" > Email : </font><input type = "email" placeholder="donnez votre email" class="input" id="email" name="email"   required>
              <font color="white" size ="5" face="normal" > Mot de passe : </font><input type = "password"placeholder =" donnez votre mot de passe" id="password"class="input" name="password" required>
              <br> 
              <div>
                  <button type="submit" id="valider" name="submit" >Valider</button> <a href="page3.php" id="inscrit">créer un compte </a>
              </div>
        </form>
       <form>
              <p align="left" id="par" >Notre site vous permet de réserver une place de parking à distance et en toute sécurité. Nous vous offrons un accès facile et rapide à nos places de parking et vous pouvez consulter toutes les informations sur notre parking en ligne. Avec VSP , vous n'avez plus à vous soucier de trouver une place de parking - réservez dès maintenant et profitez d'un stationnement pratique et abordable</p>
         </form>
          <hr color="black">
          <hr color="black">
          <div class="d-flex flex-column h-100">
          <?php include 'footer.php'?>
         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>      
         <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
         <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
          </div>
</body>
</html>
