<!DOCTYPE html>
<html lang="fr">

<head>
    <title>TDSI</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar" >
  <div class="container-fluid">

    <nav class="navbar navbar-inverse navbar-fixed-top" style=" font-weight:bold; background-color:#02243c; margin-top:0; margin-bottom:100px;">
      <div class="container-fluid ">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myMenu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <h1 style="">TDSI</h1>
        </div>
        <div class=" collapse navbar-collapse  navbar navbar-right" id="myMenu">
          <ul class="nav navbar-nav" style="padding-top:10px;">
            <li> <a href="#home">ACCUEIL</a> </li>
            <li> <a href="#skill">NOS SPÉCIALTITÉS</a> </li>
            <li> <a href="#contact">CONTACT</a> </li>
            <li> <a href="Login_page/index.php">INSCRIPTION</a> </li>
            <li> <a href="Login_page/index.php" id="gschool">G-SCHOOL  </a> </li>

          </ul>
        </div>

      </div>

    </nav>
  </div>
  <div class="container" id="home" style="margin-top:80px;" >
    <img src="img/main.jpg" alt="">
  </div>

    <div class="container" id="skill">
      <h2>Nos spécialités</h2>
        <p style="font-size:15px; font-weight:bold;">Nous vous proposons des spécialités phare en informatique.</p>
      <!-- <h2>Nos spécialtités</h2> <br> -->

      <div id="samaCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#samaCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#SamaCarousel" data-slide-to="1"></li>
          <li data-target="#SamaCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="carousel-page">
              <img style="width:100%;" src="img/1.png" >
            </div>
            <div class="carousel-caption">
              <h3>Base de donnée</h3>
            </div>
          </div>
          <div class="item">
            <div class="carousel-page">
              <img style="width:100%;" src="img/2.jpg" >
            </div>
            <div class="carousel-caption">
              <h3>Développement des site sécurisés </h3>
            </div>
          </div>
          <div class="item">
            <div class="carousel-page">
              <img style="width:100%;" src="img/3.jpg" >

            </div>
            <div class="carousel-caption">
              <h3>Développement d'applications</h3>
            </div>
          </div>

        </div>

        <a href="#samaCarousel" class="left carousel-control" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a href="#samaCarousel" class="right carousel-control" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>

    <div id="contact" style="margin-top:200px;">
      <span>.</span>

      <div class="container">
          <form>
            <div class="container-fluid">
              <div class="row">
                <div class=" col-md-offset-3 col-md-6 "><span id="cnt">CONTACTEZ-NOUS</span></div>
              </div>

              <div class="form-group">
                <label for="st_name" >Prénom</label>
                <input type="text" id="st_name" class="form-control" style="outline: none; background: none; color: white; border-bottom: 2px solid #10af10;">
              </div>
              <div class="form-group">
                <label for="last_name">Nom</label>
                <input type="text" id="last_name" class="form-control" style="outline: none; background: none; color: white; border-bottom: 2px solid #10af10;">
              </div>
              <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" class="form-control" style="outline: none; background: none; color: white; border-bottom: 2px solid #10af10;">
              </div>
              <div class="form-group">
                <label for="msg">Votre message</label>
                <textarea class="form-control" id="msg" style="outline: none; background: none; color: white; border-bottom: 2px solid #10af10;"></textarea>
              </div>
              <button type="submit" class="btn btn-lg btn-success">Envoyer</button>


          </form>

      </div>
    </div>


  <footer style="margin-top:100px;">

      <div class="container" style="text-align:center; font-family:"crete round", "Helvetica Neue", Helvetica, Arial, sans-serif;">
        <h2>TDSI</h2>
        <div class="container">
          <h2>GPL © 2019. Tous droits réservés.</h2>

        </div>
      </div>

    </div>

  </div>

  </footer>



</body>

</html>
