<?php
  include 'includes/connect.php';
?>

<!-- The Modal (contains the Sign Up form) -->
<div id="id02" class="modal01">
  <span onclick="document.getElementById('id02').style.display='none'"
  class="close" title="Close Modal">&times;</span>
    <form class="modal-content animate" action="includes/signup.inc.php" method="post">
      <div class="container">
        <h5>Registruotis</h5>

        <hr>
        <label for="email"><b>El. paštas</b></label>
        <input type="text" placeholder="įveskit el. paštą" name="email" required>

        <label for="psw"><b>Slaptažodis</b></label>
        <input type="password" placeholder="Įveskit slaptažodį" name="pwd" required>

        <label for="psw-repeat"><b>Pakartokit slaptažodį</b></label>
        <input type="password" placeholder="Pakartotit slaptažodį" name="pwd-repeat" required>

        <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px">  <span>Prisiminti mane</span>
        </label>

        <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signup">Patvirtinti</button>
        </div>
      </div>
    </form>
</div>
