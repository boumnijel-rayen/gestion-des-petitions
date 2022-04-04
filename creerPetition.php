<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>creer une pétition</title>
    <link rel="shortcut icon" href="img/petition_logo.webp" type="image/png">
    <link rel="stylesheet" href="css/creerPetition.css">
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
                        <input type="text" class="hide" value="1234" name="code" id="code">
                        <li>
                            <input type="submit" class="sbtn" value="créer une pétition">
                        </li>
                    </form>
                    <form action="profile.php" method="post">
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

    <section id="creer">
        <div class="center">
            <h3>Création d'une pétition</h3>
            <form action="" method="post">
                <div class="txt">
                    <label for="titre" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="titre" placeholder="Titre de la pétition">
                </div>
                <div class="txt">
                    <label for="text-ex" class="form-label">Text explicatif</label>
                    <textarea class="form-control" id="text-ex" rows="3"></textarea>
                </div>
                <div class="txt">
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control form-control-sm" id="image" type="file">
                </div>
                <input class="btnn" type="submit" value="créer">
            </form>
        </div>
    </section>

    <footer>
        <ul>
            <li><a href="https://github.com/boumnijel-rayen" target="_blank"><i class="bi bi-github"></i></a></li>
            <li><a href="https://www.facebook.com/rayen.boumnijel/" target="_blank"><i class="bi bi-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/Rayen_boumnijel/?fbclid=IwAR2P8HQ-dnGLlI8Ahn3OSq1xIqW662KvAV2NWMcOs61ixz7QiAtpFAOH24o" target="_blank"><i class="bi bi-instagram"></i></a></li>
            <li><a href="https://www.linkedin.com/in/rayen-boumnijel-3774b91b7/" target="_blank"><i class="bi bi-linkedin"></i></a></li>
        </ul>
        <p>Copyright ©2022 Boumnijel Rayen, all rights reserved</p>
    </footer>
    <?php
    ?>
</body>
<script src="js/toggleMenu.js"></script>
</html>