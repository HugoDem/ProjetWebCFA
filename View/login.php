<!doctype html>
<html>

<head>
    <meta charset="utf 8">
    <title>E-sep, ton commerce</title>
    <link rel="stylesheet" type="text/css" href="View/css/Connexion.css" />
</head>

<body>
    <div>
        <h3 class="titre">Connexion</h3>
        <form action="index.php?action=login" method="post">
            <input type="text" name="login" placeholder="Adresse mail">
            <br>
            <input type="password" name="password" placeholder="Mot de passe">
            <br>
            <input type="submit" name="submit" value="Valider">
            <p>Pas encore inscrit ? <a href="index.php?page=inscription">Cliquez ici</a></p>
        </form>
    </div>
</body>

</html>