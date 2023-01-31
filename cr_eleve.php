<?php
session_start();
?>

<head>
<title> Compte rendu </title>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<link rel="icon" type="image/png" href="img/174768.gif" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>


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




  <center>








  </center>


</div>

<br>
<br>
<center>
<div class="compterendu">
<form action="liste_cr.php" method="POST">
  <div class="form-group">
    <label for="inputdate" class="saisir">Saisir une journée</label>
    <br><br>
    <input type="date" name="date" class="form-control" id="inputdate" aria-describedby="emailHelp" placeholder="Enter email" required></p>

<br>
    <textarea name="contenu" placeholder=" Votre compte rendu" rows=10 cols=50 class="input3">   </textarea> <p align="center"></p>
    <button type="submit" class="btn btn-danger" onClick="Messagee()" > Saisir </button>




    <script type="text/javascript">
       function Messagee() {
           var msg="Votre compte rendu a bien été saisi !";
           console.log(msg)
           alert(msg);
       }
    </script>




  </div>
</form>

</div>
</center>



<h1>

</h1>
<br>


<style>
.form-group {
    box-sizing: inherit;
}
.nom {
  position: absolute;
  right: 3px;
  width: 242px;
  height: 84px;
  top: 20px;
}
.compterendu {
    box-sizing: content-box;
  width: 50%;
}
.saisir {
    font-size: 40px;
    font-weight: bold;
    color: #444444;
text-shadow: 1px 0px 1px #CCCCCC, 0px 1px 1px #EEEEEE, 2px 1px 1px #CCCCCC, 1px 2px 1px #EEEEEE, 3px 2px 1px #CCCCCC, 2px 3px 1px #EEEEEE, 4px 3px 1px #CCCCCC, 3px 4px 1px #EEEEEE, 5px 4px 1px #CCCCCC, 4px 5px 1px #EEEEEE, 6px 5px 1px #CCCCCC, 5px 6px 1px #EEEEEE, 7px 6px 1px #CCCCCC;
}
</style>

</body>
</html>
