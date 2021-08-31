    
 <?php
 //Connexion au serveur en PDO...
 
  try {

    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
} catch (Exception $e) {
   die('Erreur:'.$e->getMessage());
}
//Insertion des données avec la méthode préparée
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $niveau = $_POST['Niveau'];
  $number = $_POST['numero'];
  $code = "{$prenom[0]}{$nom[0]}L{$niveau[0]}TDSI{$number}";
  $req=$bdd->prepare('INSERT INTO inscription VALUES(:nom, :prenom, :numero, :code, :niveau)');
	
  // $req->bindValue(':mat', $_POST['matricule'], PDO::PARAM_STR);
  $req->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
  $req->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
  // $req->bindValue(':dateNaiss', $_POST['date'], PDO::PARAM_STR);
  // $req->bindValue(':lieu', $_POST['lieu'], PDO::PARAM_STR);
  // $req->bindValue(':adress', $_POST['adresse'], PDO::PARAM_STR);
  // $req->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
  // $req->bindValue(':tel', $_POST['tel'], PDO::PARAM_STR);
  // $req->bindValue(':sexe', $_POST['sexe'], PDO::PARAM_STR);
  
  $req->bindValue(':numero', $_POST['numero'], PDO::PARAM_STR);
  $req->bindValue(':code', $code, PDO::PARAM_STR);
  $req->bindValue(':niveau', $_POST['Niveau'], PDO::PARAM_STR);
//Exécution de la requête
	$insert = $req->execute();	
if ($insert) {
		$msg = "INSERTION REUSSIE!";
    // $password = $_GET['code'];
	}
	else
		$msg = "ECHEC DE L'INSERTON!";	
    // $password = '';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insertion des donnees</title>
</head>
<body>
	<?php echo "<h2>$msg<h2/>"; ?>
  <?php echo "<h2>$code<h2/>"; ?>
</body>
</html>