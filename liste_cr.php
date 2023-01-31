<?php
session_start();
?>
<html>
<head>
<title> Liste compte rendu </title>
<meta charset="UTF-8">

<link rel="stylesheet" href="style.css">
<link rel="icon" type="image/png" href="img/174768.gif" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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




  <center>



    <?php
    include '_conf.php';
    if (isset($_POST['contenu']))
    {
            if($connexion = mysqli_connect($serveurBDD, $userBDD, $mdpBDD, $nomBDD))
            {
                             $contenu=$_POST['contenu'];
                             $id=$_SESSION['id'];
                             $date=$_POST['date'];
                             $datecreation=$_POST['date'];
                             $newcontenu=$contenu;

                       $requete2 = "INSERT INTO cr (`contenu`,`date`,`datemodif`,`datecreation`,`titre`,`idutilisateur`) VALUES ('$newcontenu','$date','$datecreation','$datecreation','Compte rendu du $date','$id')";
                        echo "$requete2";

                      if (!mysqli_query($connexion, $requete2))
                      {
                        echo "<br> Erreur : ".mysqli_error($nomBDD)."<br>";
                      }

            }
            else // Mais si elle rate
            {
                echo "Erreur dans le contenu"; // On affiche le message d'erreur
            }
    }


    ?>




  </center>


</div>
<br>
<br>

<center>
  <label for="inputdate" class="listedecr">Liste de compte rendus</label>
  <br>
  <br>




                          <div class="container">
                            <div class="row">

                              <?php //Afficher le cr

                              include '_conf.php';
                                      if($connexion = mysqli_connect($serveurBDD, $userBDD, $mdpBDD, $nomBDD))
                                              {
                                                $id=$_SESSION['id'];
                                       $requete=" SELECT * from cr WHERE idutilisateur = '$id'ORDER BY datecreation DESC";
                                       $resultat = mysqli_query($connexion , $requete);

                                       while($donnees = mysqli_fetch_assoc($resultat))
                                                      {
                                                      ?>



                              <div class="col-sm-4 py-2">
             <div class="card border-danger mb-3">
               <?php $titre = $donnees['titre'];  ?>
               <div class="card-header"><?php echo "$titre";  ?></div>
                 <div class="card-body">

                     <p id="couleur">  <?php
                      $contenu = $donnees['contenu'];
                      $id = $donnees['id'];
                      $date = $donnees['date'];
                      $titre = $donnees['titre'];
                      $datemodif = $donnees['datemodif'];
                      echo "$contenu";
                      echo "<br>";

                      echo "<br>";

                      ?>




                   <p class="card-text"><small class="text-muted">Modifié le <?php  echo  $datemodif;  ?></small></p>
                     <a href="edit.php?edit=<?php echo  $id; ?>" class="btn btn-warning"> Modifier </a>





                   <a name="supprimercr" href="liste_cr.php?delete=<?php echo  $donnees['id']; ?>" class="btn btn-danger" onClick="Message()"> Supprimer  </a>
                   <?php
                   include '_conf.php';
                   if (isset($_GET['delete']))
                   {
                           if($connexion = mysqli_connect($serveurBDD, $userBDD, $mdpBDD, $nomBDD))
                           {

                             $id = $_GET['delete'];



                                      $requete6 = "DELETE FROM cr WHERE cr.id='$id'";






                                     if (!mysqli_query($connexion, $requete6))
                                     {
                                       echo "<br> Erreur : ".mysqli_error($nomBDD)."<br>";

                                     }

                           }

@header("Refresh:0; url=liste_cr.php");


                   }


                   ?>








                   <script type="text/javascript">
                      function Message() {
                          var msg="Votre compte rendu a bien été supprimé !";
                          console.log(msg)
                          alert(msg);
                      }
                   </script>

                 </div>
             </div>
         </div>
       <?php } ?>
       <?php } ?> </p>


                              </div>
                            </div>







<?php //Ne pas toucher  ?>
<style>

#couleur {
  color: black;
}

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
.listedecr {
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


  <center>





  </center>


</div>

<br>
<br>
<center>
  <label for="inputdate" class="listedecr">Liste de compte rendus</label>
  <br>
  <br>
  <br>

<div class="container">
  <div class="row">
<?php //Afficher le cr de tout les èleves pour le prof
include '_conf.php';
        if($connexion = mysqli_connect($serveurBDD, $userBDD, $mdpBDD, $nomBDD))
                {

         $requete=" SELECT * from utilisateur, cr WHERE admin = 0 AND utilisateur.id = cr.idutilisateur ORDER BY datecreation DESC";
         $resultat = mysqli_query($connexion , $requete);

         while($donnees = mysqli_fetch_assoc($resultat))
                        {
                          $contenu = $donnees['contenu'];
                          $titre = $donnees['titre'];
                          $datecreation = $donnees['datecreation'];
                          $idutilisateur = $donnees['idutilisateur'];
                          $nom = $donnees['nom'];
                          $prenom = $donnees['prenom'];
                          $datemodif = $donnees['datemodif'];






?>


         <div class="col-sm-4 py-2">
<div class="card border-danger mb-3">
<?php $titre = $donnees['titre'];  ?>
<div class="card-header">
  <?php echo "$titre";
   echo "<br>";
   echo "de <b> $nom $prenom </b>";  ?></div>
<div class="card-body">

<p id="couleur">  <?php
echo "$contenu";
echo "<br>";


 ?>

<p class="card-text"><small class="text-muted">Modifié le <?php  echo  $datemodif;  ?></small></p>
</div>
</div>
</div>
<?php } ?>
<?php } ?> </p>

</center>

             </div>
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

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
