<?php 
session_start();
if (isset($_SESSION['pseudo'])) {
	try { 
			$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
		} catch (Exception $e) {
   					die('Erreur:'.$e->getMessage());
		}
	$destinataire = htmlspecialchars($_SESSION['pseudo']);
	$req = $bdd->query("SELECT count(Message) AS nb_msg FROM messagerie WHERE ID_Destinataire = '$destinataire' AND Statut = '0'");
	$rep = $req->fetch();
}
?>
<!DOCTYPE html>  
	<html>
		<head>
			<link rel="stylesheet" href="style.css">
			<title>Login</title>
			<meta charset="utf-8">
		</head>
		<header>
			<nav>
				<ul style="color: #FFF; ">
					<li><a href="note.php" >Notes de classe</a></li>
					<li><a href="../messagerie/message.php" >Nouveau Message</a></li>
					<li><a href="reception.php" >Boite de Reception <?php if($rep['nb_msg'] != 0){echo '('.$rep['nb_msg'].')';}?></a></li>
						<li><a href="#" >Se Deconnecter</a></li>
					</ul>
				</nav>
			</header>
			<body>
			<span class="app"><h1>G-School</h1></span>
			 <div class="login-box">
				 
				 <h2>Bonjour Mr <?php echo $_SESSION['nom'].'!'?></h2>
				 	 
			</div>		
		</body>
	</html>