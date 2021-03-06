<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Présentation E6</title>
  <link rel="stylesheet" type="text/css" href="css/css.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/mesAnimations.css">
  <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
  <script src="js/script.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>

</head>
<body>
  <nav class="navbar fixed-top navbar-toggleable-md navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Parcours de Professionnalisation</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#tab">Tableau de Synthèse <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#projets">Porte-feuille</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#veille">Veille Technologique</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Premier écran -->
  <img src="img/intro.jpg" class="rellax" data-rellax-speed="-7" style="height:100vh; min-width:100vw; position:absolute; z-index:-1;left:0;">
  <section class="intro" id="intro">

    <div class="container titleMid">

      <div class="row justify-content-center">
        <div class="col-6 animated zoomInUp rellax" data-rellax-speed="+5">
          <div class="title">Epreuve E6</div>
          <h1>Aygalic JARA--MIKOLAJCZAK</h1>
          <h3>BTS SIO</h3>
          <h5>Service Informatique au Organisations</h5>
          <h4>Option SLAM</h4>
          <h5>Solutions Logicielles appliquées au métiers</h5>
        </div>
      </div>
    </div>
  </section>

  <!-- 2e ecran Tableau de synthese -->
  <section class="tableau-synthese" id="tab" >
    <div>
      <h1 class="title" style="margin-bottom:10%">Tableau de synthèse</h1>
      <div class="col-xs-3 col-xs-offset-1"><img src="img/excel.png"></div>
      <div class="col-xs-6"><h1 style="padding:20px 0;"><a href="../BTS_SIO_E6_tableau_synthese1.xls">Tableau de synthèse parcours SLAM</a></h1></div>
    </div>
  </section>




  <!-- 3e écran       PROJETS        -->
  <div class="row justify-content-md-center" style="height:100vh; width:100vw;" id="projets">
    <div class="porteF-title">
      <h1 class="title">
        <div class="rellax text" data-rellax-speed="0">M</div>
        <div class="rellax text" data-rellax-speed="+1">o</div>
        <div class="rellax text" data-rellax-speed="+2">n</div>
        <div class="rellax text" data-rellax-speed="0"> </div>
        <div class="rellax text" data-rellax-speed="0">p</div>
        <div class="rellax text" data-rellax-speed="+1">o</div>
        <div class="rellax text" data-rellax-speed="+3">r</div>
        <div class="rellax text" data-rellax-speed="+2">t</div>
        <div class="rellax text" data-rellax-speed="+1">e</div>
        <div class="rellax text" data-rellax-speed="+3">f</div>
        <div class="rellax text" data-rellax-speed="+2">e</div>
        <div class="rellax text" data-rellax-speed="+1">u</div>
        <div class="rellax text" data-rellax-speed="+2">i</div>
        <div class="rellax text" data-rellax-speed="+3">l</div>
        <div class="rellax text" data-rellax-speed="+2">l</div>
        <div class="rellax text" data-rellax-speed="+1">e</div>
      </h1>
    </div>
    <img src="img/porteF.jpg" class="img-porteF rellax" data-rellax-speed="-9" style="height:100vh; min-width:100vw; position:absolute;  z-index:-1;left:0;">
  </div>
  <section class="projets" >


    <!--div class="container" style="padding:100px 0">
    <div class="row">
    <h1 class="label-perso">Première année</h2>
  </div>
  <div class="row">
  <h2 class="label-perso">Pendant la formation</h2>
