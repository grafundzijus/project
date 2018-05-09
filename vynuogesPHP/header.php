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
      <link rel="stylesheet" href="css/store.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <nav>
        <div class="nav-wrapper purple lighten-3">
          <a href="#!" class="brand-logo"><img src="img/vynuoges-logo-214x67.png" alt=""> </a>
          <a href="#!" data-target="mobile-demo" class="sidenav-trigger"><img src="img/vynuoges-logo-214x67.png" alt=""><i class="material-icons"></i></a>
          <ul class="right hide-on-med-and-down">
            <li> <a href="index.php">Pagrindinis</a></li>
            <li> <a href="store.php">Parduotuvė</a></li>
            <li> <button onclick="document.getElementById('id01').style.display='block'">Prisijungti</button></li>
            <li> <button onclick="document.getElementById('id02').style.display='block'">Registruotis</button></li>
          </ul>
        </div>
      </nav>

      <ul class="sidenav" id="mobile-demo">
        <li> <a href="index.php">Pagrindinis</a></li>
        <li> <a href="store.php">Parduotuvė</a></li>
        <li> <button onclick="document.getElementById('id01').style.display='block'">Prisijungti</button></li>
        <li> <button onclick="document.getElementById('id02').style.display='block'">Registruotis</button></li>
      </ul>
