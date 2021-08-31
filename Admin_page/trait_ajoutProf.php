
 <?php
 //Connexion au serveur en PDO...
  try {

    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
} catch (Exception $e) {
   die('Erreur:'.$e->getMessage());
}
//Insertion des données avec la méthode préparée
  $req=$bdd->prepare('INSERT INTO professeur(nomProf, prenomProf, adresseProf, emailProf, telProf, matProf, pwdProf) VALUES (:nom, :prenom, :adress, :email, :tel, :mat, :password)');
	
  
  $req->bindValue(':nom', $_POST['nomProf'], PDO::PARAM_STR);
  $req->bindValue(':prenom', $_POST['prenomProf'], PDO::PARAM_STR);
  // $req->bindValue(':matiere', $_POST['matiereProf'], PDO::PARAM_STR);
  $req->bindValue(':adress', $_POST['adresseProf'], PDO::PARAM_STR);
  $req->bindValue(':email', $_POST['emailProf'], PDO::PARAM_STR);
  $req->bindValue(':tel', $_POST['telProf'], PDO::PARAM_STR);
  $req->bindValue(':mat', $_POST['matProf'], PDO::PARAM_STR);
  $req->bindValue(':password', sha1($_POST['pwdProf']), PDO::PARAM_STR);
  // $req->bindValue(':sexe', $_POST['sexe_Prof'], PDO::PARAM_STR);
  // $req->bindValue(':fil', $_POST['cod_Prof'], PDO::PARAM_STR);
  // $req->bindValue(':niv', $_POST['cod_Prof'], PDO::PARAM_STR);
//Exécution de la requête
	$insert = $req->execute();	
if ($insert) {
		$msg = "INSERTION REUSSIE!";
	}
	else
		$msg = "ECHEC DE L'INSERTON!";	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insertion des donnees</title>
</head>
<body>
	<?php echo "<h2>$msg<h2/>"; ?>
</body>
</html>