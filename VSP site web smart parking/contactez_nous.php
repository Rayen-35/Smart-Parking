<!DOCTYPE html>
<html>
  <head>
    <meta charset ="utf-8"/>
    <meta name="description" content="Notre site vous permet de réserver une place de parking à distance et en toute sécurité. Nous vous offrons un accès facile et rapide à nos places de parking et vous pouvez consulter toutes les informations sur notre parking en ligne. Avec VSP , vous n'avez plus à vous soucier de trouver une place de parking - réservez dès maintenant et profitez d'un stationnement pratique et abordable">
    <meta name="keywords" content="Intelligence artificielle,Smart,Web,Mobile,Parking,IOT">
    <meta name="author" content="Rayen Mathlouthi">
    <title>contacter_nous</title>
    <link rel="stylesheet" type ="text/css" href ="contacter_nous.css" media="screen" />
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
      <p>N'hésitez pas à nous contacter</p>
    </div>
    <div class="contact">
      <form action="" method="post">
        <h1><u>Contactez-nous</u></h1> 
        <div class="input-group">
          <label for="nom">Nom</label>
          <input type="text" id="nom" name="nom" required>
        </div>
        <div class="input-group">
          <label for="prenom">Prénom</label>
          <input type="text" id="prenom" name="prenom" required>
        </div>
        <div class="input-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="input-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" required></textarea>
        </div>
        <div class="button-group">
          <button type="submit">Envoyer</button>
          <button type="reset" id="annuler">Annuler</button>
        </div>
  <script>
    document.getElementById("annuler").addEventListener("click", function() {
      window.location.href = "index.php";
    });
  </script> 
  </form>
    </div>
 <?php include 'footer.php'?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>        
</body>
</html>