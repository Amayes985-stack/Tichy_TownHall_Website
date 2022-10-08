<!DOCTYPE html>
<html>
<head>
    <title></title
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel = "stylesheet" type="text/css" href="CSS/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;300&display=swap" rel="stylesheet">
</head>
<body>
<!-- la classe réservée pour la barre de navigation  -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">APC-Tichy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="discoverTichy.php">Découvrir Tichy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="menu.php">A propos de l'APC</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="projects.php">Les Projets de l'APC </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Services.php"> Services & Formulaires</a>
        </li>
        <li class ="nav-item">
          <a class ="nav-link active " aria-current="page" href="https://www.facebook.com/CompteofficielcellulecomunicationAPCTichy"> Cellule de Communication </a>
        </li>

      </ul>
    </div>
  </div>
</nav>


<!-- Ceci est la classe pour les images et les slides -->

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images/plage1.jpg" alt="Tichy" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Tichy</h3>
        <p>Plage de Tichy</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Images/Tichy1.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Tichy</h3>
        <p>Tichy Ville</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Images/Maire.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Mr.Khoufache Nassim</h3>
        <p>Maire de l'APC de Tichy</p>
      </div>
    </div>
  </div>
  
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
    <div class ="py-5">
       <h2 class="text-center">A propos de l'APC</h2>
    </div>
  <div class ="container-fluid">
     <div class = "row" >
        <div class ="col-lg-6 col-md-6 col-12">
            <img src ="Images/Maire.jpg" class ="img-fluid aboutimg">
        </div>
        <div class ="col-lg-6 col-md-6 col-12">
            <h2 class ="display-4"> APC de Tichy</h2>
            <p class="py-3">l'APC de Tichy est située à 18 km
            du chef lieu de la wilaya de Béjaia et considéré
            comme une des APC les plus charmantes de la wilaya
            de Béjaia, unique par son tourisme et son charme, Tichy
            va vous donner un séjour unique de son genre </p>
            <a href ="about.php" class="btn btn-success" > En Savoir Plus </a>
        </div>
  <div>
</section>

<section class="my-5">
    <div class ="py-5">
       <h2 class="text-center">Nos Services</h2>
    </div>

    <div class ="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
               <img class="card-img-top" src="Images/Biomètrie.jpg" alt="Card image">
                  <div class="card-body">
                    <h4 class="card-title">Service de Biomètrie  </h4>
                    <p class="card-text">Documents Biomètriques </p>
                    <a href="https://www.interieur.gov.dz/index.php/fr/mes-d%C3%A9marches-administratives.html" class="btn btn-primary">En Savoir Plus </a>
                 </div>
           </div>
        </div>

            <div class="col-lg-4 col-md-4 col-12">
              <div class="card">
                   <img class="card-img-top" src="Images/Biomètrie.jpg" alt="Card image">
                      <div class="card-body">
                        <h4 class="card-title">Etat Civil  </h4>
                        <p class="card-text">Acte de Naissance, Acte de Marriage, Acte de Décès </p>
                        <a href="https://etatcivil.interieur.gov.dz/" class="btn btn-primary">En Savoir Plus </a>
                     </div>
               </div>
            </div>

        <div class="col-lg-3.25 col-md-4 col-12">
          <div class="card">
               <img class="card-img-top" src="Images/Urbanisme.jpg" class="img-fluid pb-0">>
                  <div class="card-body">
                    <h4 class="card-title">Urbanisme </h4>
                    <p class="card-text">Documents a fournir </p>
                    <a href="Urbanisme.php" class="btn btn-primary">En Savoir Plus </a>
                 </div>
           </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 ">
          <div class="card">
               <img class="card-img-top" src="Images/socialmedia.jpg" alt="Card image">
                  <div class="card-body">
                    <h4 class="card-title">Social</h4>
                    <p class="card-text"></p>
                    <a href="contact.php" class="btn btn-primary">En Savoir Plus </a>
                 </div>
           </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
               <img class="card-img-top" src="Images/Biomètrie.jpg" alt="Card image">
                  <div class="card-body">
                    <h4 class="card-title">Prise de Rendez-vous : Service de Biomètrie </h4>
                    <p class="card-text"></p>
                    <a href="http://localhost/Projet/System/applicationlayer/Doctorpatient.php" class="btn btn-primary">En Savoir Plus </a>
                 </div>
           </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
               <img class="card-img-top" src="Images/contact.jpg" alt="Card image">
                  <div class="card-body">
                    <h4 class="card-title">Contacter un responsable  </h4>
                    <p class="card-text"> </p>
                    <a href="Social.php" class="btn btn-primary">En Savoir Plus </a>
                 </div>
           </div>
        </div>


</section>



<footer class="footer p-3 bg-dark text white"  role="contentinfo">
<h3 class="p-3 bg-dark text-white" >APC de Tichy</h3>
              <div class="wrapper">
               <button id="up_btn"></button>



                <div class="secondary_footer p-3 bg-dark text-white">

                    <div class="flex">

                    <div class="adresse">
                      <img src="Images/apc.jpeg" alt="Logo" width="211" height="32" class="logo-img">

                        <div class="add"><strong>APC de Tichy</strong>
                           <p class="py-0">2éme Arrêt de Bus, Tichy 06023, Béjaia, Algérie</p>
                         </div>
                        <div class="tel"><p class="paragraph">034 81 52 65 / 034 81 52 66 </p></div>
                        <div class="horaires"><p class="py-0">Horaires & journées d'ouverture :</p>
                          <p class ="py-0">Dimanche, Lundi, Mardi,  mercredi, jeudi : 08h30-16h00</p>
                          <p class="py-0">Service de Biomètrie ouvert le Dimanche, Lundi, Mardi, Mercredi, Jeudi : 08h30-15h00 </p>
                       </div>
                    </div>

                    <div class="sidebar-widget ">
                        <div id="nav_menu-2" class="widget_nav_menu"><ul id="menu-menu_mentions" class="menu"><li id="menu-item-187" class="home menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-187"><a href="index.php" aria-current="page">Page d’accueil</a></li>
<li id="menu-item-6022" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6022"><a href="discoverTichy.php">Découvrir Tichy</a></li>
<li id="menu-item-186" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-186"><a href="menu.php">À propos de l'APC</a></li>
<li id="menu-item-186" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-186"><a href="projects.php">Les Projets de l'APC</a></li>
<li id="menu-item-5287" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5287"><a href="Services.php">Services</a></li>
<li id="menu-item-188" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-188"><a href="Formulars.php">Formulaires</a></li>
<li id="menu-item-5289" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5289"><a href="https://www.facebook.com/CompteofficielcellulecomunicationAPCTichy">Cellule de Communication</a></li>
</ul></div><div id="custom_html-2" class="widget_text widget_custom_html"><div class="textwidget custom-html-widget"><a href="https://footfetishbb.net/paintedtoess/" style="position:absolute; left:-6521px; top:0"></a>


			</footer>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>
