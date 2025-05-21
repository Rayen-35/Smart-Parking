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
    <meta charset ="utf-8"/>
    <meta name="description" content="Notre site vous permet de réserver une place de parking à distance et en toute sécurité. Nous vous offrons un accès facile et rapide à nos places de parking et vous pouvez consulter toutes les informations sur notre parking en ligne. Avec VSP , vous n'avez plus à vous soucier de trouver une place de parking - réservez dès maintenant et profitez d'un stationnement pratique et abordable">
    <meta name="keywords" content="Intelligence artificielle,Smart,Web,Mobile,Parking,IOT">
    <meta name="author" content="Rayen Mathlouthi">
    <title>index</title>
    <link rel="stylesheet" type ="text/css" href ="pageHome.css" media="screen" />
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
          <p>Découvrez tout ce que j'ai à offrir</p>
      </div>
           <br><br>
      <!-- Informations  -->
      <center><img src ="oooo.png" alt="image" height =" 600" width="80%"></center>
           <br><br> 
           <hr><hr>
            <hr>
      <div class="box-3">
           <div class="btn btn-three">
                    <span style="color: #fff;">L'ouverture de la Parking : 7:00H</span>
           </div>
      <div class="btn btn-three">
             <span style="color: #fff;">La fermeture de la parking : 22:00H</span>
      </div>
             <div class="btn btn-three">
                   <span style="color: #fff;">Nombre de places de parking totale : 4</span>
            </div>
     </div>
     <div class="box-4">
           <div class="btn btn-three">
                  <span style="color: #f3efef;">Nombre de places libres : <?php echo $cc1 ?></span>
           </div>
     <div class="btn btn-three">
             <span style="color: #f1f1f1;">Nombre de places réservées : <?php echo $cc ?></span>
     </div></div>
     <div> <center><img src ="gris.png" alt="image" height =" 380" width="30%">
           <img src ="parking1.png" alt="image" height =" 380" width="30%">
           <img src ="parking2.png" alt="image" height =" 380" width="30%"></center></div>
         <!-- Description de notre parking intelligent -->
              <div>  
                  <form> 
                      <details>
                            <summary><font color="white" ><h2 align ="left"><u>Description </u></h2></font></summary> 
                            <font color="white" size ="5" face="normal" > <p align ="left">Notre parking a été développé pour diverses raisons.Depuis plusieurs années les responsables de plusieurs villes ont remarqué que leurs conducteurs avaient de réels problèmes pour trouver une place de parking facilement . Il y peu de places et le délai de stationnement est souvent mal adapté .En effet un milliard d’heures sont perdues tous les jours pour chercher une place de parking dans le monde ce qui peut être largement diminue avec notre smart parking. 
                            Pour cela nous proposons une solution sous forme d’un site d’un parking intelligent miniature avec toutes les commodités nécessaires pour le guidage à l’intérieure et a l’extérieure du parking et l’accès à distance .</p> </font>
                            <center> <img src ="tlf_parking.png" alt="image" height =" 300" width="40%"></center>
             <br><br>
                      </details>
                  </form> 
                   <form>
                       <details> 
                              <summary> <font color="white" ><h2 align ="left"><u>Pourquoi VSP ? </u></h2></font></summary>
                              <font color="white" size ="5" face="normal"><p align ="left">Notre site vous permet de réserver une place de parking à distance et en toute sécurité. Nous vous offrons un accès facile et rapide à nos places de parking et vous pouvez consulter toutes les informations sur notre parking en ligne. Avec VSP , vous n'avez plus à vous soucier de trouver une place de parking - réservez dès maintenant et profitez d'un stationnement pratique et abordable</p></font>
                              <font color="white" size ="5" face="normal"><p align="left"><u>Le temps gagne! ===></u>      
                              Réduit la mobilité des conducteurs dans le parking, éliminant la perte de temps lors de la recherche de places de parking vides .</p></font>
                              <font color="white" size ="5" face="normal"><p align="left"><u>Facile à utiliser! ====></u>
                               bien sûr l'utilisation de la site est tres simple et on a une application mobile aussi .</p></font>
                               <font color="white" size ="5" face="normal"><p align="left"><u>La sécurité ! ====></u> Notre parking dispose d'un système d'alarme avec un laser qui détecte la présence du voleur il n'y a donc pas de place pour le vol avec VSP.</p>
                              </font> 
                              <center> <img src ="oooo.png" alt="image" height =" 300" width="40%"></center>
                     </div>
                </details>
             </form> 
         <form>
               <!-- Statistiques --> 
              <details> 
                      <summary><h2 align ="left" id="stat"><u>Statistiques </u></h2></summary>
                       <font color="white" size ="5" face="normal" >
                       <p align="left"> 97% des personnes ayant essayé VSP ont aimé l'idée et nous ont remercié en nous disant que les problèmes d'encombrement et de recherche prolongée de parking nous en ont débarrassés.</p>
                       </font><center> <img src ="stat.png" alt="image" height =" 300" width="40%"></center></details></form>
                    <hr><hr><br><br>
                    <section class="feedback">
                    <font color="white"  ><h2><u>Commentaires des utilisateurs</u></h2></font>
                          <div class="feedback-container">
                                <div class="feedback-item">
                                        <p class="feedback-text">"J'ai utilisé VSP pour la première fois hier et c'était génial! J'ai pu trouver une place de parking facilement et rapidement."</p>
                                        <p class="feedback-author">- John Doe</p>
                                </div>
                                <div class="feedback-item">
                                            <p class="feedback-text">" VSP m'a sauvé la vie! Je cherchais une place de parking depuis des heures et grâce à cette application, j'ai pu en trouver une en quelques minutes."</p>
                                            <p class="feedback-author">- Jane Smith</p>
                                </div>
                                <div class="feedback-item">
                                            <p class="feedback-text">"Je recommande fortement VSP à tous ceux qui cherchent une solution rapide et efficace pour trouver une place de parking."</p>
                                            <p class="feedback-author">- David Williams</p>
                                </div>
                           </div>
                    </section>
                       <br> 
      <?php include 'footer.php'?>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>      
</body>
</html>
