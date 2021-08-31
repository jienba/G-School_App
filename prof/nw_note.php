<?php 
	session_start();

	// $req = $bdd->query("SELECT prenomEtud, nomEtud FROM etudiant WHERE ")
  ?>
  <!DOCTYPE HTML>
  <html>
  <head>
  	<meta charset="utf-8"/>
  	<title>Entrer de note</title>
  </head>
  <body>
  	<form method="post" action="nw_note.php">
  		<label>Date d'evaluation: </label>
  		<input type="date" name="date" required/>
  		<label>Matiere </label>
  		<?php 
  				try{
				$bdd = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
				}catch(Exception $e){
					die('Erreur: '.$e->getMessage() );
				}
			// @msql_connect('127.0.0.1', 'root', '');
			// @mysql_select_db('test');
			$destinataire = htmlspecialchars($_SESSION['pseudo']);
  			$prof = $bdd->query("SELECT matProf FROM professeur WHERE prenomProf = '$destinataire'");
  			$prof_mat = $prof->fetch();
  			// echo '<h3>'.$prof_mat['matProf'].'</h3>';
  			$professeur = $prof_mat['matProf'];
  			$mat = $bdd->query("SELECT nom_Matiere  FROM matiere WHERE ID_Prof = '$professeur'");

  			 if ($prof_mat['matProf']) {
        ?>
  			<select name="matiere">
        <?php
  			while ($rep_mat = $mat->fetch()) {
  				echo '<option>'.$rep_mat['nom_Matiere'].'</option>';
  			}
  			}
  			// echo '</select><br/><br/>';

  			?>
  		</select><br/><br/>

  		<!-- <label>Niveau: </label>
  		<input type="text" name="niveau"/><br/><br/>  
  		<label>Option: </label>
  		<input type="text" name="option"/><br/><br/> -->
  		<label>Identifiant: </label>
  		<input type="text" name="matricule" required/>
      <label>Note: </label>
      <input type="number" name="note" required/><br/><br/>
      <input type="submit" name="OK" value="OK"/>
    </form>
      <?php if(!empty($_POST['matricule']) && !empty($_POST['date']) && !empty($_POST['matiere'])){
        $matricule = $_POST['matricule'];
        $date = $_POST['date'];
        $matiere = $_POST['matiere'];
        $etud = $bdd->query("SELECT idetud_note, date_note, matiere_note FROM note");
         while ( $rep_etud = $etud->fetch()) {
  if ($matricule == $rep_etud['idetud_note'] && $date = $rep_etud['date_note'] && $matiere == $rep_etud['matiere_note']) {
    $err = '<h3 style="color: RED;">Identifiant deja saisi!</h3>';
    $matricule = '';
   
  }
  }
      ?>

     <?php

//Insertion des données avec la méthode préparée
if ( isset($matricule)  && isset($_POST['note'])) {
  if ($matricule != '') {
 if ($_POST['note'] >= 0 AND $_POST['note'] <= 20 ) {
  $req=$bdd->prepare('INSERT INTO note(valeur_note, matiere_note, idetud_note, date_note) VALUES (:note, :matiere, :id_etud, :date_note)');
  
  $req->bindValue(':note', $_POST['note'], PDO::PARAM_STR);
  $req->bindValue(':matiere', $_POST['matiere'], PDO::PARAM_STR);
  $req->bindValue(':id_etud', $_POST['matricule'], PDO::PARAM_STR);
  $req->bindValue(':date_note', $_POST['date'], PDO::PARAM_STR);

//Exécution de la requête
  $insert = $req->execute();  
if ($insert) {
    $msg = "INSERTION REUSSI!"; 
  }
  else{
    $msg = "ECHEC DE L'INSERTON!"; 
    } 
  }
  else{
      $error = "Veuillez entrer une note valide!";
}
}
?>

  <?php                    
}
  if (!empty($msg)) {
    echo '<h3 style="color: #000;">'.$msg.'</h3>';
  }
  if (!empty($error)) {
    echo '<h3 style="color: RED;">'.$error.'</h3>';
   }
 if (!empty($err)) {
    echo '<h3 style="color: RED;">'.$err.'</h3>';
   }
 }
 ?>
  </body>
  </html>