<?php 
session_start();
$rep = 0;
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
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <script src="bootstrap/css/bootstrap.min.js"></script>
    <script src="bootstrap/js/jquery-1.11.3.min.js"></script>
    <title>Admin</title>
  </head>
  <body>
    <div class="app"><h1> <span class="glyphicon glyphicon-education"></span> G-School<span id="version">V 1.0</h1> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style="font-size: 1.6em;"><?php date_default_timezone_set('GMT'); echo date('<em>l F Y h:i A<em>');?></b> </span></div>
      <!-- <H3><?php 
      // echo sha1(couraD);?></H3> -->
    <div class="container-fluid">
      <div class="box-bordered">
        <div class="container">
          <a href="ajout.php">
            <button type="button" class="btn btn-primary btn-lg" name="button"> <span class="glyphicon glyphicon-plus"></span> </button>
          </a>
          <a href="moyenne.php">
            <button type="button" class="btn btn-warning btn-lg" name="button"> <span class="glyphicon glyphicon-edit"></span> </button>
          </a>
          <a href="supp.php">
            <button type="button" class="btn btn-danger btn-lg" name="button"> <span class="glyphicon glyphicon-remove"></span> </button>
          </a>
          <a href="../messagerie/messagerie.html">
            <?php
             if($rep['nb_msg'] != 0){
              echo '<div style="position: fixed;top: 68px;left: 233px; background-color: #de3b7a; width: 30px;height: 30px;border-radius: 20px;text-align: center;padding-top: 3px;"><span style="color: #FFF;">';
              echo $rep['nb_msg'];
              echo'</span></di>';
            }?>
            <button type="button" class="btn btn-success btn-lg" name="button"> <span class="glyphicon glyphicon-envelope"></span> </button>
          </a>
          <a href="liste.php">
            <button type="button" class="btn btn-info btn-lg" name="button"> <span class="glyphicon glyphicon-eye-open"></span> </button>
          </a>
          <a href="../Login_page/deconnexion.php" >
            <button type="button" class="btn btn-default btn-lg" name="button"> <span class="glyphicon glyphicon-off"></span> </button>
          </a>
        </div>
      </div>
    </div>
  </body>
</html>
