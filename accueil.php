<?php
session_start();
include'_getinfo.php';
?>




<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<title> Accueil </title>
</head>


<body>
<?php
if($_SESSION['admin']=="0"){
?>

<div class="ban">
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



  <div class="texteaccueil">
    <h1>Bienvenue sur notre site</h1>
    <p>Ici, vous pourrez inscrire vos comptes rendus journaliers de stage, y acceder, <br> et même les modifier.</p>
    <br>
  <div>
    <button type="button" class="btn btn-danger" onclick="window.location.href = 'cr_eleve.php';">Ecrivez votre premier compte rendu </button>
  </div>
  </div>



</div>




<?php
 }
else
{
?>
<div class="ban">
    <div class="lanav">


    <img src="logo.png" class="logo" onclick="window.location.href = 'accueil.php';">



      <ul>
        <li> <a href="accueil.php"> Accueil </a> </li>
        <div class="ledropdown">
        <li> <a href="#">   Compte rendu </a> </li>
        <div class="dropdown-content">

        <a href="liste_cr.php">Liste des un compte rendu</a>
        </div>
      </div>


        <div class="ledropdown">
        <li> <a href="#">   <?php echo $_SESSION['nom']." " .$_SESSION['prenom'];?> </a> </li>
        <div class="dropdown-content">
        <a href="deconnexion.php">Deconnexion</a>
        </div>
      </div>
      </ul>
    </div>



  <div class="texteaccueil">
    <h1>Bienvenue sur notre site</h1>
    <p>Ici, vous pourrez acceder aux comptes rendus journaliers de stage des élèves.</p>
    <br>
  <div>
    <button type="button" class="btn btn-danger" onclick="window.location.href = 'liste_cr.php';">Liste des comptes rendus </button>
  </div>
  </div>



</div>

<?php
}
?>











<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>
