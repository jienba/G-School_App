<?php 
session_start();
 try { 

            $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
        } catch (Exception $e) {
            die('Erreur:'.$e->getMessage());
        }

if (isset($_POST['OK'])) {

	
    $type = $_POST['type'];
    $number = $_POST['number'];
    $matiere = $_POST['matiere'];
    $niveau = $_POST['niveau'];
    $option = $_POST['option'];
    $date = $_POST['date'];

$req = $bdd->prepare('INSERT INTO evaluation(num_evaluation, type_evaluation, mat_evaluation, niv_evaluation, opt_evaluation, date_evaluation) 
	VALUES (:number, :type, :matiere, :niveau, :option, :date)');
$req->bindValue(':number', $_POST['number'], PDO::PARAM_STR);
$req->bindValue(':type', $_POST['type'], PDO::PARAM_STR);
  $req->bindValue(':matiere', $_POST['matiere'], PDO::PARAM_STR);
  $req->bindValue(':niveau', $_POST['niveau'], PDO::PARAM_STR);
  $req->bindValue(':option', $_POST['option'], PDO::PARAM_STR);
$req->bindValue(':date', $_POST['date'], PDO::PARAM_STR);
$insert = $req->execute();

if ($insert) {
	echo '<h3 style="color: #10af10;">Evaluation enregistrée!</h3>';
}
else
{
	echo '<h3 style="color: RED;">Echec de l\'enregistrement!</h3>';
}
}else{

	// echo '<h3 style="color: RED;">Veuillez remplir tous les champs!</h3>';
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/css/bootstrap.min.js"></script>
    <script src="bootstrap/js/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/list_student.css">
    <title>Professeur</title>
  </head>
  <body>
    <div class="app"><h1> <span class="glyphicon glyphicon-education"></span> G-School<span id="version">V 1.0</div> </h1> </span>

    <div class="container-fluid">
      <div class="box-bordered">
        <h2>Evaluation</h2>
        <span class="search"><input type="search" name="" value=""> <span class="glyphicon glyphicon-search"></span> </span>

        <div class="container">
        	<form method="post">
          <table class="table table-striped-black">
           <tr>
            <!-- <th>Matricule</th> -->
            <th>Matiere</th>
            <th>Niveau</th>
            <th>Option</th>
            <th>Date</th> 
            <th>Type</th>
            <th>N° Evaluation</th>
            <!-- <th>Niveau</th> -->
           </tr>
           <tr>
           	<td><input type="text" name="matiere" style="background-color: #02243c; color: #fff;  border: 1px #02243c;border-bottom: 1px solid #FFF;"></td>
           	<td><select name="niveau" style="background-color: #02243c; color: #fff;  border: 1px #02243c;border-bottom: 1px solid #FFF;">
           		<option value="1" >Licence1</option>
           		<option value="2">Licence2</option>
           		<option value="3">Licence3</option>
           	</select></td>
           	<td>
           		<select name="option" style="background-color: #02243c; color: #fff;  border: 1px #02243c;border-bottom: 1px solid #FFF;">
           			<option value="3">Tronc Commun</option>
           			<option value="1">Mathematiques-Cryptographie</option>
           			<option value="2">Cryptographie-Informatique</option>
           		</select>
           	</td>
           	<td><input type="date" name="date" style="background-color: #02243c; color: #fff;  border: 1px #02243c;border-bottom: 1px solid #FFF;"></td>
           	<td>
           		<select name="type" style="background-color: #02243c; color: #fff;  border: 1px #02243c;border-bottom: 1px solid #FFF;">
           			<!-- <option value="">Tronc Commun</option> -->
           			<option value="1">Devoir</option>
           			<option value="2">Examen</option>
           		</select>
           	</td>

           	<td><input type="number" name="number" style="background-color: #02243c; color: #fff;  border: 1px #02243c;border-bottom: 1px solid #FFF;"></td>

           </tr>
     
         </table>
	<input type="submit" name="OK" value="Valider"  
	style="background-color: #10af10; border: 1px #02243c; width: 50px; margin-bottom: 5px;">
	</form>
</div>
</body>
</html>
























