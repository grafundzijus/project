<?php
  include 'includes/connect.php';
 ?>
 <!-- The Modal login -->
 <div id="id01" class="modal01">
  <span onclick="document.getElementById('id01').style.display='none'"
 class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="includes/login.inc.php" method="post">


    <div class="container">
      <label for="email"><b>El. paštas</b></label>
      <input type="text" placeholder="Įveskite el. paštą" name="email" required>

      <label for="psw"><b>Slaptažodis</b></label>
      <input type="password" placeholder="Įveskite slaptažodį" name="psw" required>

      <button type="submit">Prisijungti</button>
      <label>
       <input type="checkbox" checked="checked" name="remember">
       <span>Prisiminti mane</span>
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Pamiršau <a href="#">slaptažodį</a></span>
    </div>
  </form>
 </div>
