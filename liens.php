<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="style.css" />
<link href="normalize.css" rel="style.css"/>
<link href="https://fonts.googleapis.com/css2?family=Amiri&family=Hind+Madurai:wght@300&display=swap" rel="stylesheet">
  <title></title>
  <script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
</head>
  <body>
    <div class="liens1">
    <br>
    <div id="demo_liens">
    <button type="button" onclick="loadDoc()">Cliquez-ici pour le site officiel du Gouvernement</button>
    </div>
    
    <script>
    function loadDoc() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("demo_liens").innerHTML =
          this.responseText;
        }
      };
      xhttp.open("GET", "ajax_liens.txt", true);
      xhttp.send();
    }
    </script>
    <br>
    <p>Quelques liens utiles, complémentaires :
    </p>
    <br>
    <br>
    <a href="https://www.paris.fr/">Le site officiel de la Ville de Paris</a><br><br>
    <a href="https://www.lyon.fr/">Le site officiel de la Ville de Lyon</a><br><br>
    <a href="https://www.marseille.fr/">Le site officiel de la Ville de Marseille</a><br><br>
    <a href="https://www.toulouse.fr/">Le site officiel de la Ville de Toulouse</a><br><br>
    <a href="https://www.nice.fr">Le site officiel de la Ville de Nice</a><br><br>
    <a href="https://metropole.nantes.fr/">Le site officiel de la Ville de Nantes</a><br><br>
    <a href="https://www.strasbourg.fr">Le site officiel de la Ville de Strasbourg</a><br><br>
    <a href="https://www.montpellier.fr">Le site officiel de la Ville de Montpellier</a><br><br>
    <a href="https://www.bordeaux.fr">Le site officiel de la Ville de Bordeaux</a><br><br>
    <a href="https://metropole.rennes.fr/">Le site officiel de la Ville de Rennes</a><br><br>
    </div>
    <a href="index.php" button type="button" class="btn btn-primary btn-sm">Retour à l'accueil</button></a>
    <br>
    <br>
    <body onload="startTime()">

<div id="txt"></div>
  </body>
</hmtl>
