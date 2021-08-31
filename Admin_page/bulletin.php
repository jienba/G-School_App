<?php
  session_start();
    try{
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
        }catch(Exception $e){
          die('Erreur: '.$e->getMessage() );
        }
        // if (!empty($_POST['matricule'])) {
          
        $destinataire = htmlspecialchars($_SESSION['pseudo']);
        $matricule = $_POST['matricule'];
        
        $req = $bdd->query("SELECT nomEtud, prenomEtud, dateNaissEtud, lieuNaissEtud, codeNiv, codeOption FROM etudiant
                            WHERE matEtud = '$matricule'");
        $rep = $req->fetch();
        $niv = $rep['codeNiv'];
        $opt = $rep['codeOption'];
        $niveau = $bdd->query("SELECT nomNiv FROM niveau WHERE codeNiv = $niv");
        $my_niveau = $niveau->fetch();
        $option = $bdd->query("SELECT nomOption FROM formation WHERE codeOption = $opt");
        $my_option = $option->fetch();
        $mat = $bdd->query("SELECT valeur_note, matiere_note FROM note WHERE idetud_note = '$matricule'");
       // $rep_mat = $mat->fetch();

        $mat_note = $bdd->query("SELECT COUNT(valeur_note) AS compteur, SUM(valeur_note) AS somme FROM note 
                            WHERE idetud_note = '$matricule'");
        $my_note = $mat_note->fetch();
        ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Template Base Bootstrap3</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <!-- Loader -->
    <!-- <link rel="stylesheet" href="css/loader.css"> -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/less/normalize.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/responsive.bootstrap.min.css">
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
</head>

<body>
  <div class="container-fluid" >
    <div class="row" id="ban" style="background-color: #76bbff; height: 250px; color: #F2F2F2; margin-bottom: 50px; ">
      <div class="container-fluid" style="margin: 20px;">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12">
            <img src="img/logotdsi.png" style="width: 100%;">
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12" style="text-align: center; margin-top:30px;">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <h1>TDSI</h1>
                <span style="font-weight: bold; font-size: 20px;">
                  Transmission de Données et Sécurité de l'Information
                </span> <br>
                <span style="font-weight: bold; font-size: 20px;">
                  Bulletin de notes du premier semestre
                </span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3">
            <img src="img/sity.png" style="width: 100%;">
          </div>
        </div>
      </div>

    </div> <!-- ./ban -->

    <div class="container" style="border: 3px solid #10af10; margin-bottom: 100px; padding: 20px; border-radius: 10px; font-size:20px;">
      <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-6 col-md-6 col-sm-6" style="">
          <span style="border-bottom: 2px solid gray; padding: 5px;"> <span style="font-weight: bold;">Prénom(s) et Nom:</span> <?php if(!empty($rep)){echo $rep['prenomEtud'].' '.$rep['nomEtud'];}?></span>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 " style="text-align: right;">
          <span style="border-bottom: 2px solid gray; padding: 5px; "><span style="font-weight: bold;">Date et lieu de naissance:</span> <?php if(!empty($rep)){ echo $rep['dateNaissEtud'].' à '.$rep['lieuNaissEtud'];} ?></span></div>
      </div>
      <div class="row" style="">
        <div class="col-lg-6 col-md-6 col-sm-6 ">
          <span style="padding:5px; border-bottom: 2px solid gray; " ><span style="font-weight: bold;">Niveau:</span> <?php if(!empty($my_niveau)){ echo $my_niveau['nomNiv'];} ?></span>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6" style=" text-align: right;">
          <span style="padding: 5px; border-bottom: 2px solid gray; text-align: "><span style="font-weight: bold;">Année scolaire:</span>2019-2020</span>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 " style="margin-top: 20px;">
        <span style="padding:5px; border-bottom: 2px solid gray;" ><span style="font-weight: bold;">Option:</span> <?php if(!empty($my_option)){ echo $my_option['nomOption'];} ?></span>
      </div>
      </div>
    </div> <!-- .about student -->

    <div class="container" >
      <table class="table table-striped table-bordered" style="margin-bottom: 100px;">
            <tr>
              <th>Matières</th>
              <th>Moyenne</th>
              <th>Crédit</th>
              <th>Appréciations</th>

            </tr>
            <?php 
              if(!empty($mat)){
              while ($rep_mat = $mat->fetch()) {
                $matiere = $rep_mat['matiere_note'];
                $note = $rep_mat['valeur_note'];
                
              ?> 
              <tr>
              <td><?php echo $matiere;?></td>
              <td><?php echo $note;?></td>
              <td><?php if ($note >= 10 && $note <= 20) {
                echo '5';
              } else
                echo '0';
                ?></td>
              <td></td>

            </tr>
            <?php
          }
        }
          ?>
            
           <!--  <tr>
              <td>Cryptographie</td>
              <td></td>
              <td></td>
              <td></td>

            </tr>
            <tr>
              <td>Analyse</td>
              <td></td>
              <td></td>
              <td></td>

            </tr>
            <tr>
              <td>Statistiques</td>
              <td></td>
              <td></td>
              <td></td>

            </tr>
            <tr>
              <td>Algorithmique</td>
              <td></td>
              <td> </td>
              <td></td>

            </tr>
            <tr>
              <td>Sécurité Informatiques</td>
              <td></td>
              <td> </td>
              <td></td>

            </tr>
            <tr>
              <td>Systeme d'Exploitation</td>
              <td></td>
              <td> </td>
              <td></td>

            </tr>
            <tr>
              <td>Architecture des Ordinateur</td>
              <td></td>
              <td> </td>
              <td></td>

            </tr> -->
          </table>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8" style="border: 1px solid #10af10;  height:100px; border-radius:10px; padding:10px; margin-bottom:50px;  ">
          <div class="row" >
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12" >
                  <span style="width: 100px;font-weight:bold; font-size:2em; border-radius:10px; background-color:#76bbff; padding: 10px;">
                    <!-- <?php 
                      
                      // if(!empty($mat_note) && isset($i) && isset($somme)){
                      //   $som = 0;
                      // $i = 0;
                      // while ($my_note = $mat_note->fetch()) {
                        $my_note['compteur'];
                        $somme = $my_note['somme'];
                        
                      // }
                      $moyenne = $somme/$i;
                    ?> -->
                    Moyenne: <?php if(isset($moyenne)){ 
                      $moyenne = $my_note['somme'] / $my_note['compteur'];
                      echo $moyenne;}?>
                    </span>
                </div>
              </div>

            </div>

          </div>

        </div>

      </div>

    </div>


  </div>

</body>

</html>
