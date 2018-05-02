<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="View/css/style.css">
</head>

<body>
    <header>
        <img id="couv" src="View/images/couv.jpg">
    </header>
    <navbar>
        <a href="index.php?page=login" title="Se connecter">Se connecter</a>
        <a href="index.php?page=inscription" title="Plus beaucoup de place!!">S'inscrire</a>
    </navbar>
    <panier>
        <imagepan>
            <a href="View/monpanier.php">
                <img src="View/images/panier.jpg" width="50px" height="50px">
            </a>
        </imagepan>
        <nompan>
            Panier
        </nompan>
    </panier>
    <article>
    <?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=projetwebcfa;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}


$reponse = $bdd->query('SELECT * FROM article');


while ($donnees = $reponse->fetch())
{
?>

    <p>
    <strong>Nom</strong> : <?php echo $donnees['nom']; ?><br />
    Le prix est de :<?php echo $donnees['prix']; ?> euros <br />
    <?php echo $donnees['description']; ?><br />
    </em>
    <img src='<?php echo $donnees['photo'];?>' />
    

   </p>


<?php
}



$reponse->closeCursor(); // Termine le traitement de la requête

?>
    </article>
</body>
</html>