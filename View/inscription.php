<!doctype html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="View/css/Connexion.css"/>    
</head>

<body>
    <div>
        <h3 class="titre">Inscription</h3>
        <p id="alert"></p>
        <form action="index.php?action=inscription" method="post" onsubmit="return verify(this)" id="form">
            <input type="text" name="prenom" placeholder=Prénom id="firstname">
            <br>
            <input type="text" name="nom" placeholder="Nom" id="name">
            <br>
            <input type="text" name="mail" placeholder="Mail" id="mail">
            <br>
            <input type="text" name="numero" placeholder="Numéro" id="number">
            <br>
            <input type="password" name="password" placeholder="Mot de passe" id="password">
            <br>
        </form>
        <button onclick="verify()">Valider</button>
        <script type="text/javascript" src="Viex/index.js"></script>
    </div>
</body>

</html>