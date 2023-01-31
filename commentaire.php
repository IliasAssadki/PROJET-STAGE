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
        <li> <a href="commentaire.php"> Commentaire </a> </li>

        <div class="ledropdown">
        <li> <a href="#">   <?php echo $_SESSION['nom']." " .$_SESSION['prenom'];?> </a> </li>
        <div class="dropdown-content">
        <a href="profil.php">Profil</a>
        <a href="stage.php">Stage</a>
        <div class="dropdown-divider"></div>
        <a href="deconnexion.php">Deconnexion</a>
        </div>
      </div>
      </ul>
    </div>


</div>


<br>
<br>
<br>
<center>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="..." alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <br>
        <p class="card-text">Adresse : </p>
        <p class="card-text">Numero de telephone : </p>
        <p class="card-text">Adresse email : </p>

        <p class="card-text"><small class="text-muted">Cliquez <a href="#"> ici</a> pour acceder aux informations de stage</small></p>
      </div>
    </div>
  </div>
</div>

</center>



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
