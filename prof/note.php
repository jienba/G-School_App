<?php
	session_start();
	// if (isset($_SESSION['pseudo'])) {
	// }
?>
<?php 
          try{
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
        }catch(Exception $e){
          die('Erreur: '.$e->getMessage() );
        }
      // @msql_connect('127.0.0.1', 'root', '');
      // @mysql_select_db('test');
      $destinataire = htmlspecialchars($_SESSION['pseudo']);
        $prof = $bdd->query("SELECT matProf FROM professeur WHERE prenomProf = '$destinataire'");
        $prof_mat = $prof->fetch();
        // echo '<h3>'.$prof_mat['matProf'].'</h3>';
        $professeur = $prof_mat['matProf'];
        $mat = $bdd->query("SELECT nom_Matiere, niv_Matiere, opt_Matiere  FROM matiere WHERE ID_Prof = '$professeur'");
        
        
      // if (!empty($admin)) {
        // $admin_req = $admin->fetch();
      // }
        

         if ($prof_mat['matProf']) {
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
        <h2>Formulaire des notes</h2>
        <span class="search"><input type="search" name="" value=""> <span class="glyphicon glyphicon-search"></span> </span>
         
        <div class="container">
          <form action="note.php" method="POST">
          <table class="table table-striped-black">
            <tr>
              <td>
              <label>Date d'evaluation</label>
            </td>
            <td>
              <input type="date" name="date">
              <!-- <select name="date" type="date" style="background-color: #02243c; color: #fff;  border: 1px #02243c;border-bottom: 1px solid #FFF;"> -->
               
              </select>
            </td>
            <td>
              <label>Matiere</label>
            </td>
            <td>
              <select name="matiere" style="background-color: #02243c; color: #fff;  border: 1px #02243c;border-bottom: 1px solid #FFF;">
                <?php
                while ($rep_mat = $mat->fetch()) {
                  echo '<option>'.$rep_mat['nom_Matiere'].'</option>';
                }
                }
                // echo '</select><br/><br/>';

                ?>
             </select>
            </td>
             <td>
              <label>Identifiant</label>
            </td>
            <td>
                <input type="text" name="matricule">
            </td>
            <td>
              <label>Note</label>
            </td><td>
              <input type="text" name="note">
            </td>
          </tr>
          </table>
          <input type="submit" name="OK" value="OK" style="background-color: #10af10; border: 1px #02243c; width: 50px;">
        </form>
        </div>
      </div>
    </div>
    <?php if(!empty($_POST['matricule']) && !empty($_POST['date']) && !empty($_POST['matiere'])){
        $matricule = $_POST['matricule'];
        $date = $_POST['date'];
        $matiere = $_POST['matiere'];
        $etud = $bdd->query("SELECT idetud_note, date_note, matiere_note FROM note");
         while ( $rep_etud = $etud->fetch()) {
  if ($matricule == $rep_etud['idetud_note'] && $date = $rep_etud['date_note'] && $matiere == $rep_etud['matiere_note']) {
    $err = '<h3 style="color: RED;">Identifiant deja saisi!</h3>';
    $matricule = '';
   
  }
  }
      ?>

     <?php

//Insertion des données avec la méthode préparée
if ( isset($matricule)  && isset($_POST['note'])) {
  if ($matricule != '') {
 if ($_POST['note'] >= 0 AND $_POST['note'] <= 20 ) {
  $req=$bdd->prepare('INSERT INTO note(valeur_note, matiere_note, idetud_note, date_note) VALUES (:note, :matiere, :id_etud, :date_note)');
  
  $req->bindValue(':note', $_POST['note'], PDO::PARAM_STR);
  $req->bindValue(':matiere', $_POST['matiere'], PDO::PARAM_STR);
  $req->bindValue(':id_etud', $_POST['matricule'], PDO::PARAM_STR);
  $req->bindValue(':date_note', $_POST['date'], PDO::PARAM_STR);

//Exécution de la requête
  $insert = $req->execute();  
if ($insert) {
    $msg = "INSERTION REUSSIE!"; 
  }
  else{
    $msg = "ECHEC DE L'INSERTON!"; 
    } 
  }
  else{
      $error = "Veuillez entrer une note valide!";
}
}
?>

  <?php                    
}
  if (!empty($msg)) {
    echo '<h3 style="color: #10af10;">'.$msg.'</h3>';
  }
  if (!empty($error)) {
    echo '<h3 style="color: RED;">'.$error.'</h3>';
   }
 if (!empty($err)) {
    echo '<h3 style="color: RED; text-align: center;">'.$err.'</h3>';
   }
 }
 ?>
 <!-- <?php 
 // if(isset($mat_req)){
                // while ($rep_mat = $mat->fetch()) {
                 // echo '<h3 style="color: #FFF;">'.$mat_req['nom_Matiere'].'</h3>';
                  // echo '<h3 style="color: #FFF;">'.$mat_req['niv_Matiere'].'</h3>';
              // echo '<h3 style="color: #FFF;">'.$mat_req['opt_Matiere'].'</h3>'; 
                  // $admin = $bdd->query("SELECT date_evaluation FROM evaluation WHERE mat_evaluation = '$eval'
                    // AND niv_evaluation = $niveau AND opt_evaluation = $option");
                  // while ($admin_req = $admin->fetch()) {
                  // echo '<option>'.$admin_req['date_evaluation'].'</option>';
                // }
              // }
            

                ?> -->
  </body>
</html>


