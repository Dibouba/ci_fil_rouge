<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>">
  <link rel="icon" type="image/png" href="<?php echo base_url("assets/images/git.png"); ?>">
  <title>Village green</title>
</head>

<body>


  <div class="container">
    <div class="milieu">

      <header>
        <div class="bande">
          <div class="row">
            <div class=" col-xs-3 mt-3 image">
              <a href="<?php echo base_url()?>"><img src="<?php echo base_url("assets/images/HEADER/logo_village_green.png"); ?>" classe="img-fluid ml-3" alt="image logo"></a>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light offset-6 col-3  mt-2">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse float-left" id="navbarTogglerDemo01">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                  <li class="nav-item mr-5">
                    <a class="nav-link" aria-current="page" href="<?php echo site_url("action/connexion");?>">info</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link inscrit" href="">espace client</a>
                  </li>
                </ul>
              </div>
            </nav>
            <div class="my-2 my-lg-0 col-3 ">
              <a href="#"><img src="<?php echo base_url("assets/images/HEADER/picto_panier.png"); ?>" class="img-fluid mt-3 mr-5" alt="panier"></a>
              <a href="#"><img src="<?php echo base_url("assets/images/HEADER/picto_pays.png"); ?>" class="img-fluid mt-3" alt="pays"></a>
            </div>
          </div>
          <div class="row">
            <div class="col-4"></div>
            <nav class="navbar navbar-expand-lg navbar-light offset-1 col-7">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse float-left" id="navbarTogglerDemo01">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0 mr-5 font-weight-bold">
                  <li class="nav-item ">
                    <a class="nav-link text-white mr-5" aria-current="page" href="<?php echo site_url("action/charge")?>">Produits</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white mr-5" href="service.php">Service</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white mr-5" href="aide.php">Aide</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="propos.php">A propos</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
          <div class="row">
            <div class="col-4"></div>
            <nav class="navbar navbar-expand-lg navbar-light col-8">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse float-left" id="navbarTogglerDemo01">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0 ">
                  <li class="nav-item ">
                    <a class="nav-link text-white" aria-current="page" href="guit/bass.php">Guit/Bass</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="batterie.php">Batterie</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="clavier.php">Clavier</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="studio.php">Studio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="sono.php">Sono</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="eclairage.php">Eclairage</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="dj.php">DJ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="case.php">Cases</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="accessoire.php">Accessoires</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </header>