</div>
<div class="row">
<button class="btn btn-perso" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapseExample">
TinyIRC
</button>
<div class="collapse" id="collapse1">
<div class="card card-block">
<img src="img/projectTinyIRC.png" class="miniature" alt="...">
<p> Client IRC Minimaliste avec support des messages privés développé avec JavaFX</p>
</div>
</div>
</div>
<div class="row">
<button class="btn btn-perso" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapseExample">
EasySSH
</button>
<div class="collapse" id="collapse2">
<div class="card card-block">
<img src="img/projectEasySSH.png" class="miniature" alt="...">
<p>Serveur de virtualisation réalisé en HTML, CSS et PHP </p>
</div>
</div>
</div>
<div class="row">
<h2 class="label-perso">En stage</h2>
</div>
<div class="row">
<button class="btn btn-perso" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapseExample">
Matières Grises
</button>
<div class="collapse" id="collapse3">
<div class="card card-block">
<img src="img/logoMG.png" class="miniature" alt="...">
<p> Site de présentation réalisé avec Wordpress</p>
</div>
</div>
</div>
<div class="row">
<button class="btn btn-perso" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseExample">
Cobas Batiment
</button>
<div class="collapse" id="collapse4">
<div class="card card-block">
<img src="img/logoCobas.png" class="miniature" alt="...">
<p>Site de présentation HTML et CSS</p>
</div>
</div>
</div>
<div class="row">
<button class="btn btn-perso" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapseExample">
Penuel Services
</button>
<div class="collapse" id="collapse5">
<div class="card card-block">
<img src="img/logoPenuel.svg" class="miniature" alt="...">
<p>Site Web + Application Web JavaScritp PHP HTML et CSS</p>
</div>
</div>
</div>
<div class="row">
<h1 class="label-perso">Deuxième année</h1>
</div>
<div class="row">
<h2 class="label-perso">Pendant la formation</h2>
</div>
<div class="row">
<button class="btn btn-perso" type="button" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapseExample">
Projet Web Dynamic
</button>
<div class="collapse" id="collapse13">
<div class="card card-block">
<img src="img/SQLJEE.png" class="miniature" alt="...">
<p>Serveur combinant plusieurs technologies comme JEE et mysql</p>
</div>
</div>
</div>
<div class="row">
<button class="btn btn-perso" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapseExample">
Android
</button>
<div class="collapse" id="collapse6">
<div class="card card-block">
<img src="img/android.jpg" class="miniature" alt="...">
<p>TP réalisé en java pour Android</p>
</div>
</div>
</div>
<div class="row">
<button class="btn btn-perso" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapseExample">
PPE AS FOOT
</button>
<div class="collapse" id="collapse7">
<div class="card card-block">
<img src="img/logoAJAX.png" class="miniature" alt="...">
<img src="img/logoPHPSQL.png" class="miniature" alt="...">
<p>Projet multi serveur, multi client, utilisant des techonolies comme json, ajax, php, mySQL...</p>
</div>
</div>
</div>
<div class="row">
<h2 class="label-perso">En stage<h2>
</div>
<div class="row">
<button class="btn btn-perso" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapseExample">
L'amour Donne
</button>
<div class="collapse" id="collapse8">
<div class="card card-block">
<img src="img/logoAD.png" class="miniature" alt="...">
<p>Site Wordpress pour une association</p>
</div>
</div>
</div>
<div class="row">
<h1 class="label-perso">Projets Personnels</h1>
</div>
<div class="row">
<button class="btn btn-perso" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapseExample">
CV responsive
</button>
<div class="collapse" id="collapse9">
<div class="card card-block">
<img src="img/projetCV.png" class="miniature" alt="...">
<p>CV Web en HTML, CSS et javaScript</p>
</div>
</div>
</div>
<div class="row">
<button class="btn btn-perso" type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapseExample">
Jeu video
</button>
<div class="collapse" id="collapse10">
<div class="card card-block">
<img src="img/logo-babylonjs.svg" class="miniature" alt="...">
<p>Jeu vidéo 3D multijoueur développé en JS avec Node.js Babylon.js et Socket.io</p>
</div>
</div>
</div>
<div class="row">
<button class="btn btn-perso" type="button" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapseExample">
Tentative d'apprentissage de l'intelligence artificielle
</button>
<div class="collapse" id="collapse11">
<div class="card card-block">
<img src="img/logoTF.jpg" class="miniature" alt="...">
<p>Ce fut un echec. Il n'y a rien a voir.<br>
Le niveau requis en mathématique et en python est bien trop élevé pour moi. Seuls quelques concepts sont à ma porté</p>
</div>
</div>
</div>
</div-->



