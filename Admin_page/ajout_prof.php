<?php
  session_start();
  ?>
  <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/ajout_prof.css">
    <script src="bootstrap/js/jquery-1.11.3.min.js"></script>
    <script src="bootstrap/css/bootstrap.min.js"></script>
    <title>Ajout de Professeur</title>
  </head>
  <body>
    <!-- update -->
        <div class="app"><h1> <span class="glyphicon glyphicon-education"></span> G-School<span id="version">V 1.0</div> </h1> </span>
    <a href="index.html"><span class="glyphicon glyphicon-home">Acceuil</span></a>
    <div class="wrapper">
			 <div class="login-box">
				 <form method="post" action="trait_ajoutProf.php">
				 <h2>Ajout de Professeur <span class="glyphicon glyphicon-user"></span><sup><span class="glyphicon glyphicon-plus"></sup></span>  </h2>
				 <div class="text-box">
           <span class="glyphicon glyphicon-user "></span>
					 <input type="text" name="prenomProf" placeholder=" Prénom">
				 </div>
				 <div class="text-box">
           <span class="glyphicon glyphicon-user  "></span>
					 <input type="text" name="nomProf" placeholder="Nom">
				 </div>
				 <div class="text-box">
           <span class="glyphicon glyphicon-phone-alt "></span>
					 <input type="tel" name="telProf" placeholder="7X XXX XX XX">
				 </div>

				 <div class="text-box">
           <span class="glyphicon glyphicon-envelope "></span>
					 <input type="email" name="emailProf" placeholder="adsa@dmjsg.sn">
				 </div>
				 <div class="text-box">
           <span class="glyphicon glyphicon-map-marker"></span>
					 <input type="text" name="adresseProf" placeholder="Yoff APECSY II">
				 </div>
				 <div class="text-box">
           <span class="glyphicon glyphicon-log-in "></span>
					 <input type="text" name="matProf" placeholder="2019AAABC">
				 </div>
				 <div class="text-box">
           <span class="glyphicon glyphicon-lock "></span>
					 <input type="password" name="pwdProf" placeholder="Mot de passe">
				 </div>
				 <!-- <div class="text-box">
           <span class="glyphicon glyphicon-book "></span>
					 <input type="text" placeholder="Matière: Ex:Analyse, Audit réseaux,Java:POO,...">
				 </div> -->
				 <!-- <div class="text-box">
           <span class="bot">Niveau(x) Encadré(s):</span> <br>
           <span class="bot">Licence 1 Option:</span>
           <input type="checkbox">
           <span>
             <select name="" size="1" >
               <option value="">Crypto-Info</option>
               <option value="">Maths-Crypto</option>
               <option value="">Tronc commun</option>

             </select>
           <span class="bot">Licence 2 Option:</span>
           <input type="checkbox">
           <span>
             <select name="" size="1" >
               <option value="">Crypto-Info</option>
               <option value="">Maths-Crypto</option>
               <option value="">Tronc commun</option>
             </select>
           <span class="bot">Licence 3 Option:</span>
           <input type="checkbox">
           <span>
             <select name="" size="1" >
               <option value="">Crypto-Info</option>
               <option value="">Maths-Crypto</option>
               <option value="">Tronc commun</option>
             </select>
           </span>
				 </div> -->

				 <input class="bton" type="submit" value="Valider">
				 <input class="bton" type="reset" value="Recommencer">
				 </form>

			</div>
    </div>
  </body>
</html>
