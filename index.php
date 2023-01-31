<?php
include '_conf.php';
session_start();
if($bdd = mysqli_connect($serveurBDD, $userBDD, $mdpBDD, $nomBDD))
{
    //Si connexion est réussi


?>



<?php
}
else // Mais si elle rate
{
    echo "erreur..."; // On affiche le message d'erreur
}

?>
<head>
<title> Connexion </title>
<link type="text/css" rel="stylesheet" href="style.css">
<link rel="icon" type="image/png" href="img/174768.gif" />
</head>
<body>
 <br>
 <br>
 <br>

        <center>
         <form action="connexion.php" method="POST">
                <h1>Connexion</h1>
                <br>

                <label><b>Identifiant</b></label>
                <input type="text" placeholder="Entrer votre identifiant" name="login" required>
                <br>
                <br>
                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                <br>
                <br>
                <a href="oubli.php">Mot de passe oublié ?</a>
                <br>
                <br>
                <input type="submit" id='login' value='LOGIN' >

                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>

            </form>
            <style>
            body{
    background: #f9f4f3;
}
#container{
    width:100px;
    margin:0 auto;
    margin-top:10%;
    position:50%;
}
/* Bordered form */
form {
    width:30%;
    padding: 30px;
    border: 1px solid #320c7e;


    background: #fff;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);

}
#container h1{
    width: 38%;
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
    background-color: #EC0C0C;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
input[type=submit]:hover {
    background-color: white;
    color: #53af57;
    border: 1px solid #EC0C0C;
}


</style>
</center>
            </body>
