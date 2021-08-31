<?php 
session_start();

		
		if (!empty($_POST['destinataire']) && !empty($_POST['message']) ) {
			try { 

    				$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
				} catch (Exception $e) {
   					die('Erreur:'.$e->getMessage());
				}
			// @msql_connect('127.0.0.1', 'root', '');
			// @mysql_select_db('test');
			// $expediteur = htmlspecialchars($_POST['expediteur']);

			$destinataire = htmlspecialchars($_POST['destinataire']);
			$message = htmlspecialchars($_POST['message']); 
			//Sélection du destinataire...
			$req = $bdd->query("SELECT prenomProf FROM professeur WHERE prenomProf = '$destinataire'");
			$rep = $req->fetch();
			$req1 = $req = $bdd->query("SELECT Pseudo_Admin FROM administrateur WHERE Pseudo_Admin = '$destinataire'");
			$rep1 = $req1->fetch();
			//while $req_id = @mysql_query('SELECT prenomProf FROM professeur WHERE prenomProf = $destinataire');
			//  ($rep_id = @mysql_fetch_array($req_id));

			// $req_id->execute(array($destinataire));
			//Envoi du message dans la BDD...
			if ($rep['prenomProf'] == $destinataire) {
			 $msg = $bdd->prepare('INSERT INTO messagerie(ID_Expediteur, ID_Destinataire, Message, Statut ) VALUES (:exp, :des, :sms, 0)');
			$msg->bindValue(':exp', $_SESSION['pseudo'], PDO::PARAM_STR);
			$msg->bindValue(':des', $rep['prenomProf'], PDO::PARAM_STR);
			$msg->bindValue(':sms', $message, PDO::PARAM_STR);
			$insert = $msg->execute();
			}
			else
			{
				$msg = $bdd->prepare('INSERT INTO messagerie(ID_Expediteur, ID_Destinataire, Message, Statut ) VALUES (:exp, :des, :sms, 0)');
			$msg->bindValue(':exp', $_SESSION['pseudo'], PDO::PARAM_STR);
			$msg->bindValue(':des', $rep1['Pseudo_Admin'], PDO::PARAM_STR);
			$msg->bindValue(':sms', $message, PDO::PARAM_STR);
			$insert = $msg->execute();
			}
			if(isset($rep) OR isset($rep1)){
				$info = "Message Envoye!";

				}
			
			else
			{
				$info = "Erreur d'envoi!";
			}

		
			// $insert = $msg->execute();
		}
		else
		{
			$error = "Veuillez compléter tous les champs!";
		}

?>
<!DOCTYPE html>
	<html>
		<head>
			<link rel="stylesheet" href="../main-style.css">
			<title>Login</title>
			<meta charset="utf-8">   
		</head>
		<body>

			<?php if(isset($info))
			{
				echo '<h1 style="color: #FFF;">'.$info.'</h1>';
				// echo "<br/>";
				// echo '<h3 style="color: #FFF;">Expéditeur: '.$_SESSION['pseudo'].'</h3>' ;
				// echo "<br/>";
				// echo '<h3 style="color: #FFF;">Destinataire: '.$rep['prenomProf'].'</h3>' ;
				// echo "<br/>";
				// echo '<h3 style="color: #FFF;">Message: '.$message.'</h3>' ;
			} ?>
			<span class="app"><h1>G-School</h1></span>
			 <div class="login-box">
				 <form method="POST" action="message.php"> 
				 <h2>Message</h2>
				 <!-- <div class="text-box">
					 <span><img src="user-solid.png"></span>
					 <input type="text" name="expediteur" placeholder="Expéditeur">
				 </div>
 -->				 <div class="text-box">
					 <span><img src="user-solid.png"></span>
					 <input type="text" name="destinataire" placeholder="Destinataire">
					
				 </div>
					 <textarea placeholder="Votre Message" name="message" size = "30"></textarea><br/>
				 <input class="bton" type="submit" value="Envoyer" name="envoi_message"><br/><br/>
				 <?php if (!empty($error)) { 
				 	echo '<span style="color: red;">'.$error.'</span>';
				 }?> 
				 </form>
				 
			</div>		
		</body>
	</html>		