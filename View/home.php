<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="View/css/style.css">
</head>

<body>
    <header>

    </header>
    <navbar>
            <ul>
                <li><a id="connecter" href="index.php?page=login" title="Connexion">Se connecter</a></li>
                <li><a id="inscrire" href="index.php?page=inscription" title="Plus beaucoup de place!!">S'inscrire</a></li>
                <li style="float:right"><a id="nompan" href="index.php?page=monpanier">Panier</a></li>
            </ul>
            
        </navbar> 
    
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