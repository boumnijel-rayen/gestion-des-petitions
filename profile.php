<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="shortcut icon" href="img/petition_logo.webp" type="image/png">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav>
            <div class="left-nav">
                <a href="#"><img src="img/petition_logo.webp" alt=""></a>
                <ul id="list">
                    <form action="espaceMembre.php" method="post">
                        <input type="text" class="hide" value="1234" name="code" id="code">
                        <li>
                            <input type="submit" class="sbtn" value="liste des pétitions">
                        </li>
                    </form>
                    <form action="" method="post">
                        <input type="text" class="hide" name="code" id="code">
                        <li>
                        <input type="submit" class="sbtn" value="profile">
                        </li>
                    </form>
                </ul>
            </div>
            <div class="right-nav">
                <img src="img/IMG_0130.webp" alt="">
                <ul>
                    <li>9999</li>
                    <li>Nom & Prenom</li>
                </ul>
                <a href="#" onclick="togglemenu();"><i class="bi bi-list"></i></a>
            </div>                 
        </nav>
    </header>
    
    <section id="profile" class="center">
        <h2>Modifier votre profile</h2>
        <form action="" method="post">
            <div class="block_txt">
                <div class="txt">
                    <input type="text" value="rayen" name="nom" id="nom" required>
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
                <input type="text" value="rayen" id="email" required>
                <span></span>
                <label>Email</label>
            </div>
            <div class="block_txt">
                <div class="txt">
                    <input type="text" id="mdp" required>
                    <span></span>
                    <label>Mot de passe</label>
                </div>
                <div class="txt">
                    <input type="text" id="cmdp" required>
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
                    <input type="text" class="hide" name="image" id="image">
                    <input type="file" id="file">
                    <i class="bi bi-cloud-arrow-up-fill"></i> Photo de profile
                </label>
            </div>
            <input type="submit" class="btnn" onclick="return verif();" value="Modifier">
        </form> 
    </section>


    <?php
    ?>
</body>
<script src="js/inscription.js"></script>
<script src="js/toggleMenu.js"></script>
</html>