<div class="timeline">
  <div class="timeline-center"></div>

  <div class="timeline-left">
    <h1 class="label-perso">Première année</h1>
  </div>
  <div class="timeline-left">
    <h2 class="label-perso">Pendant la formation</h2>
  </div>
  <div class="timeline-right">
    <div class="timeline-right-header">
      <h1 data-toggle="collapse" data-target="#collapse1" aria-expanded="false">TinyIRC</h1>
    </div>
    <div class="timeline-right-content collapse" id="collapse1">
      <img src="img/projectTinyIRC.png" class="miniature" alt="...">
      <p> Client IRC Minimaliste avec support des messages privés développé avec JavaFX</p>
    </div>
  </div>
  <div class="timeline-right">
    <div class="timeline-right-header">
      <h1 data-toggle="collapse" data-target="#collapse2" aria-expanded="false">Easy SSH</h1>
    </div>
    <div class="timeline-right-content collapse" id="collapse2">
      <img src="img/projectEasySSH.png" class="miniature" alt="...">
      <p>Serveur de virtualisation réalisé en HTML, CSS et PHP </p>
    </div>
  </div>
  <div class="timeline-left">
    <h2 class="label-perso">En stage</h2>
  </div>
  <div class="timeline-center"></div>

  <div class="timeline-right">
    <div class="timeline-right-header">
      <h1 data-toggle="collapse" data-target="#collapse3" aria-expanded="false">Matières Grises</h1>
    </div>
    <div class="timeline-right-content collapse" id="collapse3">
      <img src="img/logoMG.png" class="miniature" alt="...">
      <p> Site de présentation réalisé avec Wordpress</p>
    </div>
  </div>
  <div class="timeline-right">
    <div class="timeline-right-header">
      <h1 data-toggle="collapse" data-target="#collapse4" aria-expanded="false">Cobas Batiment</h1>
    </div>
    <div class="timeline-right-content collapse" id="collapse4">
      <img src="img/logoCobas.png" class="miniature" alt="...">
      <p>Site de présentation HTML et CSS</p>
    </div>
  </div>
  <div class="timeline-center"></div>

  <div class="timeline-right">
    <div class="timeline-right-header">
      <h1 data-toggle="collapse" data-target="#collapse5" aria-expanded="false">Penuel Services</h1>
    </div>
    <div class="timeline-right-content collapse" id="collapse5">
      <img src="img/logoPenuel.svg" class="miniature" alt="...">
      <p>Site Web + Application Web JavaScritp PHP HTML et CSS</p>
    </div>
  </div>
  <div class="timeline-left">
    <h1 class="label-perso">Deuxieme année</h1>
  </div>
  <div class="timeline-left">
    <h2 class="label-perso">Pendant la formation</h2>
  </div>
  <div class="timeline-center"></div>

  <div class="timeline-right">
    <div class="timeline-right-header">
      <h1 data-toggle="collapse" data-target="#collapse6" aria-expanded="false">Projet Web Dynamique</h1>
    </div>
    <div class="timeline-right-content collapse" id="collapse6">
      <img src="img/SQLJEE.png" class="miniature" alt="...">
      <p>Serveur combinant plusieurs technologies comme JEE et mysql</p>
    </div>
  </div>
  <div class="timeline-right">
    <div class="timeline-right-header">
      <h1 data-toggle="collapse" data-target="#collapse7" aria-expanded="false">Android</h1>
    </div>
    <div class="timeline-right-content collapse" id="collapse7">
      <img src="img/android.jpg" class="miniature" alt="...">
      <p>TP réalisé en java pour Android</p>
    </div>
  </div>
  <div class="timeline-center"></div>

  <div class="timeline-right">
    <div class="timeline-right-header">
      <h1 data-toggle="collapse" data-target="#collapse8" aria-expanded="false">PPE AS FOOT</h1>
    </div>
    <div class="timeline-right-content collapse" id="collapse8">
      <img src="img/logoAJAX.png" class="miniature" alt="...">
      <img src="img/logoPHPSQL.png" class="miniature" alt="...">
      <p>Projet multi serveur, multi client, utilisant des techonolies comme json, ajax, php, mySQL...</p>
    </div>
  </div>
  <div class="timeline-left">
    <h2 class="label-perso">En stage</h2>
  </div>
  <div class="timeline-right">
    <div class="timeline-right-header">
      <h1 data-toggle="collapse" data-target="#collapse9" aria-expanded="false">L'amour Donne</h1>
    </div>
    <div class="timeline-right-content collapse" id="collapse9">
      <img src="img/logoAD.png" class="miniature" alt="...">
      <p>Site Wordpress pour une association</p>
    </div>
  </div>
  <div class="timeline-left">
    <h1 class="label-perso">projets personnels</h1>
  </div>
  <div class="timeline-right">
    <div class="timeline-right-header">
      <h1 data-toggle="collapse" data-target="#collapse10" aria-expanded="false">CV Web</h1>
    </div>
    <div class="timeline-right-content collapse" id="collapse10">
      <img src="img/projetCV.png" class="miniature" alt="...">
      <p>CV Web en HTML, CSS et javaScript</p>
    </div>
  </div>
  <div class="timeline-center"></div>

  <div class="timeline-right">
    <div class="timeline-right-header">
      <h1 data-toggle="collapse" data-target="#collapse11" aria-expanded="false">Jeu vidéo</h1>
    </div>
    <div class="timeline-right-content collapse" id="collapse11">
      <img src="img/logo-babylonjs.svg" class="miniature" alt="...">
      <p>Jeu vidéo 3D multijoueur développé en JS avec Node.js Babylon.js et Socket.io</p>
    </div>
  </div>
  <div class="timeline-center"></div>

  <div class="timeline-right">
    <div class="timeline-right-header">
      <h1 data-toggle="collapse" data-target="#collapse12" aria-expanded="false">Tentative d'apprentissage de l'intelligence artificielle</h1>
    </div>
    <div class="timeline-right-content collapse" id="collapse12">
      <img src="img/logoTF.jpg" class="miniature" alt="...">
      <p>Ce fut un echec. Il n'y a rien a voir.<br>
        Le niveau requis en mathématique et en python est bien trop élevé pour moi. Seuls quelques concepts sont à ma porté</p>
    </div>
  </div>

  <div style="clear:right;height:100px"></div>
</div>


</section>





<!-- VEILLE TECHNO -->


