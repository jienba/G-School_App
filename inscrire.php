<?php 
session_start();
if (isset($_SESSION['pseudo'])) {
$prenom = $_SESSION['pseudo'];
$nom = $_SESSION['nom'];
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/inscrire.css">
    <script src="bootstrap/js/jquery-1.11.3.min.js"></script>
    <script src="bootstrap/css/bootstrap.min.js"></script>
    <title>Inscription</title>
  </head>
  <body>
    <!-- update -->
   <div class="app"><h1> <span class="glyphicon glyphicon-education"></span> G-School<span id="version">V 1.0  </span></h1>
   </div>
   <h3 style="color: #FFF; padding-left: 20px;"><?php echo 'Bonjour '.$prenom.' '.$nom.'!';?></h3>

    <!-- <a href="index.html"><span class="glyphicon glyphicon-home">Acceuil</span></a> -->
    <!-- update -->
    <div class="wrapper">
			 <div class="login-box">
				 <form method="post" action="traiInscrire.php">
				 <h2>Inscription</h2>
				 <div class="text-box">
           <span class="glyphicon glyphicon-user "></span>
					 <input type="text" name="prenom" placeholder=" Prénom">
				 </div>
				 <div class="text-box">
           <span class="glyphicon glyphicon-user  "></span>
					 <input type="text" name="nom" placeholder="Nom">
				 </div>
				 <div class="text-box">
           <span class="date-birth "><img src="bootstrap/img/date-birth.png" alt=""> </span>
					 <input type="date" name="date" placeholder="24/03/2000">
				 </div>
         <div class="text-box">
           <span class="glyphicon glyphicon-map-marker"></span>
           <input type="text" name="lieu" placeholder="Lieu de Naissance">
         </div>
				 <div class="text-box">
           <span class="glyphicon glyphicon-phone-alt "></span>
					 <input type="tel" name="tel" placeholder="7X XXX XX XX">
				 </div>
				 <div class="text-box">
           <span class="glyphicon glyphicon-envelope "></span>
					 <input type="email" name="email" placeholder="adsa@dmjsg.sn">
				 </div>
				 <div class="text-box">
           <span class="glyphicon glyphicon-log-in "></span>
					 <input type="text" name="matricule" placeholder="201808WU6">
				 </div>
				 <div class="text-box">
           <span class="glyphicon glyphicon-map-marker"></span>
           <input type="text" name="adresse" placeholder="Yoff APECSY II">
         </div>
				 <div class="text-box">
           <span class="glyphicon glyphicon-tasks "></span>
					 <select name="option" size="1">
             <option value="2" selected>Cryptographie - Informatique </option>
             <option  value="1">Mathématiques Cryptographie </option>
           </select>
				 </div>
				 <div class="text-box">
           <span class="gender"> <img src="bootstrap/img/gender.png" alt=""> </span>
           <select name="sexe" size="1">
             <option value="M" selected>Masculin </option>
             <option value="F">Féminin</option>
           </select>
				 </div>
				 <!-- <div class="text-box">
           <span class="glyphicon glyphicon-flag  "></span>
           <select name="filiere">
             <option  selected>Sénégalaise </option>
             <option  >Etrangère</option>
           </select>
				 </div> -->
				 <div class="text-box">
           <span class="glyphicon glyphicon-level-up "></span>
           <select name="Niveau">
              <option value="1"> Licence 1 </option>
              <option value="2"> Licence 2 </option>
              <option value="3"> Licence 3 </option>
           </select>
				 </div>
				 <input class="bton" type="submit" value="Valider">
				 <input class="bton" type="reset" value="Recommencer">
				 </form>

			</div>
    </div>
  </body>
</html>
