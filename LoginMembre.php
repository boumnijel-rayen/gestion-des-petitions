<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="shortcut icon" href="img/petition_logo.webp" type="image/png">
    <link rel="stylesheet" href="css/loginStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <a class="accueil" href="index.php"><i class="bi bi-arrow-left"></i></a>
    <div class="center">
        <h2>Connexion</h2>
        <form method="post" action="espaceMembre.php">
            <div class="txt">
                <input type="text" required>
                <span></span>
                <label>Email</label>
            </div>
            <div class="txt">
                <input type="password" required>
                <span></span>
                <label>Mot de passe</label>
            </div>
            <input class="btnn" type="submit" value="se connecter">
            <div class="signup">
            Vous n'avez pas de compte? <a href="inscription.php">S'inscrire</a>
            </div>
        </form>
    </div>
    <?php
    ?>
</body>
</html>