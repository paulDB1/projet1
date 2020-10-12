<!DOCTYPE html>
<html>
  <head>
  <link type="text/css" rel="stylesheet" href="style.css" />
  <link href="normalize.css" rel="style.css"/>
    <title></title>
    <script language="javascript">
  /* pop up un sur deux */
  function afficheMessage() {
  var rep=confirm('Nous enregistrons toutes vos données personnelles, numéros CB, communications et codes confidentiels, tous ce qui est possible');
  if (rep==true) {
  alert('merci');
  } else {
  alert('Oh, c\'est dommage !');
  }
  }
  /* pop up un sur deux */
  </script>

  </head>
        <body>
          <!-- pop up deux sur deux -->
      <div style="text-align:center; font-size:25px;" > Informations Cookies :<br>

      <input type="button" value="Cliquer" onClick="afficheMessage()"></div>
      <!-- pop up deux sur deux -->
        <main>
        <div class="bloc1">THEME 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</div>
        <div class="interligne1"></div>
        <div class="bloc1">THEME 2 Lorem ipsum dolor sit amet, a consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</div>
        <div class="interligne1"></div>
        <div class="bloc1">THEME 3 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</div>
        <div class="interligne1"></div>
        <div class="bloc1">THEME 4 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</div>
        </main>

      <footer>
      <div class="pagination">
        <a class="active" href="articles.php">1</a>
        <a href="articles2sur4.php">2</a>
        <a href="articles3sur4.php">3</a>
        <a href="articles4sur4.php">4</a>

      </div>
      <a href="index.php" button type="button" class="btn btn-primary btn-sm">Retour à l'accueil</button></a>
      </footer>


      </body>
</hmtl>