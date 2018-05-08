<?php
    session_start();
?>
<!DOCTYPE html>
  <html>
    <head>
      <title>Pagrindinis</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="css/master.css">



      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

<nav>
  <div class="nav-wrapper purple lighten-3">
    <a href="#!" class="brand-logo"><img src="img/vynuoges-logo-214x67.png" alt=""> </a>
    <a href="#!" data-target="mobile-demo" class="sidenav-trigger"><img src="img/vynuoges-logo-214x67.png" alt=""><i class="material-icons"></i></a>
    <ul class="right hide-on-med-and-down">
      <li> <a href="index.html">Pagrindinis</a></li>
      <li> <a href="about.html">Apie</a></li>
      <li> <a href="#">Patarimai</a></li>
      <li> <a href="galery.html"> Galerija</a>  </li>
      <li> <a href="#">Parduotuvė</a></li>
      <li> <button data-target="modal2" class="btn modal-trigger">Prisijungti</button></li>
    </ul>
  </div>
</nav>

<ul class="sidenav" id="mobile-demo">
  <li> <a href="index.html">Pagrindinis</a></li>
  <li> <a href="about.html">Apie</a></li>
  <li> <a href="#">Patarimai</a></li>
  <li> <a href="galery.html"> Galerija</a></li>
  <li> <a href="#">Parduotuvė</a></li>
  <li> <button data-target="modal2" class="btn modal-trigger">Prisijungti</button></li>
</ul>
