<?php
session_start();
?>

<head>
<title> Commentaire </title>
<meta charset="UTF-8">
<link rel="icon" type="image/png" href="img/174768.gif" />
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>

<?php
if($_SESSION['admin']=="0"){
?>
<div class="bandos">
  <div class="lanav">


  <img src="logo.png" class="logo" onclick="window.location.href = 'accueil.php';">



    <ul>
      <li> <a href="accueil.php"> Accueil </a> </li>
      <div class="ledropdown">
      <li> <a href="#">   Compte rendu </a> </li>
      <div class="dropdown-content">
      <a href="cr_eleve.php">Ecrire un compte rendu</a>
      <a href="liste_cr.php">Liste des un compte rendu</a>
      </div>
    </div>


      <div class="ledropdown">
      <li> <a href="#">   <?php echo $_SESSION['nom']." " .$_SESSION['prenom'];?> </a> </li>
      <div class="dropdown-content">
      <a href="profil.php">Profil</a>

      <div class="dropdown-divider"></div>
      <a href="deconnexion.php">Deconnexion</a>
      </div>
    </div>
    </ul>
  </div>


<br>
<br>
<br>

<center>


  <label for="inputdate" class="saisir">Profil</label>
  <br>
  <br>
  <div class="card bg-light mb-3" style="max-width: 30rem;">
    <div class="card-header"><?php echo $_SESSION['nom']." " .$_SESSION['prenom'];?></div>

    <div class="card-body">
      <p class="card-text">Adresse : <?php echo $_SESSION['adresse']; ?></p>
      <p class="card-text">Numero de telephone: <?php echo $_SESSION['tel']; ?></p>
      <p class="card-text">Email : <?php echo  $_SESSION['email']; ?></p>
    </div>
  </div>

</center>

<style>
.saisir {
    font-size: 40px;
    font-weight: bold;
    color: #444444;
text-shadow: 1px 0px 1px #CCCCCC, 0px 1px 1px #EEEEEE, 2px 1px 1px #CCCCCC, 1px 2px 1px #EEEEEE, 3px 2px 1px #CCCCCC, 2px 3px 1px #EEEEEE, 4px 3px 1px #CCCCCC, 3px 4px 1px #EEEEEE, 5px 4px 1px #CCCCCC, 4px 5px 1px #EEEEEE, 6px 5px 1px #CCCCCC, 5px 6px 1px #EEEEEE, 7px 6px 1px #CCCCCC;
}
</style>

<?php
 }
else
{
?>
<div class="bandos">
    <div class="lanav">





    <img src="logo.png" class="logo">



      <ul>
        <li> <a href="accueil.php"> Accueil </a> </li>
        <div class="ledropdown">
        <li> <a href="#">   Compte rendu </a> </li>
        <div class="dropdown-content">

        <a href="liste_cr.php">Liste des un compte rendu</a>
        </div>
      </div>
        <li> <a href="commentaire.php"> Commentaire </a> </li>

        <div class="ledropdown">
        <li> <a href="#">   <?php echo $_SESSION['nom']." " .$_SESSION['prenom'];?> </a> </li>
        <div class="dropdown-content">
        <a href="deconnexion.php">Deconnexion</a>
        </div>
      </div>
      </ul>
    </div>



  <center>





  </center>


</div>


<?php
}
?>
<style>
.nom {
  position: absolute;
  right: 3px;
  width: 242px;
  height: 84px;
  top: 20px;
}
</style>

</body>
</html>
