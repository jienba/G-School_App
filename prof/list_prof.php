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
		
		<H2>LISTE&nbsp;DES&nbsp;NOTES</H2>
		<a href="teacher.php">ACCUEIL</a>
		<hr class="trait"><br/><br/>
		<form method="POST" action="note_view.php">
		<?php	
		 try{
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
        }catch(Exception $e){
          die('Erreur: '.$e->getMessage() );
        }
		 $destinataire = htmlspecialchars($_SESSION['pseudo']);
        $prof = $bdd->query("SELECT matProf FROM professeur WHERE prenomProf = '$destinataire'");
        $prof_mat = $prof->fetch();
        // echo '<h3>'.$prof_mat['matProf'].'</h3>';
        $professeur = $prof_mat['matProf'];
        $mat = $bdd->query("SELECT nom_Matiere  FROM matiere WHERE ID_Prof = '$professeur'");

         if ($prof_mat['matProf']) {
       
?>	
				  <label>Matiere</label>
              <select name="matiere" style="background-color: #02243c; color: #fff;  border: 1px #02243c;border-bottom: 1px solid #FFF;">
                <?php
                while ($rep_mat = $mat->fetch()) {
                  echo '<option>'.$rep_mat['nom_Matiere'].'</option>';
                }
                }
                // echo '</select><br/><br/>';

                ?>
            </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <!-- <label for="option"> Option </label>
        		<select name="option" size="1">
             <option  selected value="2">Cryptographie - Informatique </option>
             <option  value="1">Mathématiqnues - Cryptographie </option>
             <option  value="">Tronc Commun</option>
           </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
                <label for="niveau"> Niveau </label>
        		<select name="niveau" id="niveau" required>
					<option value="1"> Licence 1 </option>
        			<option value="2"> Licence 2 </option>
                    <option value="3"> Licence 3 </option>
        		</select>
			 -->
			<input type="submit" value="Valider">

		</form>
		
		<!-- <p>Pour rechercher un étudiant particulier <a href="rechercher.php">cliquer ici </a></p> -->
	</center>
	

</body>
</html>