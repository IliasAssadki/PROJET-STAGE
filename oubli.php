<?php
session_start();
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mot de passe oublié</title>
    <link rel="icon" type="image/png" href="img/174768.gif" />
</head>
<body>
<center>
    <h2>Mot de passe oublié</h2>

<?php
@session_start();
include '_conf.php';
   function Genere_Password($size)
{
  $charachters = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, "a", "b", "c", "d", "e",
                      "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p",
                       "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
  $mdp2="";
  for ($i=0; $i < $size ; $i++)
  {
    $mdp2.= ($i%2) ? strtoupper ($charachters[array_rand($charachters)]) : $charachters[array_rand($charachters)];
  }
  return $mdp2;

}
?>

<center>
<br>
<br>
<head>

   <form action="" method="POST">
        <div class="login">
            <label for="email">email :</label>

            <input type="email" name="email" id="name">
        </div>
        </br>
        <div class="bouton">
        <input type="submit" value='Confirmer !'>
        </div>
    </form>

<?php


?>


     <?php
if (isset($_POST['email']))
{

        if($connexion = mysqli_connect($serveurBDD, $userBDD, $mdpBDD, $nomBDD))
        {

                     $lemail=$_POST['email'];


                //A faire après la sélection BDD
                @$requete="Select * from UTILISATEUR WHERE email = '$lemail'";
                //echo "<hr>$requete<hr>";
                @$resultat = mysqli_query($connexion , $requete);
                $trouve=0;

                while($donnees = mysqli_fetch_assoc($resultat))
                {
                       $login =$donnees['login']; //mettre le nom du champ dans la table
                       $mdp =$donnees['mdp'];
                        $trouve=1;

                }
                if($trouve==1)
                {
                         $newmdp=Genere_Password(10);
                         $newmdp2=md5($newmdp);

                         $to      = $lemail;
                         $subject = 'Mot de passe oublié';
                         $message = 'Voici ton mot de passe : '.$newmdp;
                         $headers = 'From: no-reply@amir.fr' . "\r\n" .
                         'Reply-To: reponse@amir.com' . "\r\n" .
                         'X-Mailer: PHP/' . phpversion();

                         mail($to, $subject, $message, $headers);
                                    echo "Le lien de réinitialisation à été envoyé à : ".$lemail;

                   $requete2 = "UPDATE UTILISATEUR SET mdp = '$newmdp2' WHERE UTILISATEUR.email = '$lemail'";

                  if (!mysqli_query($connexion, $requete2))
                  {
                    echo "<br> Erreur : ".mysqli_error($nomBDD)."<br>";
                  }
                }
                else
                {
                    echo "L'email $lemail n'existe pas dans la BDD";
                }

             }
        else // Mais si elle rate
        {
            echo "erreur de connexion à la BDD..."; // On affiche le message d'erreur
        }

}


?>


            <style>
                body{

    background-color: #fef6f3;
}
#container{
    width:100px;
    margin:0 auto;
    margin-top:10%;
    position:50%;
}


h2{
    text-shadow: 1px 1px 2px blue;
}

/* Bordered form */
form{
    width:27%;
    padding: 20px;
    border: 1px solid #320c7e;
    background: #fff;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);

}
#container h1{
    width: 30%;
    margin: 0 auto;
    padding-bottom: 10px;
}

/* Full-width inputs */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
input[type=submit] {
    background-color: #f70606;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
input[type=submit]:hover {
    background-color: white;
    color: #f70606;
    border: 1px solid #f70606;
}
            </style>
        </form>
        </center>
    </body>
</html>
