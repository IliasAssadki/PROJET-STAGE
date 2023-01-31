







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




<?php //Revoir  ?>





  </center>


</div>

<br>
<br>
<center>
<div class="compterendu">

  <div class="form-group">
    <label for="inputdate" class="saisir">Modifier votre compte rendu</label>
    <br><br>

    <?php // A revoir  ?>

    <?php //Afficher le cr

    include '_conf.php';
            if($connexion = mysqli_connect($serveurBDD, $userBDD, $mdpBDD, $nomBDD))
                    {
                      $id = $_GET['edit'];
             $requete25=" SELECT * from cr, utilisateur WHERE cr.id = '$id' AND cr.idutilisateur = utilisateur.id ";
             $resultat = mysqli_query($connexion , $requete25);

             while($donnees = mysqli_fetch_assoc($resultat))
                            {

$contenu = $donnees['contenu'];
$id = $donnees['id'];
$date = $donnees['date'];
$titre = $donnees['titre'];


echo "<br>";

?>













  <form method="post">
    <p> <?php echo " Compte rendu du  <b> $date </b>"; ?></p>
    <br>
    <textarea name="nouveaucr" placeholder="" rows=10 cols=50 class="input3" value="modif"> <?php echo $donnees['contenu']; ?> </textarea> <p align="center"></p>
   <input type="submit" name="recuperer" class="btn btn-danger" onClick="Messagee()">
  </form>

  <?php
  include '_conf.php';

echo "$id";





  if (isset($_POST['nouveaucr']))
  {

          if($connexion = mysqli_connect($serveurBDD, $userBDD, $mdpBDD, $nomBDD))
          {
            $id = $_GET['edit'];
            $nvcr = $_POST['nouveaucr'];
            $content = $donnees['contenu'];
            $nouveaucompte = $content;




                     $requete98 = "UPDATE cr SET contenu= '$nvcr', datemodif = DEFAULT WHERE cr.id='$id'";


                    if (!mysqli_query($connexion, $requete98))
                    {
                      echo "<br> Erreur : ".mysqli_error($nomBDD)."<br>";

                    }
                    else {
                      echo "Votre compte rendu s'est bien inséré";

                    }

          }

header('Location: http://localhost/AP-STAGE/liste_cr.php');


  }



  ?>







    <script type="text/javascript">
       function Messagee() {
           var msg="Votre compte rendu a bien été modifié !";
           console.log(msg)
           alert(msg);
       }
    </script>

  <?php  } ?>
  <?php  } ?>


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
