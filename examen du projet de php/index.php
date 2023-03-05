<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets/style/logsign.css">
    <title>Document</title>
</head>


<body>
    <div class="Menu">
        <img src="./Assets/img/logo.png" alt="" height="48px" style="margin-left:15px;margin-top:2px">
    </div>
    <div id="log">
        <p id="connexion">Connexion</p>
        <form action="" method="post">
            <div class="form">
                <input type="text" placeholder="Email" name="email" required>
                <input type="password" placeholder="Mots de passe" name="mdp" required>
                <p class="erreur"> <?php if (isset($e)) {
                                        echo $e;
                                    } ?></p>

                <button id="btn" type="submit" name="valider"> Se connecter</button>
                <p id="sinscrire"><span>Avez-vous un compte?
                        <a href="./Signup.php"> <span
                                style="text-decoration-line: underline;color: black;font-weight: 900;cursor: pointer;">
                                <br> S’inscrire</span></a></span></p>
            </div>
        </form>

    </div>

</body>

</html>