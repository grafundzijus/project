$("button").click(function()){
  var mygtukoReiksme = $(this).text();
    if (mygtukoReiksme != "=") {
      var result = $("#result").val();
      $("#result").val(result + mygtukoReiksme);
    }
    else {
      var apskaiciuota = eval($("#result").val());
      $("#result").val(apskaiciuota);
    }
  });

$("#reset").click(funkcion()){
    var trintukas =

  }
