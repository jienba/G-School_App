<?php 
session_start();

		
		 if (isset($_SESSION['pseudo'])) {
			try {

    				$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
				} catch (Exception $e) {
   					die('Erreur:'.$e->getMessage());
				}
			$destinataire = htmlspecialchars($_SESSION['pseudo']);
			$req = $bdd->query("SELECT Message FROM messagerie WHERE ID_Destinataire = '$destinataire' AND Statut = '0' ORDER BY ID_Message DESC LIMIT 0, 5");
			$update = $bdd->query("UPDATE messagerie SET Statut = '1' WHERE ID_Destinataire = '$destinataire'");
			$admin = $bdd->query("SELECT Pseudo_Admin FROM administrateur WHERE Pseudo_Admin = '$destinataire'");
			$rep_admin = $admin->fetch();
			$prof = $bdd->query("SELECT prenomProf FROM professeur WHERE prenomProf = '$destinataire'");
			$rep_prof = $prof->fetch();
		}
?>
<!DOCTYPE HTML>
	<html>
		<head>
			<link rel="stylesheet" href="style.css"/>
			<title>Login</title>
			<meta charset="utf-8"/>   
		</head>
		<body>
			 <?php
			if ($rep_admin['Pseudo_Admin'] == $destinataire) {
			   echo '<a href="../Admin_page/index.php"><h3>Accueil</h3></a>';
			}
			elseif($rep_prof['prenomProf'] == $destinataire)
			{
				echo '<a href="../prof/accueil_prof.php"><h3>Accueil</h3></a>';
			}
			?> 
			<span class="app"><h1>G-School</h1></span>
			 <div class="login-box">
				 <!-- <form method="POST" action="message.php"> -->
				 <h2>Boite de Reception</h2>
				 <?php 
				 	while ($rep = $req->fetch()) {
				 		echo '<p style="color: #000;"><strong>' . $destinataire . '</strong> : ' . htmlspecialchars($rep['Message']) . '</p>';
				 	} 
				 $req->closeCursor();
				 $admin->closeCursor();
				 $prof->closeCursor();
				 
				 ?>
			</div>;
	 	</body>;
	 </html>;					
		
	