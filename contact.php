<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Red+Rose:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,100&family=Open+Sans:ital,wght@0,300;1,700&display=swap" rel="stylesheet">
    <script
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("button").click(function(){
    var div = $("div");  
    div.animate({left: '250px'}, "slow");
    div.animate({fontSize: '4em'}, "slow");
    div.animate({opacity:'0.6'}, "slow");
  });
});
</script> 
</head>
<body>
    <section>
        <button>Afficher le formulaire de contact/Voir le retour à l'accueil</button>
        <div style="background:#C0C0C0;height:250px;width:480px;position:absolute;color:white;line-height:2em;">  CONTACTEZ-NOUS!  </div>
      </section>
        <form action="action_page.php">
          <br>
          <br>
        <input type="radio" id="homme" name="gender" value="homme">
        <label for="homme">HOMME</label><br>
        <input type="radio" id="femme" name="gender" value="femme">
        <label for="femme">FEMME</label><br>
        <input type="radio" id="autre" name="gender" value="autre">
        <label for="autre">AUTRE</label>
        <br>
        <br>
        <br>
        <label for="prenom">PRENOM:</label><br>
        <input type="text" id="prenom" name="prenom"><br>
        <br>
        <label for="nom">NOM:</label><br>
        <input type="text" id="nom" name="nom">
        <br><br>
        <br>
        <label for="phone">TELEPHONE:</label>
        <br>
  <input type="tel" id="phone" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"><br><br>
        <br>
        <br>
        <label for="email">EMAIL:</label>
        <br>
  <input type="email" id="email" name="email"><br><br>
        <p>Comment avez-vous connu ce site ?</p>
        <input list="browsers" name="browser">
      <datalist id="browsers">
        <option value="Bouche à oreille">
        <option value="Dinner mondain">
        <option value="Ami(e) haut placé(e)">
        <option value="Via le club de Golf">
        <option value="Recommandation du Président">
        </datalist>
      <br>
        <br>
        <label for="categorie">Choississez la nature de votre demande:</label>
      <select id="categorie" name="categorie">
        <option value="Reclamation">Réclamation</option>
        <option value="Renseignement">Renseignement</option>
        <option value="avis">Donner votre avis</option>
        <option value="autre">Autre</option>
      </select>
        <textarea name="message" rows="10" cols="30"></textarea>
        <br><br>
        <input type="submit">
      </form> 
      <br>
<div>
  <br>
      <a href="index.php" button type="button" class="btn btn-primary btn-sm">Retour à l'accueil</button>
</div>
</body>
</html>