<section class="veille-technologique" style="z-index:-2">
  <div class="row justify-content-md-center" style="height:100vh" id="veille">
    <div class="col-1 rellax colR" data-rellax-speed="-1"></div>
    <div class="col-1 rellax colR" data-rellax-speed="+1"></div>
    <div class="col-1 rellax colR" data-rellax-speed="-1"></div>
    <div class="col-1 rellax colR" data-rellax-speed="+1"></div>
    <div class="col-1 rellax colR" data-rellax-speed="-1"></div>
    <div class="col-1 rellax colR" data-rellax-speed="+1"></div>
    <div class="col-1 rellax colR" data-rellax-speed="-1"></div>
    <div class="col-1 rellax colR" data-rellax-speed="+1"></div>
    <div class="col-1 rellax colR" data-rellax-speed="-1"></div>
    <div class="col-1 rellax colR" data-rellax-speed="+1"></div>
    <div class="col-1 rellax colR" data-rellax-speed="-1"></div>
    <div class="col-1 rellax colR" data-rellax-speed="+1"></div>
    <div class="title-veille">
      <h1 class="title">Veille Technologique</h1>
    </div>
  </div>


  <div class="container" style="padding:100px 0">
    <div class="row">
      <div class="col-2">
        <img src="img/Feedly-128.png" class="" alt="...">
      </div>
      <div class="col-9">
        <h3 class="title" style="text-align:left;"><a href="http://feedly.com/i/my" style="text-decoration:none;color:#333">feedly</a></h3>
      </div>
    </div>
    <div class="row">
      <h1>Gestion et classification des sources</h1>
    </div>
    <div class="row">
      <h1>Sauvegarde d'articles</h1><br>
    </div>
    <div class="row">
      <h1>Suggestions intelligentes</h1><br>
    </div>
  </div>
  <div class="row justify-content-md-center" >
    <span class="title">Le smartphone modulaire</span>

  </div>
  <div class="container">
    <div class="row" >
    </div>
    <div class="row">
      <div class="col-xs-6 col-xs-offset-2">
        <table class="table-veille">
          <tr>
            <th></th>
            <td>
              <h1>Début du projet ARA, naissance du concept</h1>
            </td>
          </tr>
          <tr>
            <th>29 octobre 2013</th>
            <td><a href="http://www.phonandroid.com/motorola-ara-project-des-smartphones-modulables-et-personnalisables.html">Motorola Ara Project : des smartphones modulables et personnalisables</a></td>
          </tr>
          <tr>
            <th>25 juillet 2014</th>
            <td><a href="http://www.phonandroid.com/blocks-larrivee-smartwatchs-modulables.html">Blocks : L’arrivée des smartwatchs modulables !</a></td>
          </tr>
          <tr>
            <th> 11 novembre 2014</th>
            <td><a href="http://www.lesnumeriques.com/telephone-portable/vsenn-vsenn-p22297/vsenn-nouveau-concurrent-projet-ara-n36773.html">Vsenn, nouveau concurrent du projet Ara</a></td>
          </tr>
          <tr>
            <th> 2 decembre 2014</th>
            <td><a href="http://www.lesnumeriques.com/telephone-portable/circular-devices-puzzlephone-p22595/puzzlephone-nouveau-concurrent-projet-ara-venu-finlande-n37325.html">Puzzlephone : un nouveau concurrent au projet Ara venu de Finlande</a></td>
          </tr>
          <tr>
            <th> 17 fevrier 2015</th>
            <td><a href="http://www.lesnumeriques.com/telephone-portable/motorola-ara-p17553/toshiba-developpe-modules-photo-pour-projet-ara-n39565.html">Toshiba développe des modules photo pour le projet Ara</a></td>
          </tr>
          <tr>
            <th>4 mars 2015</th>
            <td><a href="http://www.phonandroid.com/mwc-2015-project-ara-smartphone-modulaire-devoile.html">MWC 2015 : Project ARA, on a pris en main le prototype du smartphone modulaire de Google </a></td>
          </tr>
          <tr>
            <th></th>
            <td>
              <h2>Arrivé du premier concurent sérieux</h2>
            </td>
          </tr>
          <tr>
            <th>16 juin 2015</th>
            <td><a href="http://www.phonandroid.com/fairphone-2-un-smartphone-modulaire-equitable-et-performant-a-525-e-des-cet-automne.html">Fairphone 2 : un smartphone modulaire, équitable et performant à 525 € dès cet automne </a></td>
          </tr>
          <tr>
            <th>24 Juillet 2015</th>
            <td><a href="http://www.lesnumeriques.com/telephone-portable/fairphone-fairphone-2-p26923/5000-precommandes-en-semaine-pour-fairphone-2-n44145.html">5000 précommandes en une semaine pour le Fairphone 2</a></td>
          </tr>
          <tr>
            <th>21 août 2015</th>
            <td><a href="http://www.phonandroid.com/project-ara-problemes-solidite-modules-etaient-blague.html">Project Ara : les problèmes de solidité des modules « étaient une blague » !</a></td>
          </tr>
          <tr>
            <th>3 novembre 2015</th>
            <td> <a href="http://www.lesnumeriques.com/telephone-portable/circular-devices-puzzlephone-p22595/puzzlephone-smartphone-modulaire-debarque-sur-indiegogo-n46847.html">Puzzlephone : un nouveau smartphone modulaire débarque sur Indiegogo </a></td>
          </tr>
          <tr>
            <th> 1 fevrier 2016</th>
            <td><a href="http://www.phonandroid.com/fairphone-2-test-smartphone-equitable.html">Fairphone 2 : test du smartphone équitable</a></td>
          </tr>
          <tr>
            <th></th>
            <td>
              <h2>LG entre sur le marché</h2>
            </td>
          </tr>
          <tr>
            <th>21 fevrier 2016</th>
            <td><a href="http://www.frandroid.com/marques/lg/343666_mwc-2016-lg-presente-son-g5-une-toute-nouvelle-approche-du-smartphone">Officialisation du LG G5 </a></td>
          </tr>
          <tr>
            <th>02 mai 2016</th>
            <td><a href="http://www.frandroid.com/marques/lg/356341_lg-g5-enfin-disponible-a-vente">LG G5 disponible a la vente</a></td>
          </tr>
          <tr>
            <th>13 mai 2016</th>
            <td><a href="http://www.frandroid.com/test/350555_test-lg-g5">Test du LG G5, le photophone par excellence </a></td>
          </tr>
          <tr>
            <th>7 juin 2016</th>
            <td><a href="http://www.lesnumeriques.com/telephone-portable/lg-g5-p30891/lg-g5-meilleur-smartphone-en-audio-avec-module-bang-olufsen-n52679.html">LG G5 : meilleur smartphone en audio avec le module Bang & Olufsen</a></td>
          </tr>
          <tr>
            <th></th>
            <td>
              <h2>Motorola, anciennement sous le contrôle de Google revoit sa copie</h2>
            </td>
          </tr>
          <tr>
            <th>10 juin 2016</th>
            <td><a href="http://www.phonandroid.com/moto-z-officiel-incroyable-smartphone-modulaire-ecrase-lg-g5.html">Moto Z officiel : l’incroyable smartphone modulaire qui écrase le LG G5</a></td>
          </tr>
          <tr>
            <th></th>
            <td>
              <h2>Des premiers essais décevants</h2>
            </td>
          </tr>
          <tr>
            <th>13 juin 2016</th>
            <td><a href="http://www.frandroid.com/produits-android/smartphone/363634_lenovo-moto-z-tres-chers-motomods">Lenovo Moto Z : de très chers Moto Mods </a></td>
          </tr>
          <tr>
            <th>5 juillet 2016</th>
            <td><a href="http://www.lesnumeriques.com/telephone-portable/lg-g5-p30891/lg-restructure-sa-division-mobile-suite-a-echec-g5-n53797.html">LG restructure sa division mobile suite à l'échec du G5 </a></td>
          </tr>
          <tr>
            <th>6 aout 2016</th>
            <td><a href="http://www.frandroid.com/marques/lg/371358_test-video-accessoires-modules-lg-g5-cam-plus-hi-fi-plus-cam-360">Test vidéo des accessoires et modules du LG G5 : Cam Plus, Hi-Fi Plus et Cam 360</a></td>
          </tr>
          <tr>
            <th>31 aout 2016</th>
            <td><a href="http://www.frandroid.com/marques/lenovo/374715_hasselblad-4116-capteur-photo-zoom-optique-moto-z">Hasselblad True Zoom, un capteur photo avec zoom optique pour le Moto Z</a></td>
          </tr>
          <tr>
            <th>2 sept 2016</th>
            <td><a href="http://www.numerama.com/tech/192197-projet-ara-smartphone-modulaire-google-cest-fini.html">Fin du projet ARA</a></td>
          </tr>
          <tr>
            <th></th>
            <td>
              <h2>La mort du concept ?</h2>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>

  <div class="container" >
    <div class="row" style="padding:100px 0">
      <h1 class="title">Veille technologique 2.0</h1>
    </div>
    <div class="row">
      <h1>Les technologique du web Front End<h1>
      </div>
      <div class="row">
        <h3>Octobre 2016</h3>
      </div>
      <div class="row">
        <div class="article-body">
          <button class="btn btn-perso" type="button" data-toggle="collapse" data-target="#collapseV8" aria-expanded="false" aria-controls="collapseExample">
            <img src="http://internetcurated.com/wp-content/uploads/2016/09/ic-logo-bw.png" style="max-height:30px;"> Internet Curated
          </button>
          <div class="article-info">
            <h4>Internet Curated</h4>
            <p>Octobre<br>
              Collection de resources pour le web
            </p>
          </div>
          <div class="collapse" id="collapseV8">
            <img src="img/internetcurated.png" style="max-width:100%;">
            <br><br>
            <a href="http://www.webdesignerdepot.com/2016/10/whats-new-for-designers-october-2016/">Source</a><br>
            <a href="http://internetcurated.com/">Le site</a><br>
          </div>
        </div>
      </div>
      <div class="row">
        <h3>Novembre 2016</h3>
      </div>
      <div class="row">
        <div class="article-body">
          <button class="btn btn-perso" type="button" data-toggle="collapse" data-target="#collapseV7" aria-expanded="false" aria-controls="collapseExample">
            choo
          </button>
          <div class="article-info">
            <h4>Choo</h4>
            <p>Novembre<br>
              Framework javascript pour création d'applications frontend
            </p>
          </div>
          <div class="collapse" id="collapseV7">
            <img src="img/choo.gif" style="max-width:100%;">
            <br><br>
            <a href="http://www.webdesignerdepot.com/2016/11/whats-new-for-developers-november-2016/">Source</a><br>
            <a href="https://github.com/yoshuawuyts/choo">GitHub</a><br>
          </div>
        </div>
      </div>

      <div class="row">
        <h3>Decembre 2016</h3>
      </div>
      <div class="row">
        <h3>Janvier 2017</h3>
      </div>
      <div class="row">
        <div class="article-body">
          <button class="btn btn-perso" type="button" data-toggle="collapse" data-target="#collapseV6" aria-expanded="false" aria-controls="collapseExample">
            <img src="http://anime-js.com/documentation/assets/img/icons/icon-doc.png" style="height:30px;"> anime.js
          </button>
          <div class="article-info">
            <h4>anime.js</h4>
            <p>Janvier<br>
              Moteur d'animation javascript
            </p>
          </div>
          <div class="collapse" id="collapseV6">
            <img src="img/animejs.gif">
            <br><br>
            <h4>Exemple documenté</h4><br>
            <img src="img/animejscode.png" style="max-width:100%;">
            <a href="http://www.webdesignerdepot.com/2017/01/whats-new-for-designers-january-2017/">Source</a><br>
            <a href="http://anime-js.com/">La page du proget</a><br>
            <a href="https://github.com/juliangarnier/anime">GitHub</a><br>
            <a href="https://codepen.io/collection/XLebem/">Codepen</a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="article-body">
          <button class="btn btn-perso" type="button" data-toggle="collapse" data-target="#collapseV4" aria-expanded="false" aria-controls="collapseExample">
            RELLAX
          </button>
          <div class="article-info">
            <h4>RELLAX</h4>
            <p>Janvier<br>
              Framework JavaScript "Parallax scrolling"
            </p>
          </div>
          <div class="collapse" id="collapseV4">
            <pre class="code-usage"><code>
              &lt;div class="rellax" data-rellax-speed="-7">
              I’m extra slow and smooth
              &lt;/div>

            </code></pre>
            <a href="http://www.webdesignerdepot.com/2017/01/whats-new-for-designers-january-2017/">Source</a><br>
            <a href="https://dixonandmoe.com/rellax/">La page du proget</a><br>
            <a href="https://github.com/dixonandmoe/rellax">GitHub</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="article-body">
          <button class="btn btn-perso" type="button" data-toggle="collapse" data-target="#collapseV3" aria-expanded="false" aria-controls="collapseExample">
            <img src="http://bulma.io/images/bulma-logo.png" height="30px">
          </button>
          <div class="article-info">
            <h4>Reflect</h4>
            <p>Janvier<br>
              Framework CSS basé sur Flexbox
            </p>
          </div>
          <div class="collapse" id="collapseV3">
            <img src="img/bulma2.png" style="max-width:100%"><br>
            <img src="img/bulma1.png" style="max-width:100%">
            <pre class="code-usage"><code>
              &lt;div class="tile is-ancestor">
              &lt;div class="tile is-vertical is-8">
              &lt;div class="tile">
              &lt;div class="tile is-parent is-vertical">
              &lt;article class="tile is-child">
              <!-- Any content you want here -->
              &lt;/article>
              &lt;article class="tile is-child">
              <!-- Any content you want here -->
              &lt;/article>
              &lt;/div>
              &lt;div class="tile is-parent">
              &lt;article class="tile is-child">
              <!-- Any content you want here -->
              &lt;/article>
              &lt;/div>
              &lt;/div>
              &lt;div class="tile is-parent">
              &lt;article class="tile is-child">
              <!-- Any content you want here -->
              &lt;/article>
              &lt;/div>
              &lt;/div>
              &lt;div class="tile is-parent">
              &lt;article class="tile is-child">
              <!-- Any content you want here -->
              &lt;/article>
              &lt;/div>
              &lt;/div>
            </code></pre>
            <a href="http://www.webdesignerdepot.com/2017/01/whats-new-for-designers-january-2017/">Source</a><br>
            <a href="http://bulma.io/">La page du proget</a>
          </div>
        </div>
      </div>
      <div class="row">
        <h3>Février 2017</h3>
      </div>
      <div class="row">
        <div class="article-body">
          <button class="btn btn-perso" type="button" data-toggle="collapse" data-target="#collapseV1" aria-expanded="false" aria-controls="collapseExample">
            <svg id="header-belo" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 94 29" height="29px" width="94px">
              <title>Airbnb Design</title>
              <desc>Airbnb Design Logo</desc>
              <defs></defs>
              <g fill-rule="evenodd" fill="none" stroke-width="1" stroke="none" id="Page-1">
                <g id="logo">
                  <g id="V2">
                    <g id="_x31__x5F_2_x5F_trending">
                      <g fill="#000000" transform="translate(37.000000, 6.000000)" id="Group">
                        <path d="M10.5,13.2 C10.5,14.1 10.6,14.8 10.6,15 L8.4,15 C8.3,14.8 8.3,14.1 8.3,13.7 C7.8,14.5 6.8,15.2 5.4,15.2 C2.6,15.2 0.7,13 0.7,10.1 C0.7,7.3 2.6,5 5.3,5 C7,5 7.9,5.8 8.2,6.4 L8.2,0.5 L10.5,0.5 L10.5,13.2 L10.5,13.2 Z M5.7,13.2 C7.2,13.2 8.3,11.9 8.3,10.1 C8.3,8.2 7.3,7.1 5.7,7.1 C4.1,7.1 3.1,8.3 3.1,10.1 C3.1,11.9 4.1,13.2 5.7,13.2 L5.7,13.2 Z" class="belo"></path>
                        <path d="M21.7,12.2 C21.2,13.9 19.6,15.3 17.3,15.3 C14.7,15.3 12.3,13.4 12.3,10.1 C12.3,7 14.6,5 17,5 C20,5 21.8,7 21.8,10.1 C21.8,10.5 21.8,10.8 21.7,10.8 L14.6,10.8 C14.7,12.3 15.8,13.3 17.3,13.3 C18.7,13.3 19.4,12.6 19.7,11.6 L21.7,12.2 L21.7,12.2 Z M19.4,9.1 C19.3,8 18.6,6.9 17,6.9 C15.6,6.9 14.7,8 14.6,9.1 L19.4,9.1 L19.4,9.1 Z" class="belo"></path>
                        <path d="M24.7,11.8 C24.8,12.7 25.4,13.5 26.7,13.5 C27.7,13.5 28.2,13 28.2,12.4 C28.2,11.9 27.8,11.5 27.1,11.3 L25.7,11 C24,10.6 23.1,9.5 23.1,8.2 C23.1,6.5 24.7,5.1 26.7,5.1 C29.4,5.1 30.3,6.9 30.5,7.8 L28.5,8.4 C28.4,7.8 28,6.9 26.7,6.9 C25.9,6.9 25.3,7.4 25.3,8 C25.3,8.5 25.7,8.9 26.3,9 L27.8,9.3 C29.6,9.7 30.6,10.8 30.6,12.3 C30.6,13.8 29.4,15.4 26.9,15.4 C24.1,15.4 23,13.6 22.9,12.5 L24.7,11.8 L24.7,11.8 Z" class="belo"></path>
                        <path d="M33.3,0.3 C34.2,0.3 34.8,1 34.8,1.8 C34.8,2.6 34.1,3.3 33.3,3.3 C32.5,3.3 31.8,2.7 31.8,1.8 C31.8,0.9 32.5,0.3 33.3,0.3 L33.3,0.3 Z M32.1,15 L32.1,5.3 L34.4,5.3 L34.4,15 L32.1,15 L32.1,15 Z" class="belo"></path>
                        <path d="M38.4,15 C38.6,16.2 39.5,17.1 40.8,17.1 C42.6,17.1 43.6,16.1 43.6,14.2 L43.6,13.2 C43.2,14 42.2,14.6 40.8,14.6 C38.2,14.6 36.3,12.6 36.3,9.9 C36.3,7.3 38.1,5.2 40.8,5.2 C42.3,5.2 43.3,5.8 43.7,6.6 L43.7,5.4 L45.9,5.4 L45.9,14.2 C45.9,16.8 44.6,19.2 40.9,19.2 C38.3,19.2 36.5,17.6 36.3,15.6 L38.4,15 L38.4,15 Z M43.6,9.8 C43.6,8.1 42.5,7.1 41.1,7.1 C39.6,7.1 38.6,8.2 38.6,9.8 C38.6,11.5 39.6,12.6 41.1,12.6 C42.6,12.6 43.6,11.5 43.6,9.8 L43.6,9.8 Z" class="belo"></path>
                        <path d="M50.5,15 L48.2,15 L48.2,5.3 L50.5,5.3 L50.5,6.6 C51.1,5.5 52.3,5 53.4,5 C55.8,5 56.9,6.7 56.9,8.9 L56.9,15 L54.6,15 L54.6,9.2 C54.6,8 54.1,7 52.6,7 C51.3,7 50.6,8 50.6,9.3 L50.6,15 L50.5,15 Z" class="belo"></path>
                      </g>
                      <path fill="#000000" d="M26.6,20.6 C26.5,20.2 26.3,19.9 26.2,19.6 C26,19.1 25.7,18.6 25.5,18.1 L25.5,18.1 C23.5,13.7 21.3,9.3 19.1,5 L19,4.7 C18.8,4.3 18.5,3.8 18.3,3.3 C18,2.8 17.7,2.2 17.3,1.7 C16.3,0.6 15,7.10542736e-15 13.6,7.10542736e-15 C12.2,7.10542736e-15 10.8,0.6 9.9,1.7 C9.5,2.2 9.1,2.8 8.9,3.3 C8.6,3.8 8.4,4.2 8.2,4.7 L8.1,4.9 C5.9,9.3 3.7,13.7 1.7,18 L1.7,18.1 C1.5,18.6 1.3,19.1 1,19.6 C0.9,19.9 0.7,20.3 0.6,20.6 C0.2,21.7 0.1,22.7 0.3,23.7 C0.6,25.9 2.1,27.7 4.1,28.5 C4.9,28.8 5.6,29 6.5,29 L7.3,29 C8.3,28.9 9.2,28.6 10.2,28 C11.4,27.3 12.5,26.4 13.8,25 C15.1,26.4 16.2,27.4 17.4,28 C18.4,28.5 19.3,28.9 20.3,29 L21.1,29 C21.9,29 22.7,28.8 23.5,28.5 C25.5,27.7 27,25.8 27.3,23.7 C27.1,22.7 27,21.7 26.6,20.6 L26.6,20.6 L26.6,20.6 Z M13.5,22.1 C11.9,20.1 10.9,18.3 10.6,16.7 C10.4,16 10.4,15.4 10.5,14.9 C10.6,14.4 10.7,14 11,13.7 C11.5,12.9 12.5,12.4 13.6,12.4 C14.7,12.4 15.6,12.9 16.2,13.7 C16.4,14 16.6,14.5 16.7,14.9 C16.8,15.4 16.7,16 16.6,16.7 C16.1,18.3 15.1,20.1 13.5,22.1 L13.5,22.1 L13.5,22.1 Z M25.1,23.5 C24.9,25 23.9,26.3 22.5,26.9 C21.8,27.2 21.1,27.3 20.3,27.2 C19.6,27.1 18.8,26.9 18.1,26.4 C17.1,25.8 16,24.9 14.8,23.6 C16.7,21.2 17.9,19.1 18.3,17.2 C18.5,16.3 18.6,15.5 18.4,14.7 C18.3,14 18,13.3 17.6,12.7 C16.7,11.4 15.2,10.6 13.5,10.6 C11.8,10.6 10.3,11.4 9.4,12.7 C9,13.3 8.7,14 8.6,14.7 C8.5,15.5 8.5,16.3 8.7,17.2 C9.1,19.1 10.3,21.3 12.2,23.6 C11,24.9 9.9,25.8 8.9,26.4 C8.1,26.8 7.4,27.1 6.7,27.2 C5.9,27.3 5.2,27.2 4.5,26.9 C3.1,26.3 2.1,25 1.9,23.5 C1.8,22.8 1.9,22.1 2.2,21.3 C2.3,21 2.4,20.7 2.6,20.4 C2.8,19.9 3,19.4 3.3,19 L3.3,18.9 C5.3,14.6 7.4,10.2 9.7,5.9 L9.8,5.7 C10,5.3 10.3,4.8 10.5,4.4 C10.8,3.9 11,3.5 11.3,3.1 C11.9,2.4 12.7,2 13.6,2 C14.5,2 15.3,2.4 15.9,3.1 C16.2,3.5 16.5,3.9 16.7,4.4 C16.9,4.8 17.2,5.3 17.4,5.7 L17.5,5.9 C19.7,10.2 21.9,14.6 23.9,18.9 L23.9,18.9 C24.1,19.4 24.3,19.9 24.6,20.4 C24.8,20.7 24.9,21 25,21.3 C25.1,22 25.2,22.7 25.1,23.5 L25.1,23.5 L25.1,23.5 Z" class="belo"></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </button>
          <div class="article-info">
            <h4>Lottie</h4>
            <p>1 Fev.<br>
              Outil iOS, Android et React pour afficher des rendus After Effect.
            </p>
          </div>

          <div class="collapse" id="collapseV1">
            <video autoplay loop>
              <source src="https://cdn0.vox-cdn.com/thumbor/8U0izqicv0X0XDyBwyQlCis_veo=/0x0:1400x667/1120x747/filters:focal(588x222:812x446):gifv():no_upscale()/cdn0.vox-cdn.com/uploads/chorus_image/image/53046875/lottie_gif.0.gif" type="video/mp4">
              </video>
              <pre class="code-usage"><code>
                import React from 'react';
                import { Animated } from 'react-native';
                import Animation from 'lottie-react-native';

                export default class BasicExample extends React.Component {
                  constructor(props) {
                    super(props);
                    this.state = {
                      progress: new Animated.Value(0),
                    };
                  }

                  componentDidMount() {
                    Animated.timing(this.state.progress, {
                      toValue: 1,
                      duration: 5000,
                    }).start();
                  }

                  render() {
                    return (
                    &lt;Animation
                    style={{
                      width: 200,
                      height: 200,
                    }}
                    source={require('../path/to/animation.json')}
                    progress={this.state.progress}
                    />
                    );
                  }
                }</code></pre>
                <a href="http://www.theverge.com/2017/2/1/14478220/airbnb-lottie-animation-app-library-open-source">Source</a><br>
                <a href="http://airbnb.design/lottie/">La page du projet</a><br>
                GitHub : <br>
                <a href="https://github.com/airbnb/lottie-react-native">Lottie React</a><br>
                <a href="https://github.com/airbnb/lottie-android">Lottie Android</a><br>
                <a href="https://github.com/airbnb/lottie-ios">Lottie iOS</a><br>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="article-body">
              <button class="btn btn-perso" type="button" data-toggle="collapse" data-target="#collapseV2" aria-expanded="false" aria-controls="collapseExample">
                <img src="https://csspeeper.com/Assets/logo-svg.svg">
              </button>
              <div class="article-info">
                <h4>CSS Peeper</h4>
                <p>Fevrier<br>
                  Inspecteur CSS pour web designer
                </p>
              </div>
              <div class="collapse" id="collapseV2">
                <img src="http://netdna.webdesignerdepot.com/uploads/2017/02/010.jpg" style="max-width:100%">

                <a href="http://www.webdesignerdepot.com/2017/02/whats-new-for-designers-february-2017/">Source</a><br>
                <a href="https://csspeeper.com/">La page du proget</a>
              </div>
            </div>
          </div>
          <div class="row">
            <h3>Mars 2017</h3>
          </div>
          <div class="row">
            <div class="article-body">
              <button class="btn btn-perso" type="button" data-toggle="collapse" data-target="#collapseV5" aria-expanded="false" aria-controls="collapseExample">
                <img src="https://reflect.io/assets/logo-color-07c58a45ba01bd418f9467eed1d41755.svg" height="30px">
              </button>
              <div class="article-info">
                <h4>Reflect</h4>
                <p>Mars<br>
                  Affichage de données sous forme de graphique
                </p>
              </div>
              <div class="collapse" id="collapseV5">
                <img src="http://netdna.webdesignerdepot.com/uploads/2017/03/reflect.jpg" style="max-width:100%">
                <br><br>
                <a href="https://reflect.io/docs/getting-started/how-it-works"><h4>Comment ca marche ?</h4></a>
                <br>
                <img src="https://reflect.io/assets/marchitecture-b392cf40647fdfa2fa3cd5cf1da00b24.svg" style="background:#F9F9F9;">
                <pre class="code-usage"><code>
                  //API call
                  $ curl -u ':a1b2c3d-your-secure-api-token-4e5f6g7' \
                  -H 'Content-Type: application/json' \
                  'https://api.reflect.io/v1/projects'

                  //project
                  /v1/projects


                  //exemple project object
                  {
                    "name": "Your Project #1",
                    "slug": "your-project-1",
                    "description": "The very first project that you created with the API.",
                    "created_at": "2016-02-04t00:18:07.817442z",
                    "updated_at": "2016-02-07t01:35:22.223042z"
                  }

                  //List All projects
                  GET/v1/projects

                  //Example request and JSON response body
                  $ curl -u ':a1b2c3d-your-secure-api-token-4e5f6g7' \
                  -H 'Content-Type: application/json' \
                  'https://api.reflect.io/v1/projects'

                  //resultat
                  [
                  {
                    "name": "Your Project #1",
                    "slug": "your-project-1",
                    "description": "Your very first project created with the API.",
                    "created_at": "2016-02-04t00:18:07.817442z",
                    "updated_at": "2016-02-07t01:35:22.223042z"
                  }
                  ]
                </code></pre>
                <a href="http://www.webdesignerdepot.com/2017/03/whats-new-for-designers-march-2017/">Source</a><br>
                <a href="https://reflect.io/">La page du proget</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="end">
        <h1 class="title">Conclusion</title>
        </div>
        <footer>
          <div class="container">
            Fait par Aygalic JARA--MIKOLAJCZAK
          </div>
        </footer>
      </body>
      <script src="js/rellax.min.js"></script>
      <script>
      // Also can pass in optional settings block
      var rellax = new Rellax('.rellax', {
        center: true
      });
      </script>
      </html>
