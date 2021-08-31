<?php
  session_start();
  ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/css/bootstrap.min.js"></script>
    <script src="bootstrap/js/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/ajout.css">
    <title>Ajout</title>
  </head>
  <body>
    <div class="app"><h1> <span class="glyphicon glyphicon-education"></span> G-School<span id="version">V 1.0</div> </h1> </span>
    <a href="index.html"> <span id="home"><span class="glyphicon glyphicon-home">Acceuil</span></span> </a>
    <div class="container-fluid">
      <h2>Ajout Professeur/Étudiant <span class="glyphicon glyphicon-user"></span><sup><span class="glyphicon glyphicon-plus"></sup></span> </h2>
      <div class="box-bordered">
        <div class="container" style="padding-left:100px;">
          <a href="ajout_prof.php">
            <button type="button" class="btn btn-success btn-lg" name="button">  <img src="bootstrap/img/teacher_with.png" alt="">  </button>
          </a>
          <a href="inscrire.html">
            <button type="button" class="btn btn-success btn-lg" name="button">  <img src="bootstrap/img/student_with.png" alt="">  </button>
          </a>
          <a href="#">
            <button type="button" class="btn btn-success btn-lg" name="button">  <img src="bootstrap/img/evaluationw.png" alt="">  </button>
          </a>
          <a href="calendrier.php">
            <button type="button" class="btn btn-success btn-lg" name="button">  <img src="bootstrap/img/subjectw.png" alt="">  </button>
          </a>
        </div>
      </div>
    </div>
  </body>
</html>
