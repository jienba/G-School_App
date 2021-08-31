<?php
session_start();
?>
<!DOCTYPE HTML>

<html>

<head>
	<title>LISTE DES ETUDIANTS</title>
	<meta charset="utf-8"/>
	
	<style>
		.trait
		{
			width: 100%;
			height: 40px; 
			background-color: #CC58C5;
		}
		
		a
		{
			font-style: italic;
			font-size: x-large;
		}
		p
		{
			font-size: xx-large;
			color: red;
			font-weight: bold;
		}
	</style>
	
</head>

<body>
	<center>
		
		<H2>LISTE&nbsp;DES&nbsp;ETUDIANTS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php date_default_timezone_set('UTC'); echo date('<em>l F Y h:i A<em>');?></b></H2><br/><br/>
		<a href="index.php">ACCUEIL</a>
		<!-- <hr class="trait"> -->
		<br/><br/><br/><br/><br/><br/>
		<form method="POST" action="list_student.php">
			
			
                <label for="option"> Option </label>
        		<select name="option" size="1">
             <option  selected value="2">Cryptographie - Informatique </option>
             <option  value="1">Mathématiqnues - Cryptographie </option>
             <option  value="3">Tronc Commun</option>
           </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
                <label for="niveau"> Niveau </label>
        		<select name="niveau" id="niveau" required>
					<option value="1"> Licence 1 </option>
        			<option value="2"> Licence 2 </option>
                    <option value="3"> Licence 3 </option>
        		</select>
			
			<input type="submit" value="Valider">

		</form>
		
		<!-- <p>Pour rechercher un étudiant particulier <a href="rechercher.php">cliquer ici </a></p> -->
	</center>
	

</body>
</html>