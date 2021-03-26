<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>">
<link rel="icon" type="image/png" href="<?php echo base_url("assets/images/git.png"); ?>">
<title>Village green</title>
</head>

<body>

  <div id="block_page" class="container mx-auto">
    <div id="logo" class="col-3 col-sm-3">
      <a href="<?php echo base_url() ?>">
        <img src="<?php echo base_url("assets/images/HEADER/logo_village_green.png"); ?>" class="img-fluid" alt="image logo">
      </a>
    </div>
    <header class="">
      <nav class="navbar navbar-expand-lg navbar-light col-12">
        <button id="btn1" class="navbar-toggler offset-sm-11 offset-11" type="button" data-toggle="collapse" data-target="#menu1" aria-controls="#menu1" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse offset-lg-6 offset-md-6 offset-sm-6 offset-4" id="menu1">
          <ul class="col-lg-10 mt-2 font-weight-bold list-inline">
            <li class="list-inline-item align-middle col-2 col-xs "><a href="#">infos</a></li>
            <li class="list-inline-item align-middle col-5 "><a href="<?php echo site_url("action/connexion");?>">espace client</a></li>
            <li class="list-inline-item align-middle col-1">
              <a href="#">
                <img src="<?php echo base_url("assets/images/HEADER/picto_panier.png"); ?>" class="img-fluid" alt="panier">
              </a>
            </li>
          </ul>
          <div class="col-2 d-lg-inline-block d-none mt-2 align-middle">
            <a href="#">
              <img src="<?php echo base_url("assets/images/HEADER/picto_pays.png"); ?>" class="img-fluid" alt="pays">
            </a>
          </div>
        </div>
      </nav>
  <nav class="navbar navbar-expand-lg navbar-dark col-12">
    <button id="btn2" class="navbar-toggler offset-sm-11 offset-11" type="button" data-toggle="collapse" data-target="#menu2" aria-controls="#menu2" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul id="menu2" class="text-white collapse navbar-collapse offset-2 offset-sm-4 offset-lg-6 font-weight-bold list-inline">
      <li class="col-2 list-inline-item align-middle"><a href="<?php echo site_url("action/charge")?>">Produits</a></li>
      <li class="col-2 list-inline-item align-middle"><a href="#">Service</a></li>
      <li class="col-2 list-inline-item align-middle"><a href="#">Aide</a></li>
      <li class="col-4 list-inline-item align-middle"><a href="#">A propos</a></li>
    </ul>
  </nav>
    <nav class="navbar navbar-expand-lg navbar-dark col-12">
      <button id="btn3" class="navbar-toggler offset-sm-11 offset-11" type="button" data-toggle="collapse" data-target="#menu3" aria-controls="#menu3" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul id="menu3" class="offset-lg-5 collapse navbar-collapse col-lg-7 text-white row offset-1 font-weight-bold list-inline">
        <li class="col-2 list-inline-item align-middle"><a href="#">Guitare</a></li>
        <li class="col-2 list-inline-item align-middle"><a href="#">Sono</a></li>
        <li class="col-2 list-inline-item align-middle"><a href="#">Piano</a></li>
        <li class="col-2 list-inline-item align-middle"><a href="#">Batterie</a></li>
        <li class="col-2 list-inline-item align-middle"><a href="#">Micro</a></li>
        <li class="col-2 list-inline-item align-middle"><a href="#">Saxo</a></li>
        <li class="col-2 list-inline-item align-middle"><a href="#">Cable</a></li>
        <li class="col-2 list-inline-item align-middle"><a href="#">Cases</a></li>
      </ul>
    </nav>
</header>

<!-- </body>
</html> --> 
      