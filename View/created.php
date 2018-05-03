<?php
    session_start();

    include_once("Model/model.php");
    include_once("Model/user.php");

    $user=unserialize($_SESSION['user']);
    if($user){
        $prenom=$user->getFirstName();
        $nom=$user->getName();
    }

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="View/css/Connexion.css">
</head>
<body>
    <div>
        <h3>Vous êtes inscrit !</h3>
        <p>Bienvennue <?php echo $nom; ?> <?php echo $prenom; ?> !<br/>Trouvez dès maintenant le babyfoot de vos rêves !</p>
        <form action="index.php">
        <input type="submit" value="Accéder au site !">
        </form>
    </div>
</body>
</html>