<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pétition</title>
    <link rel="shortcut icon" href="img/petition_logo.webp" type="image/png">
    <link rel="stylesheet" href="css/petition.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php
    ?>
    <section id="petition">
        <div class="container">
            <div class="row">
                <div class="col-4 coll">
                    <img src="img/petition-photo.webp" alt="">
                    <h4><span class="vert">150</span> signatures</h4>
                    <h4><span class="rouge">20</span> opposition</h4>
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
                </div>
                <div class="col-8 coll">
                    <h2>titre de pétition</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi pariatur voluptates atque aliquid eligendi excepturi ex quo? Eos quo perspiciatis aut aliquid voluptates, veritatis aliquam fugit beatae asperiores, consequatur fugiat dolores maxime cupiditate saepe quaerat.</p>
                    <form action="" method="post">
                        <label for="comnt" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="comnt" rows="3"></textarea>
                        <input type="submit" class="btn btn-success" value="commenter">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <section id="comnts">
        <div class="container">
        <h3>Commentaires</h3>
            <div class="row">
                <div class="col-2 coll">
                    <img src="img/IMG_0130.webp" alt="">
                </div>
                <div class="col-10 coll">
                    <h5>nom & prénom</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat at neque voluptate.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-2 coll">
                    <img src="img/IMG_0130.webp" alt="">
                </div>
                <div class="col-10 coll">
                    <h5>nom & prénom</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat at neque voluptate.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-2 coll">
                    <img src="img/IMG_0130.webp" alt="">
                </div>
                <div class="col-10 coll">
                    <h5>nom & prénom</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat at neque voluptate.</p>
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
</body>
</html>