    
 <?php
 //Connexion au serveur en PDO...
 session_start();

  try {

    $bdd = new PDO('mysql:host=localhost;dbname=gschool', 'root', '');
} catch (Exception $e) {
   die('Erreur:'.$e->getMessage());
}
//Insertion des données avec la méthode préparée

  $req=$bdd->prepare('INSERT INTO etudiant VALUES (:mat, :nom, :prenom, :dateNaiss, :lieu, :adress, :email, :tel, :sexe, :option, :niv)');
	
  $req->bindValue(':mat', $_POST['matricule'], PDO::PARAM_STR);
  $req->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
  $req->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
  $req->bindValue(':dateNaiss', $_POST['date'], PDO::PARAM_STR);
  $req->bindValue(':lieu', $_POST['lieu'], PDO::PARAM_STR);
  $req->bindValue(':adress', $_POST['adresse'], PDO::PARAM_STR);
  $req->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
  $req->bindValue(':tel', $_POST['tel'], PDO::PARAM_STR);
  $req->bindValue(':sexe', $_POST['sexe'], PDO::PARAM_STR);
  $req->bindValue(':option', $_POST['option'], PDO::PARAM_STR);
  $req->bindValue(':niv', $_POST['Niveau'], PDO::PARAM_STR);
//Exécution de la requête
	$insert = $req->execute();	
if ($insert) {
		$msg = "INSCRIPTION REUSSIE!";
    $color = "#10af10";
    $code = $_SESSION['password'];
    $req = $bdd->query("DELETE FROM inscription WHERE code_inscrire = '$code'");
	}
else{
		$msg = "ECHEC DE L'INSCRIPTON!";	
    $color = "RED";
  }
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
    <!-- <title>Inscription</title> -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/inscrire.css">
    <script src="bootstrap/js/jquery-1.11.3.min.js"></script>
    <script src="bootstrap/css/bootstrap.min.js"></script>
	<title>Insertion des donnees</title>
</head>
<body>
  <a href="index.php" style="position: absolute;left: 100px;top: 200px;"><span class="glyphicon glyphicon-home">Acceuil</span></a>
	<center><h1 style="color: <?php echo $color;?>;position: absolute; top: 300px;left: 400px;"><?php echo $msg; ?></h1></center>
</body>
</html>