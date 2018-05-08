<!-- Modal Structure -->
<div id="modal2" class="modal">
 <div class="modal-content">
   <form class="modal-content animate" action="/action_page.php">
     <div class="imgcontainer">
       <img src="img/img_avatar2.png" alt="Avatar" class="avatar">
     </div>

     <div class="container">
       <label for="uname"><b>Vartotojas</b></label>
       <input type="text" placeholder="Vartotojas" name="uname" required>

       <label for="psw"><b>Slaptažodis</b></label>
       <input type="password" placeholder="Slaptažodis" name="psw" required>

       <button type="submit">Prisijungti</button>
       <label>
         <input type="checkbox" checked="checked" name="remember"> Prisiminti mane
       </label>
     </div>

     <div class="container" style="background-color:#f1f1f1">
       <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Atšaukti</button>
       <span class="psw">Pamiršau <a href="#">slaptažodį</a></span>
     </div>
    </form>
   </div>

</div>
