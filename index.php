<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pétitions</title>
    <link rel="shortcut icon" href="img/petition_logo.webp" type="image/png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <!--HEADER-->

    <header>
        <nav>
            <div class="left-nav">
                <a href="#"><img src="img/petition_logo.webp" alt=""></a>
                <ul id="list">
                    <a href="#"><li>link1</li></a>
                    <a href="#"><li>link2</li></a>
                    <a href="#"><li>link3</li></a>
                    <a href="#"><li>link4</li></a>
                </ul>
            </div>
            <div class="right-nav">
                <a href="#"><button class="btnn-c">Connecter</button></a>
                <div class="social">
                    <a href="#"><i class="bi bi-github"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
                <a href="#" onclick="togglemenu();"><i class="bi bi-list"></i></a>
            </div>                 
        </nav>

        <div id="slider">
            <div class="contenu">
                <h2><span>GESTION </span>DES<span> PETITIONS</span></h2>
                <p>Déjà 227 763 357 signatures</p>
                <button type="button" class="btn btn-outline-light">Lancer une Pétition</button>
            </div>   
            <figure>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </figure>
        </div>
    </header>

    <!--QOUTE SECTION-->
    
    <section id="qoute">
        <div class="contenu-qo">
            <img src="img/quote.webp" alt="">
            <h3>to improve is to <b><font color="#f44336">change</font></b>; to be perfect is to <b><font color="#f44336">change</font></b> often</h3>
        </div>
    </section>
    
</body>
<script src="toggleMenu.js"></script>
</html>