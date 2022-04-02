<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="shortcut icon" href="img/petition_logo.webp" type="image/png">
    <link rel="stylesheet" href="css/inscriptionStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <a class="accueil" href="index.php"><i class="bi bi-arrow-left"></i></a>
    <div class="center">
        <h2>Inscription</h2>
        <form action="LoginMembre.php" name="f">
            <div class="block_txt">
                <div class="txt">
                    <input type="text" id="nom" required>
                    <span></span>
                    <label>Nom</label>
                </div>
                <div class="txt">
                    <input type="text" id="prenom" required>
                    <span></span>
                    <label>Prénom</label>
                </div>
            </div>
            <div class="txt">
                <input type="email" id="email" required>
                <span></span>
                <label>Email</label>
            </div>
            <div class="block_txt">
                <div class="txt">
                    <input type="password" id="mdp" required>
                    <span></span>
                    <label>Mot de passe</label>
                </div>
                <div class="txt">
                    <input type="Password" id="cmdp" required>
                    <span></span>
                    <label>Confirmation</label>
                </div>
            </div>
            <div class="radio">
                <p>Vous êtes ?</p>
                <input type="radio" id="etd" name="fonct" value="etudiant">
                <label for="etd">étudiant</label><br>
                <input type="radio" id="prof" name="fonct" value="prof">
                <label for="prof">prof</label><br>
                <input type="radio" id="pa" name="fonct" value="pAdmin">
                <label for="pa">personnel administratif</label>
            </div>
            <div class="file">
                <label class="custom-file-upload" id="upl" oninput="file_selected();">
                    <input type="file" id="file">
                    <i class="bi bi-cloud-arrow-up-fill"></i> Photo de profile
                </label>
            </div>
            <input class="btnn" type="submit" onclick="return verif();" value="Enregistrer">
            <input class="btnn" type="reset" onclick="vider_file();" value="Effacer">
        </form>
    </div>
    <?php
    ?>
</body>
<script src="js/inscription.js"></script>
</html>