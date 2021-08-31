<?php
session_start();
// if(isset($_SESSION['pseudo']) && $_SESSION['pseudo'] != ''){
	
// }
	// if (isset($_POST['envoi_message'])) {
		if (isset($_POST['destinataire'],$_POST['message']) && !empty($_POST['destinataire']) && !empty($_POST['message']) ) {
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
			//while $req_id = @mysql_query('SELECT prenomProf FROM professeur WHERE prenomProf = $destinataire');
			//  ($rep_id = @mysql_fetch_array($req_id));

			// $req_id->execute(array($destinataire));
			//Envoi du message dans la BDD...

			 $msg = $bdd->prepare('INSERT INTO messagerie(ID_Expediteur, ID_Destinataire, Message) VALUES (:exp, :des, :sms)');
			$msg->bindValue(':exp', $_SESSION['pseudo'], PDO::PARAM_STR);
			$msg->bindValue(':des', $rep['prenomProf'], PDO::PARAM_STR);
			$msg->bindValue(':sms', $message, PDO::PARAM_STR);
			$insert = $msg->execute();

			if(isset($rep)){
				echo $rep['prenomProf'];
				if (isset($msg)) {
					// echo '<h1 style="color: #FFF;">'.$info.'</h1>';
				// echo "<br/>";
				echo $_SESSION['pseudo'];
				// echo "<br/>";
				echo $rep['prenomProf'];
				// echo "<br/>";
				echo $message;

				}
			
			else
			{
				echo "Erreur d'envoi!";
			}

		}
			// $insert = $msg->execute();
		}
		else
		{
			echo "Veuillez compléter tous les champs!";
		}

?>