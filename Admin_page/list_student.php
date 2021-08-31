<?php
  session_start();
    try { 

            $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
        } catch (Exception $e) {
            die('Erreur:'.$e->getMessage());
        }
    $option = $_POST['option'];
    $niveau = $_POST['niveau'];
    ?>
    <?php if ($option == '3') {
      $req=$bdd->query("SELECT matEtud,UPPER(nomEtud)  AS nom ,UPPER(prenomEtud) AS prenom, DAY(dateNaissEtud) AS jour,MONTH(dateNaissEtud) AS mois,
                    YEAR(dateNaissEtud) AS annee ,sexeEtud, codeOption
                FROM etudiant
                  WHERE codeNiv = $niveau");
    $rep = $req->fetch();
    $option = $rep['codeOption'];
            $req1=$bdd->query("SELECT nomOption FROM formation WHERE codeOption  = $option ");
            $rep1 = $req1->fetch();
            $req2=$bdd->query("SELECT nomNiv FROM niveau WHERE codeNiv  = '$niveau' ");           
            $rep2 = $req2->fetch();
    ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/css/bootstrap.min.js"></script>
    <script src="bootstrap/js/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/list_student.css">
    <title>Admin</title>
  </head>
  <body>
    <div class="app"><h1> <span class="glyphicon glyphicon-education"></span> G-School<span id="version">V 1.0</div> </h1> </span>

    <div class="container-fluid">
      <div class="box-bordered">
        <h2>Liste des étudiants</h2>
        <span class="search"><input type="search" name="" value=""> <span class="glyphicon glyphicon-search"></span> </span>

        <div class="container">
          <table class="table table-striped-black">
            <tr><th>#</th>
               <th>Matricule</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Sexe</th>
                <th>Date de naissance</th> 
                <th>Option</th>
                <th>Niveau</th>
            </tr>
            <?php
          $i = 0;
          while($rep = $req->fetch())
          {
            
            $i++;
          ?>  
              <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $rep['matEtud'];?></td>
            <td><?php echo $rep['nom'];?></td>
            <td><?php echo $rep['prenom']?></td>
            <td><?php echo $rep['sexeEtud'];?></td>
            <td><?php echo $rep['jour'].'/'.$rep['mois'].'/'.$rep['annee']; ?></td>
            <td><?php echo $rep1['nomOption'];?></td>
            <td><?php echo $rep2['nomNiv'];?></td>
            </tr>
              <?php 
          }
            
         ?> 
        
      </table> 
      
   <?php 
    
    }
    elseif ($option == '1') {
  
      $req=$bdd->query("SELECT matEtud,UPPER(nomEtud)  AS nom ,UPPER(prenomEtud) AS prenom, DAY(dateNaissEtud) AS jour,MONTH(dateNaissEtud) AS mois,
                    YEAR(dateNaissEtud) AS annee ,sexeEtud, codeOption
                 FROM etudiant
                   WHERE codeOption = $option AND codeNiv= $niveau");
     $rep = $req->fetch();
    
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
        <h2>Liste des étudiants</h2>
        <span class="search"><input type="search" name="" value=""> <span class="glyphicon glyphicon-search"></span> </span>

        <div class="container">
          <table class="table table-striped-black">
           <tr>
             <th>Matricule</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Sexe</th>
            <th>Date de naissance</th> 
            <th>Option</th>
            <th>Niveau</th>
           </tr>
    <?php
          
           while($rep = $req->fetch())
          {
             $option = $rep['codeOption'];
             $req1=$bdd->query("SELECT nomOption FROM formation WHERE codeOption  = $option ");
             $rep1 = $req1->fetch();
             $req2=$bdd->query("SELECT nomNiv FROM niveau WHERE codeNiv  = $niveau ");           
            $rep2 = $req2->fetch();
          ?>  
              <tr>
            <td><?php echo $rep['matEtud'];?></td>
            <td><?php echo $rep['nom'];?></td>
            <td><?php echo $rep['prenom']?></td>
            <td><?php echo $rep['sexeEtud'];?></td>
            <td><?php echo $rep['jour'].'/'.$rep['mois'].'/'.$rep['annee']; ?></td>
            <td><?php echo $rep1['nomOption'];?></td>
            <td><?php echo $rep2['nomNiv'];?></td>
            </tr>
               <?php  
        }
         ?> 
        
    </table>
    <?php 
   }
     elseif ($option == '2') {
  
       $req=$bdd->query("SELECT matEtud,UPPER(nomEtud)  AS nom ,UPPER(prenomEtud) AS prenom, DAY(dateNaissEtud) AS jour,MONTH(dateNaissEtud) AS mois,
                     YEAR(dateNaissEtud) AS annee ,sexeEtud, codeOption
                 FROM etudiant
                   WHERE codeOption = $option AND codeNiv= $niveau");
    $rep = $req->fetch();
    
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
        <h2>Liste des étudiants</h2>
        <span class="search"><input type="search" name="" value=""> <span class="glyphicon glyphicon-search"></span> </span>

        <div class="container">
          <table class="table table-striped-black">
           <tr>
             <th>Matricule</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Sexe</th>
            <th>Date de naissance</th> 
            <th>Option</th>
            <th>Niveau</th>
           </tr>
    <?php
          
           while($rep = $req->fetch())
          {
             $option = $rep['codeOption'];
             $req1=$bdd->query("SELECT nomOption FROM formation WHERE codeOption  = $option ");
             $rep1 = $req1->fetch();
             $req2=$bdd->query("SELECT nomNiv FROM niveau WHERE codeNiv  = $niveau ");           
             $rep2 = $req2->fetch();
          ?>  
              <tr>
            <td><?php echo $rep['matEtud'];?></td>
            <td><?php echo $rep['nom'];?></td>
            <td><?php echo $rep['prenom']?></td>
            <td><?php echo $rep['sexeEtud'];?></td>
            <td><?php echo $rep['jour'].'/'.$rep['mois'].'/'.$rep['annee']; ?></td>
            <td><?php echo $rep1['nomOption'];?></td>
            <td><?php echo $rep2['nomNiv'];?></td>
            </tr>
              <?php 
          }
         ?> 
        
      </table> 
    <?php
   }
  ?>
    <?php
    if (isset($req, $req1, $req2)) {
    $req->closeCursor();
    $req1->closeCursor();
    $req2->closeCursor();
  }
    ?>
                <!-- <span>Niveau</span>
                <select name="" size="1" >
                  <option value="">Licence 1</option>
                  <option value="">Licence 2</option>
                  <option value="">Licence 3</option>
                </select>
              </th>
              <th>
                <span>Option</span>
                <select name="" size="1" >
                  <option value="">Crypto-Info</option>
                  <option value="">Maths-Crypto</option>
                  <option value="">Tronc commun</option>

                </select>
              </th>
              <th>Moyenne</th> -->
            <!-- </tr> -->
            <!-- <tr>
              <td>1</td>
              <td>201808WU6</td>
              <td>Adama Dieng</td>
              <td>BA</td>
              <td>Licence 1</td>
              <td>Crypto-Info</td>
              <td>12.87</td>
            </tr>
            <tr>
              <td>2</td>
              <td>201808WU6</td>
              <td>Kakashi</td>
              <td>Seinsei</td>
              <td>Licence 1</td>
              <td>Crypto-Info</td>
              <td>12.87</td>
            </tr>
            <tr>
              <td>3</td>
              <td>201808WU6</td>
              <td>Uzumaki</td>
              <td>Naruto</td>
              <td>Licence 1</td>
              <td>Crypto-Info</td>
              <td>12.87</td>
            </tr>
            <tr>
              <td>4</td>
              <td>201808WU6</td>
              <td>Uchiha</td>
              <td>Sasuké</td>
              <td>Licence 1</td>
              <td>Crypto-Info</td>
              <td>12.87</td>
            </tr>
            <tr>
              <td>5</td>
              <td>201808WU6</td>
              <td>Aburame </td>
              <td>Shino</td>
              <td>Licence 1</td>
              <td>Crypto-Info</td>
              <td>12.87</td>
            </tr> -->
         
        </div>
      </div>
    </div>
  </body>
</html>
