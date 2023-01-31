<?php
@session_start();
include'_conf.php';
if(@$connexion)
{
$mdp1 = md5($mdp);
$requete="Select * from UTILISATEUR where login='".$_SESSION['login']."' AND mdp='".$_SESSION['password']."'";
if ($resultat = mysqli_query($connexion, $requete))
{
$resultat = mysqli_query($connexion, $requete);
$get=mysqli_fetch_assoc($resultat);
$nbligne= mysqli_num_rows ($resultat);


    if($nbligne==1){
                          }
            else{

                header('Location: index.php');
                }
}
}

?>
