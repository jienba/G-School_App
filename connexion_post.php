<?php
header('Location: Admin_page/index.php');
//	$Pseudo_Admin = $_POST['pseudo'];
////	$Passwd_Admin = sha1($_POST['password']);
////	$Passwd_Admin = sha1($_POST['password']);
//	$Pseudo_Prof = $_POST['pseudo'];
////	$Passwd_Prof = sha1($_POST['password']);
//	$Pseudo_Etud = $_POST['pseudo'];
//	$Passwd_Etud = $_POST['password'];
//	// $pseudo = stripcslashes($pseudo);
//	// $passwd = stripcslashes($passwd);
//	// $pseudo = mysql_real_escape_string($pseudo);
//	// $passwd = mysql_real_escape_string($passwd);
//
////	@mysql_connect('localhost', 'root', '');
////	@mysql_select_db('test');
///*
//	$reqAdmin = mysql_query("SELECT Pseudo_Admin, Password_Admin FROM administrateur WHERE Pseudo_Admin = '$Pseudo_Admin' AND Password_Admin = '$Passwd_Admin' LIMIT 1");
//	$reqProf = mysql_query("SELECT nomProf, prenomProf, pwdProf FROM professeur WHERE prenomProf = '$Pseudo_Prof' AND pwdProf = '$Passwd_Prof' LIMIT 1");
//	$reqEtud = mysql_query("SELECT prenom_inscrire, nom_inscrire, code_inscrire FROM inscription WHERE code_inscrire = '$Passwd_Etud'");
//	$rowsEtud = mysql_fetch_array($reqEtud);
//	$rowsAdmin = mysql_fetch_array($reqAdmin);
//	$rowsProf = mysql_fetch_array($reqProf);
//	//if($rowsAdmin['Pseudo_Admin'] == $Pseudo_Admin && $rowsAdmin['Password_Admin'] == $Passwd_Admin){
//*/
//$Passwd_Admin ='future';
//if($Pseudo_Admin == 'jienba' &&  $Passwd_Admin == 'future'){
//		echo 'Vous êtes connecté avec succès! <br/>
////			Bonjour '.$rowsAdmin['Pseudo_Admin'].'!';
//		session_start();
//		$_SESSION['pseudo'] = $Pseudo_Admin;
//		$_SESSION['password'] = $Passwd_Admin;
//		header('Location: Admin_page/index.php');
//	}
//	elseif($rowsProf['prenomProf'] == $Pseudo_Prof && $rowsProf['pwdProf'] == $Passwd_Prof){
//		echo 'Vous êtes connecté avec succès! <br/>
//			Bonjour '.$rowsProf['prenomProf'].'!';
//		session_start();
//		$_SESSION['pseudo'] = $Pseudo_Prof;
//		$_SESSION['password'] = $Passwd_Prof;
//		$_SESSION['nom'] = $rowsProf['nomProf'];
//		header('Location: prof/teacher.php');
//	}
//	elseif ($rowsEtud['prenom_inscrire'] == $Pseudo_Etud && $rowsEtud['code_inscrire'] == $Passwd_Etud) {
//		// echo 'Bonjour '.$rowsEtud['prenom_inscrire'].'!';
//		session_start();
//		$_SESSION['pseudo'] = $Pseudo_Etud;
//		$_SESSION['nom'] = $rowsEtud['nom_inscrire'];
//		$_SESSION['password'] = $Passwd_Etud;
//		// $_SESSION['nom'] = $rowsProf['nomProf'];
//		header('Location: inscrire.php');
//	}
//	else
//	{
//		echo "Identifiant ou mot de passe incorrect!". $Passwd_Admin;
//	}
?>`   