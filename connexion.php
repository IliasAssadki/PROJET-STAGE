<?php
ob_start();
session_start();
include '_conf.php';
//si on a cliqué sur le bouton connexion
if (isset($_POST["login"]) AND isset($_POST["login"]))
{
$login = $_POST['login'];
$mdp = $_POST['password'];
    $_SESSION['login'] = $login;

}
   $mdp1 = md5($mdp);
// on se connecte à MySQL
if($connexion = mysqli_connect($serveurBDD, $userBDD, $mdpBDD, $nomBDD))
{
$requete="Select * from UTILISATEUR where login='$login' AND mdp='$mdp1'";
if ($resultat = mysqli_query($connexion, $requete))
{
$resultat = mysqli_query($connexion, $requete);
$get=mysqli_fetch_assoc($resultat);
$nbligne= mysqli_num_rows ($resultat);
   if($nbligne==1){

$_SESSION['id']=$get['id'];
$_SESSION['email']=$get['email'];
$_SESSION['password']=$get['mdp'];
$_SESSION['admin']=$get['admin'];
$_SESSION['login']=$get['login'];
$_SESSION['nom']=$get['nom'];
$_SESSION['prenom']=$get['prenom'];
$_SESSION['adresse']=$get['adresse'];
$_SESSION['tel']=$get['tel'];



header('Location: accueil.php');
                          }
            else{

                echo"Connexion refusée";
                }
}
else
{

echo "<br>Erreur SQL : ".mysqli_error($connexion)."<br>";
}

//on oublie pas de fermer la connexion
mysqli_close($connexion);

}
else // Mais si elle rate
{
echo 'Erreur connexion BDD'; // On affiche un message d'erreur
}

?>
