<?php
    include_once 'header.php';
?>

<body>

  <div class="parallax-container">
    <div class="parallax"><img src="img/grape.jpg"></div>
  </div>
  <div class="section white">
    <div class="row container">
      <h2 class="header">Kodėl pirkti iš mūsų?</h2>
      <p class="grey-text text-darken-3 lighten-3">1. Mes patys esame vynuogių augintojai ir vyndariai mėgėjai. Prižiūrime savo du vynuogynus, kuriuose nuo 2006 metų išbandėme daugiau kaip 200 desertinių ir vyninių vynmedžių veislių. Atrinkome ir savo klientams siūlome tik skaniausias ir labiausiai tinkančias auginti Lietuvoje veisles.</p>
      <p>2. Savo vynmedžių kolekciją nuolat papildome perspektyviomis naujienomis.</p>
      <p>3. Sodinukus parduodame tik aukščiausios kokybės, su augalų pasais, sodinukus auginame patys arba imame tik iš patikrintų ir patikimų partnerių.</p>
      <p>4. Mums rūpi kaip Jums sekasi auginti vynmedžius, todėl skelbiame straipsnius savo puslapyje (skyr. "Patarimai") apie vynmedžių auginimą ir visada mielai patariame dėl jų priežiūros.</p>
      <p>5. Jums nebūtina niekur važiuoti, tiesiog pasirinkite mūsų el. parduotuvėje patikusias veisles, o sodinukus Jums atveš į namus kurjeris, tada kai bus laikas juos sodinti (balandžio pab. - gegužės pradž.).</p>
    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="img/grape.jpg"></div>
  </div>

   <!-- Modal Structure -->
   <div id="modal1" class="modal">
     <div class="modal-content">
       <h4>Rašykite mums</h4>
       <div class="row">
         <form class="col s12">
           <div class="row">
             <div class="input-field col s6">
               <input id="first_name" type="text" class="validate">
               <label for="first_name">Vardas</label>
             </div>
             <div class="input-field col s6">
               <input id="last_name" type="text" class="validate">
               <label for="last_name">Pavardė</label>
             </div>
           </div>
           <div class="row">
             <div class="input-field col s12">
               <input id="email" type="email" class="validate">
               <label for="email">Email</label>
             </div>
           </div>
           <div class="row">
              <form class="col s12">
                <div class="row">
                  <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <label for="textarea1">Tekstas</label>
                  </div>
                </div>
              </form>
            </div>
         </form>
       </div>
     </div>
     <div class="modal-footer">
       <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Siųsti</a>
     </div>
   </div>
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
    <div class="modal-footer">

    </div>
  </div>



  <script src="js/jquery-3.3.1.js" charset="utf-8"></script>
  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript">
  $('.sidenav').sidenav();
  $('.parallax').parallax();
  $('.modal').modal();
  $('#textarea1').val('New Text');
    M.textareaAutoResize($('#textarea1'));

<?php
    include_once 'footer.php';
?>
