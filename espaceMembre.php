<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Membre</title>
    <link rel="shortcut icon" href="img/petition_logo.webp" type="image/png">
    <link rel="stylesheet" href="css/espaceMemebre.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav>
            <div class="left-nav">
                <a href="#"><img src="img/petition_logo.webp" alt=""></a>
                <ul id="list">
                    <form action="" method="post">
                        <input type="text" class="hide" value="1234" name="code" id="code">
                        <li>
                            <input type="submit" class="sbtn" value="liste des pétitions">
                        </li>
                    </form>
                    <form action="creerPetition.php" method="post">
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
    
    <div class="titre-pt">
        <h2>Liste des pétitions</h2>
    </div>

    <section class="lst-petition">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="img/petition-photo.webp" alt="">
                    <h4>Titre de petition</h4>
                    <p><span>150</span> signatures</p>
                    <p class="petition-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, perspiciatis non, illo, accusantium commodi dolore dolores temporibus veniam reprehenderit in sapiente quo totam id sit sunt minus quae tempore optio quibusdam odio enim cumque asperiores?</p>
                    <div class="flex">
                        <form action="petition.php" method="POST">
                            <input class="hide" name="code" type="text" value="1234">
                            <input type="submit" class="button-81" value="Signer">
                        </form>
                        <form action="petition.php" method="POST">
                            <input class="hide" name="code" type="text" value="1234">
                            <input type="submit" class="button-81" value="S’opposer">
                        </form>
                    </div>
                    <form action="petition.php" method="POST">
                        <input class="hide" name="code" type="text" value="1234">
                        <input type="submit" class="btnn" value="Voir Plus">
                    </form>
                </div>
                <div class="col">
                <img src="img/petition-photo.webp" alt="">
                    <h4>Titre de petition</h4>
                    <p><span>150</span> signatures</p>
                    <p class="petition-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, perspiciatis non, illo, accusantium commodi dolore dolores temporibus veniam reprehenderit in sapiente quo totam id sit sunt minus quae tempore optio quibusdam odio enim cumque asperiores?</p>
                    <div class="flex">
                        <form action="petition.php" method="POST">
                            <input class="hide" name="code" type="text" value="1234">
                            <input type="submit" class="button-81" value="Signer">
                        </form>
                        <form action="petition.php" method="POST">
                            <input class="hide" name="code" type="text" value="1234">
                            <input type="submit" class="button-81" value="S’opposer">
                        </form>
                    </div>
                    <form action="petition.php" method="POST">
                        <input class="hide" name="code" type="text" value="1234">
                        <input type="submit" class="btnn" value="Voir Plus">
                    </form>
                </div>
                <div class="col">
                <img src="img/petition-photo.webp" alt="">
                    <h4>Titre de petition</h4>
                    <p><span>150</span> signatures</p>
                    <p class="petition-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, perspiciatis non, illo, accusantium commodi dolore dolores temporibus veniam reprehenderit in sapiente quo totam id sit sunt minus quae tempore optio quibusdam odio enim cumque asperiores?</p>
                    <div class="flex">
                        <form action="petition.php" method="POST">
                            <input class="hide" name="code" type="text" value="1234">
                            <input type="submit" class="button-81" value="Signer">
                        </form>
                        <form action="petition.php" method="POST">
                            <input class="hide" name="code" type="text" value="1234">
                            <input type="submit" class="button-81" value="S’opposer">
                        </form>
                    </div>
                    <form action="petition.php" method="POST">
                        <input class="hide" name="code" type="text" value="1234">
                        <input type="submit" class="btnn" value="Voir Plus">
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <img src="img/petition-photo.webp" alt="">
                    <h4>Titre de petition</h4>
                    <p><span>150</span> signatures</p>
                    <p class="petition-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, perspiciatis non, illo, accusantium commodi dolore dolores temporibus veniam reprehenderit in sapiente quo totam id sit sunt minus quae tempore optio quibusdam odio enim cumque asperiores?</p>
                    <div class="flex">
                        <form action="petition.php" method="POST">
                            <input class="hide" name="code" type="text" value="1234">
                            <input type="submit" class="button-81" value="Signer">
                        </form>
                        <form action="petition.php" method="POST">
                            <input class="hide" name="code" type="text" value="1234">
                            <input type="submit" class="button-81" value="S’opposer">
                        </form>
                    </div>
                    <form action="petition.php" method="POST">
                        <input class="hide" name="code" type="text" value="1234">
                        <input type="submit" class="btnn" value="Voir Plus">
                    </form>
                </div>
                <div class="col">
                <img src="img/petition-photo.webp" alt="">
                    <h4>Titre de petition</h4>
                    <p><span>150</span> signatures</p>
                    <p class="petition-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, perspiciatis non, illo, accusantium commodi dolore dolores temporibus veniam reprehenderit in sapiente quo totam id sit sunt minus quae tempore optio quibusdam odio enim cumque asperiores?</p>
                    <div class="flex">
                        <form action="petition.php" method="POST">
                            <input class="hide" name="code" type="text" value="1234">
                            <input type="submit" class="button-81" value="Signer">
                        </form>
                        <form action="petition.php" method="POST">
                            <input class="hide" name="code" type="text" value="1234">
                            <input type="submit" class="button-81" value="S’opposer">
                        </form>
                    </div>
                    <form action="petition.php" method="POST">
                        <input class="hide" name="code" type="text" value="1234">
                        <input type="submit" class="btnn" value="Voir Plus">
                    </form>
                </div>
                <div class="col">
                <img src="img/petition-photo.webp" alt="">
                    <h4>Titre de petition</h4>
                    <p><span>150</span> signatures</p>
                    <p class="petition-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, perspiciatis non, illo, accusantium commodi dolore dolores temporibus veniam reprehenderit in sapiente quo totam id sit sunt minus quae tempore optio quibusdam odio enim cumque asperiores?</p>
                    <div class="flex">
                        <form action="petition.php" method="POST">
                            <input class="hide" name="code" type="text" value="1234">
                            <input type="submit" class="button-81" value="Signer">
                        </form>
                        <form action="petition.php" method="POST">
                            <input class="hide" name="code" type="text" value="1234">
                            <input type="submit" class="button-81" value="S’opposer">
                        </form>
                    </div>
                    <form action="petition.php" method="POST">
                        <input class="hide" name="code" type="text" value="1234">
                        <input type="submit" class="btnn" value="Voir Plus">
                    </form>
                </div>
            </div>
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