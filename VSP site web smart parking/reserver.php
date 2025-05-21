<?php
include_once('connect.php');
session_start();
$sorry =0 ;
$no=0;
$email = $_SESSION['email'];
$password = $_SESSION['password'];
$sql = "select matricule from utilisateur where email='$email' and password='$password' ";
$usr = mysqli_query($connect,$sql);
$pp = mysqli_fetch_assoc($usr);
$matricule = $pp['matricule'] ;

$sql4 = "select * from parking";
$usr4 = mysqli_query($connect,$sql4);
$fetch4 = mysqli_fetch_assoc($usr4);
$cc1= $fetch4['nb_places_libres'] ;
$cc = 4 - $cc1 ;
if (isset($_POST['valider']))
{
  $ariv_date_1 = $_POST['ariv_date_1'];
  $ariv_heure_1 = $_POST['ariv_heure_1'];
  $ariv_date_2 = $_POST['ariv_date_2'];
  $ariv_heure_2 = $_POST['ariv_heure_2'];
  $timestamp_arrivee = strtotime($ariv_date_1 . ' ' . $ariv_heure_1);
  $timestamp_depart = strtotime($ariv_date_2 . ' ' . $ariv_heure_2);

// vérifier si la date et l'heure d'arrivée sont antérieures à la date et l'heure de départ
if ($timestamp_arrivee >= $timestamp_depart) {
    $no =1;
}else if ($cc1 == 0){
  $sorry = 1 ;
  $no =0;
}else {
  $pp1 = $ariv_date_1.$ariv_heure_1 ;
  $pp2 = $ariv_date_2.$ariv_heure_2 ;
  $sql3="insert into réservation values ('$matricule','$pp1','$pp2')";
  mysqli_query($connect,$sql3);

  $sql3 = "select * from utilisateur where email='$email' and password='$password'";
  $usr3 = mysqli_query($connect,$sql3);
  $pp3 = mysqli_fetch_assoc($usr3);
  $mat = $pp3['cin'] ;
  $prénom = $pp3['prénom'];
  date_default_timezone_set('Africa/Tunis');
  $date = date('Y-m-d H:i:s');
  $sql4 = "insert into historique values('NULL','$mat','$date','$prénom  a affecté une réservation')";
  mysqli_query($connect,$sql4);

  header('location:PageBarriere.php');
  $sorry=0;
  $no =0; }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset ="utf-8"/>
    <meta name="description" content="Notre site vous permet de réserver une place de parking à distance et en toute sécurité. Nous vous offrons un accès facile et rapide à nos places de parking et vous pouvez consulter toutes les informations sur notre parking en ligne. Avec VSP , vous n'avez plus à vous soucier de trouver une place de parking - réservez dès maintenant et profitez d'un stationnement pratique et abordable">
    <meta name="keywords" content="Intelligence artificielle,Smart,Web,Mobile,Parking,IOT">
    <meta name="author" content="Rayen Mathlouthi">
    <title>reserver</title>
    <link rel="stylesheet" type ="text/css" href ="reserver.css" media="screen" />
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
      <img src ="bleu bilfazett.png" alt="image" height ="170" width="20%"><h1>Bienvenue cher client</h1>
      <p>Réservez une place dans VSP</p>
    </div>
   <br>
   <?php if( $no ==1) { echo "<center><font color='red'><b> La date et l'heure d'arrivée doivent être antérieures à la date et l'heure de départ </b></font></centre> ";} ?>
    <?php if( $sorry ==1) {echo "<center><font color='red'><b>Désolé cher utilisateur, il n'y a pas d'espace vide maintenant tous sont réservés </b></font></centre>";} ?>
 <ul><font size ="6" face="normal" >
     <form> <li>L'ouverture de la Parking ===============> 7:00 H</li>
            <li>La fermeture de la parking ==============> 22:00 H </li>
            <li>Nombre de places de parking totale ========> 4 </li>
            <li>Nombre de places de parking réservées :========> <?php echo $cc ?>   </li>
            <li>Nombre de places de parking libres : ==========> <?php echo $cc1 ?>   </li>
    </form></font>
   </ul>
   <br>
  </form> 
  <br> 
  <hr>
        <form action="" method="POST">
          <h4 align ="left">Si vous souhaitez réserver : entrez la date d'arrivée ,la date de départ et cliquez sur Valider : </h4>
           <center><br><br> <div><font size =" 4" face="sans-serif">Date d'arrivée : </font><input type = "date" id="date1" name="ariv_date_1"  required><input type="time"id="heure1" name="ariv_heure_1" min="07:00" max="22:00" required> </div>
             <div><font size =" 4" face="sans-serif">Date de départ : </font><input type = "date" id="date2" name="ariv_date_2"  required><input type="time" id="heure2" name="ariv_heure_2" min="07:00" max="22:00" required> </div> 
             <br> 
             <div>
                <button type="submit" id="valider" name="valider">Valider</button> 
                <button type="reset" id="annuler" >Annuler</button>
              </div> </center> 
            <script>
              document.getElementById("annuler").addEventListener("click", function() {
                window.location.href = "index.php";
              });
            </script>
        </form>
        <hr>
      <img src ="car_gris.png" alt="image" height =" 700" width="100%">   <br><br>  
      <?php include 'footer.php'?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>      
</body>
</html>