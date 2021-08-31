<?php
	session_start();
	// if (isset($_SESSION['pseudo'])) {
	// }
	 try{
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
        }catch(Exception $e){
          die('Erreur: '.$e->getMessage() );
        }
         // if(isset($niveau, $option, $matiere) && ($option == '1' || $option == '2')){
        // $niveau = $_POST['niveau'];
        // $option = $_POST['option'];
        $matiere = $_POST['matiere'];
        if (!empty($matiere)) {
        	$mat = $bdd->query("SELECT nom_Matiere, niv_Matiere, opt_Matiere  FROM matiere WHERE nom_Matiere = '$matiere'");
        	$mat1 = $mat->fetch();
        	if($mat1['opt_Matiere'] != NULL){
        	$niveau = $mat1['niv_Matiere'];
        	$option = $mat1['opt_Matiere'];
        	$req = $bdd->query("SELECT matEtud, UPPER(nomEtud) AS nom, UPPER(prenomEtud) AS prenom FROM etudiant WHERE codeNiv = $niveau AND codeOption = $option ");
        	$rep = $req->fetch();
        	
        	
        
        
        
        
      // }  
      // if (!empty($note1)) {
       
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/css/bootstrap.min.js"></script>
    <script src="bootstrap/js/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/note.css">
    <title>Note</title>
  </head>
  <body>
  	

    <div class="app"><h1> <span class="glyphicon glyphicon-education"></span> G-School<span id="version">V 1.0</div> </h1> </span>
    <a href="teacher.php"> <span id="home"><span class="glyphicon glyphicon-home">Acceuil</span></span> </a>
    <div class="container-fluid">
      <div class="box-bordered">
        <h2>Liste des notes</h2>
        <span class="search"><input type="search" name="" value=""> <span class="glyphicon glyphicon-search"></span> </span>

        <div class="container">
          <table class="table table-striped-black">
            <tr>
              <th>#</th>
              <!-- <th>Identifiant</th> -->
              <th>Nom</th>
              <th>Prenom</th>
              <th>Moyenne</th>
            </tr>
             <?php

          $i = 0;
  
          while($rep = $req->fetch())
          {
          	$id = $rep['matEtud'];
          	$note = $bdd->query("SELECT valeur_note FROM note WHERE idetud_note = '$id'");
        	$note1 = $note->fetch(); 
        	// $mon_note = $note1['idetud_note'];
        	$i++;
        	?>
        	<tr>
        	<td><?php echo $i;?></td>
        	<!-- <td><?php 
        	// echo $rep['matEtud'];?></td> -->
            <td><?php echo $rep['nom'];?></td>
            <td><?php echo $rep['prenom'];?></td>
            <td><?php echo $note1['valeur_note'];?></td>
            </tr>
           <?php
           }
       
   

       ?>
          </table>
        <?php 
       }
       else{
       		$niveau = $mat1['niv_Matiere'];
        	// $option = $mat1['opt_Matiere'];
        	$req = $bdd->query("SELECT matEtud, UPPER(nomEtud) AS nom, UPPER(prenomEtud) AS prenom FROM etudiant WHERE codeNiv = $niveau");
        	$rep = $req->fetch();
        	
        	
        
        
        
        
      // }  
      // if (!empty($note1)) {
       
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/css/bootstrap.min.js"></script>
    <script src="bootstrap/js/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/note.css">
    <title>Note</title>
  </head>
  <body>
  	

    <div class="app"><h1> <span class="glyphicon glyphicon-education"></span> G-School<span id="version">V 1.0</div> </h1> </span>
    <a href="teacher.php"> <span id="home"><span class="glyphicon glyphicon-home">Acceuil</span></span> </a>
    <div class="container-fluid">
      <div class="box-bordered">
        <h2>Liste des notes</h2>
        <span class="search"><input type="search" name="" value=""> <span class="glyphicon glyphicon-search"></span> </span>

        <div class="container">
          <table class="table table-striped-black">
            <tr>
              <th>#</th>
              <!-- <th>Identifiant</th> -->
              <th>Nom</th>
              <th>Prenom</th>
              <th>Moyenne</th>
            </tr>
             <?php

          $i = 0;
  
          while($rep = $req->fetch())
          {
          	$id = $rep['matEtud'];
          	$note = $bdd->query("SELECT valeur_note FROM note WHERE idetud_note = '$id'");
        	$note1 = $note->fetch(); 
        	// $mon_note = $note1['idetud_note'];
        	$i++;
        	?>
        	<tr>
        	<td><?php echo $i;?></td>
        	<!-- <td><?php 
        	// echo $rep['matEtud'];?></td> -->
            <td><?php echo $rep['nom'];?></td>
            <td><?php echo $rep['prenom'];?></td>
            <td><?php echo $note1['valeur_note'];?></td>
            </tr>
           <?php
           }
       
   

       ?>
          </table>
        <?php 
       }
}

    if (isset($req, $note, $mat)) {
    $req->closeCursor();
    $mat->closeCursor();
    $note->closeCursor();
}

    ?>
        </div>
      </div>
    </div>
  </body>
</html>
