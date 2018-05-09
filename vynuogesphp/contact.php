<?php
  include 'includes/connect.php';
?>

<!-- The Modal feedback -->
<div id="id03" class="modal01">
  <span onclick="document.getElementById('id03').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="includes/contact.inc.php">
    <div class="container">
          <label for="name">Vardas</label>
          <input type="text" id="name" name="Vardas" placeholder="Jūsų vardas">
          <label for="email">El. paštas</label>
          <input type="text" id="email" name="email" placeholder="El. paštas">
          <label for="subject">Žinutė</label>
          <textarea id="subject" name="žinutė" placeholder="Jūsų žinutė..." style="height:200px"></textarea>
          <input type="submit" value="Submit">
      </div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>
