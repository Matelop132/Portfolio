<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/formation.css" rel="stylesheet">
    <title>Projet - Formation</title>
</head>
<body>
    <header>
        <div>
        <!-- <img src="assets/photocv.png" alt="Photo de Matéo Lo Pinto"> -->
         
        <a href="/">Page Général    </a>
        
        </div>
        <div>
            <li>
            <li><a href="/formation">Formation</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/projet">Projets</a></li>
        </div>
    </header>

    <main>
        <h1>Mes diplômes acquéris et en cours d'obtention</h1>
        <div class="slider">
        <input type="radio" name="toggle" id="btn-1" checked>
        <input type="radio" name="toggle" id="btn-2">
        <input type="radio" name="toggle" id="btn-3">

        <div class="slider-controls">
            <label for="btn-1"></label>
            <label for="btn-2"></label>
            <label for="btn-3"></label>
        </div>

        <ul class="slides">
            <li class="slide">
            <div class="slide-content">
                <h2 class="slide-title">Baccalauréat Général - Lycée Vaclav Vaclav </h2>
                <p class="slide-text">Les spécialisatés avec lequelles j'ai passé le bac étaient SES en première, puis Mathématiques et NSI en première et terminale / 2018 - 2021 </p>
                <a href="#" class="slide-link">Learn more</a>
            </div>
            <p class="slide-image">
                <img src="assets/Image_Lycee.png" alt="stuff" width="320" height="240">
            </p>
            </li>
            <li class="slide">
            <div class="slide-content">
                <h2 class="slide-title">BTS SIO - SLAM - EPSI Bordeaux</h2>
                <p class="slide-text">Ceci est ma seconde année en BTS SIO de spécialisation SLAM au sein de l'école d'ingiéneurie Bordeaux Epsi / 2021 - 2023</p>
                <a href="#" class="slide-link">Amazing deal</a>
            </div>
            <p class="slide-image">
                <img src="assets/logo_Epsi_2.png" alt="stuff" width="320" height="240">
            </p>
            </li>
            <li class="slide">
            <div class="slide-content">
                <h2 class="slide-title">Bachelor</h2>
                <p class="slide-text">A la suite de ce BTS, je compte poursuivre cette formation en Bachelor    au sein de l'école d'ingiéneurie Bordeaux Epsi / 2021 - 2023</p>
                <a href="#" class="slide-link">Get started</a>
            </div>
            <p class="slide-image">
                <img src="assets/Image_Bachelor_Info.jpg" alt="stuff" width="320" height="240">
            </p>
            </li>
        </ul>
        </div>
        <h1>Expérience Professionel</h1>
        <div class='experience'>
            <article>
                <h3>Projet Epsi</h3>
                <p> C'est au cours de mon cursus d'apprentissage que j'ai réalisé différents projets. Nous retrouvons des projets de développement Web, de création d'application ou encore diverses choses.</p>
            </article>
            <article class="bordercolo">
                <h3>Stage - PK SHOP</h3>
                <p> Au sein de l'année 2022, j'ai réalisé un stage au sein d'une entreprise E-Commerce nommé PK SHOP dans lequel j'ai réalisé un site internet, et assisté au développement Marketing de cette entreprise en question </p> 
            </article>
            <article>
                <h3>Stage - Compagnie Fiduciaire</h3>
                <p> Dans le seconde année de mon parcours de BTS SIO SLAM, j'ai réalisé un stage au sein de la Compagnie Fiduciaire, cabinet d'expert comptable, où j'ai développé diverses applications.</p>
            </article>
        </div>
    </main>
</body>
</html>