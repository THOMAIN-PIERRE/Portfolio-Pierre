<?php

echo "<pre>";

print_r($_POST);

echo '</pre>';

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Pierre</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cv.css">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2ccf28a59c.js" crossorigin="anonymous"></script>
    <!-- We will use a bulletproof solution for schema validation – https://validatejs.org/. For simplicity, just add a library from a CDN-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
</head>
<body>
    
    <!-- Btn flottant gauche petit menu -->

    <div class="btn-rond-menu">
        <div class="cont-ligne">
            <div class="ligne-unique"></div>
        </div>
    </div>

    <!-- Navigation verticale -->

    <!-- <nav class="nav-gauche">

        <div class="blocs-menu">
            <div class="cercle-portrait">
                <img src="https://i.ibb.co/pd4kD8L/Photo-Pierre.png" alt="photo Pierre" style="border-radius: 50%;">
            </div>
        </div>

        <div class="blocs-menu">
            <span class="nav-menu-item">
                <a href="#accueil"><i class="fas fa-home"></i> 
                    Accueil
                </a>
            </span>
        </div>
        <div class="blocs-menu">
            <span class="nav-menu-item">
                <a href="#pres"><i class="fas fa-user"></i> 
                    Présentation
                </a>
            </span>
        </div>
        <div class="blocs-menu">
            <span class="nav-menu-item">
                <a href="#port"><i class="fas fa-wrench"></i> 
                    Réalisations
                </a>
            </span>
        </div>
        <div class="blocs-menu">
            <span class="nav-menu-item">
                <a href="#range"><i class="fas fa-code"></i> 
                    Compétences
                </a>
            </span>
        </div>
        <div class="blocs-menu">
            <span class="nav-menu-item">
                <a href="#studies"><i class="fas fa-user-graduate"></i> 
                    Formations
                </a>
            </span>
        </div>
        <div class="blocs-menu">
            <span class="nav-menu-item">
                <a href="#experiences"><i class="fas fa-handshake"></i> 
                    Expériences
                </a>
            </span>
        </div>
       



        <div class="blocs-menu">
            <div class="logo-cercle">
                <a href="#contact">
                    <img src="ressources/contact.svg" alt="logo contact">
                </a>
            </div>
        </div>

    </nav>  -->

    <!-- Section Accueil -->

    <section class="accueil" id="accueil">
        <h1 style="color: white;">Bienvenue !</h1>
        <p class="txt-animation"></p>
        <a href="#port" class="btn-acc btn-acc1" style="background-color: black; color: white; font-weight: bold;">Portfolio</a>
        <a href="#range" class="btn-acc btn-acc2" style="background-color: grey; color: white;">Expériences</a>
        <a href="cv.html" target="_blank" class="btn-acc btn-acc2" style="background-color: white; color: black;">Curriculum Vitae</a>

        <div class="medias">
            <a href="https://github.com" target="blank">
                <div class="media media1">
                    <img src="ressources/github.svg" alt="github icone" class="icone-medias">
                </div>
            </a>
            <a href="https://linkedin.com" target="blank">
                <div class="media media2">
                    <img src="ressources/linkedin.svg" alt="linkedin icone" class="icone-medias">
                </div>
            </a>
            <a href="https://twitter.com" target="blank">
                <div class="media media3">
                    <img src="ressources/twitter.svg" alt="twitter icone" class="icone-medias">
                </div>
            </a>
        </div>

        <a href="#pres">
            <div class="btn-rond">
                <img src="ressources/arrowDown.svg" alt="logo fleche bas" class="logo-btn-rond-acc">
            </div>
        </a>

    </section>

<!-- Section Présentation -->

<section class="presentation" id="pres">

    <h2 class="titre-pres"><i class="fas fa-user"></i> Qui suis-je ?</h2>

    <div class="container-presentation">

        <div class="fond-forme"></div>

        <div class="pres-gauche">
            <h3 style="color: yellow;">WEB DEVELOPPEUR JUNIOR</h3>
            <hr>
            <p>De formation scientifique, j'ai longtemps exercé le métier de technicien de laboratoire spécialisé en biologie moléculaire, avant de choisir de me reconvertir en tant que développeur web et web mobile suite à une formation diplomante et professionnalisante au sein de l'école Simplon.</p>
            <br>
            <!-- <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi facere illum ullam exercitationem praesentium veniam?
            </p> -->
        </div>
        
        <div class="pres-droite">
            <ul class="liste-presentation">
                <li class="item-liste i1">
                    <span class="chiffre-style" style="color: yellow;">1.</span>
                    <p class="txt-liste">Spécialiste UI</p>
                </li>
                <li class="item-liste i2">
                    <span class="chiffre-style" style="color: yellow;">2.</span>
                    <p class="txt-liste">UX Design</p>
                </li>
                <li class="item-liste i3">
                    <span class="chiffre-style" style="color: yellow;">3.</span>
                    <p class="txt-liste">Développeur Front-end</p>
                </li>
                <li class="item-liste i4">
                    <span class="chiffre-style" style="color: yellow;">4.</span>
                    <p class="txt-liste">Développeur Back-End</p>
                </li>
                <li class="item-liste i5">
                    <span class="chiffre-style" style="color: yellow;">5.</span>
                    <p class="txt-liste">Développeur Full-Stack</p>
                </li>
            </ul>
        </div>
        
    </div>

</section>

<!-- Section Portfolio -->

<section class="portfolio" id="port">


    <h2 class="titre-port"><i class="fas fa-wrench"></i> Mes réalisations</h2>

    <div class="cont-portfolio">

        <div class="item vague1">
            <div class="cont-img-port">
                <!-- <img src="ressources/bootstrap.jpg" alt="img fiche profil"> -->
                <img src="https://i.ibb.co/9yJVtxS/Fiche-Profil.png" alt="img fiche profil">
            </div>
            <h3>Projet "Fiche Profil"</h3>
            <p>Fiche profil d'auto-évaluation. Suivi d'apprentissage d'étudiants.</p>
            <a href="dossierHtml/FicheProfil.html" target="_blank" class="btn-projets" style="background-color: rgb(21, 213, 21); color: white; font-weight: bold;"><i class="far fa-eye" style="color: white; margin-left: 10px;"></i> Découvrez le projet</a>
        </div>
        
        <div class="item vague1">
            <div class="cont-img-port">
                <!-- <img src="ressources/bootstrap.jpg" alt="img ballon d'or"> -->
                <img src="https://i.ibb.co/VT67Yh4/classement-Ballon-Or.png" alt="img ballon d'or">
            </div>
            <h3>Projet "Classement ballon d'Or"</h3>
            <p>Classement des joueurs au Ballon d'Or 2019.</p><br>
            <a href="dossierHtml/ClassementBallonOr.html" target="_blank" class="btn-projets" style="background-color: rgb(21, 213, 21); color: white; font-weight: bold;"><i class="far fa-eye" style="color: white; margin-left: 10px;"></i> Découvrez le projet</a>
        </div>

        <div class="item vague1">
            <div class="cont-img-port">
                <!-- <img src="ressources/console.jpg" alt="img blog"> -->
                <img src="https://i.ibb.co/sKCvtdf/BLOG.png" alt="img blog">
            </div>
            <h3>Projet "BLOG"</h3>
            <p>Blog d'actualité permettant à ses utilisateurs de réagir et de noter des articles.</p>
            <a href="dossierHtml/BLOG.html" target="_blank" class="btn-projets" style="background-color: rgb(21, 213, 21); color: white; font-weight: bold;"><i class="far fa-eye" style="color: white; margin-left: 10px;"></i> Découvrez le projet</a>
        </div>

        <div class="item vague1">
            <div class="cont-img-port">
                <!-- <img src="ressources/animcss.jpg" alt="img rhuma sug"> -->
                <img src="https://i.ibb.co/Cnr05Hn/Arhum.png" alt="img rhuma sug">
            </div>
            <h3>Projet "Rhuma Sug"</h3>
            <p>Site e-commerce de vente de vente de Rhum bio en ligne.</p>
            <a href="dossierHtml/RhumaSug.html" target="_blank" class="btn-projets" style="background-color: rgb(21, 213, 21); color: white; font-weight: bold;"><i class="far fa-eye" style="color: white; margin-left: 10px;"></i> Découvrez le projet</a>
        </div>

        <div class="item vague2">
            <div class="cont-img-port">
                <!-- <img src="ressources/bootstrapsite.jpg" alt="img portfolio"> -->
                <img src="https://i.ibb.co/XDLcWSv/Loc-Appart.png" alt="img portfolio">
            </div>
            <h3>Projet "Loc'Appart"</h3>
            <p>Site de réservation immobilière entre particuliers.</p><br>
            <a href="dossierHtml/LocAppart.html" target="_blank" class="btn-projets" style="background-color: rgb(21, 213, 21); color: white; font-weight: bold;"><i class="far fa-eye" style="color: white; margin-left: 10px;"></i> Découvrez le projet</a>
        </div>

        <div class="item vague2">
            <div class="cont-img-port">
                <!-- <img src="ressources/bootstrapsite.jpg" alt="img portfolio"> -->
                <img src="https://i.ibb.co/ynfDyf9/Secure-App.png" alt="img secureapp">
            </div>
            <h3>Projet "Secureapp"</h3>
            <p>Site d'entrainement à la sécurisation des données dans une application Symfony.</p>
            <a href="dossierHtml/Secureapp.html" target="_blank" class="btn-projets" style="background-color: rgb(21, 213, 21); color: white; font-weight: bold;"><i class="far fa-eye" style="color: white; margin-left: 10px;"></i> Découvrez le projet</a>
        </div>

        <div class="item vague2">
            <div class="cont-img-port">
                <!-- <img src="ressources/flex.jpg" alt="img filmflix"> -->
                <img src="https://i.ibb.co/27x8yrW/FilmFlix.png" alt="img filmflix">
            </div>
            <h3>Projet "FilmFlix"</h3>
            <p>Base de données compilant des informations utiles sur les films sortis en salle.</p>
            <a href="dossierHtml/Filmflix.html" target="_blank" class="btn-projets" style="background-color: rgb(21, 213, 21); color: white; font-weight: bold;"><i class="far fa-eye" style="color: white; margin-left: 10px;"></i> Découvrez le projet</a>
        </div>


        <div class="item vague2">
            <div class="cont-img-port">
                <!-- <img src="ressources/d3.jpg" alt="img skiview"> -->
                <img src="https://i.ibb.co/hBSyWxQ/skiview.jpg" alt="img skiview">
            </div>
            <h3>Projet "Skiview"</h3>
            <p>Proof Of Concept d'une application mobile à destination des skieurs de stations partenaires.</p>
            <a href="dossierHtml/Skiview.html" target="_blank" class="btn-projets" style="background-color: rgb(21, 213, 21); color: white; font-weight: bold;"><i class="far fa-eye" style="color: white; margin-left: 10px;"></i> Découvrez le projet</a>
        </div>

        <div class="item vague2">
            <div class="cont-img-port">
                <!-- <img src="ressources/d3.jpg" alt="img skiview"> -->
                <img src="https://i.ibb.co/6tNftS8/Gestion-de-stock-de-consommables.png" alt="img skiview">
            </div>
            <h3>Projet "Gestion de stock"</h3>
            <p>Logiciel VBA Excel de suivi du stock de consommables et réactifs de laboratoire.</p>
            <a href="dossierHtml/Gestion-Stock.html" target="_blank" class="btn-projets" style="background-color: rgb(21, 213, 21); color: white; font-weight: bold;"><i class="far fa-eye" style="color: white; margin-left: 10px;"></i> Découvrez le projet</a>
        </div>

    </div>


</section>

<!-- Section Range -->

<section class="section-range" id="range">

    <h2 class="titre-exp"><i class="fas fa-code"></i> Mes compétences techniques</h2>

    <div class="grille-skill">

        <div class="range-cont">
            <p class="label-skill">HTML</p>
            <p class="number-skill">90%</p>
            <div class="barre-skill b1"></div>
            <div class="barre-grises"></div>
        </div>
        <div class="range-cont">
            <p class="label-skill">CSS</p>
            <p class="number-skill">90%</p>
            <div class="barre-skill b2"></div>
            <div class="barre-grises"></div>
        </div>
        <div class="range-cont">
            <p class="label-skill">Javascript</p>
            <p class="number-skill">80%</p>
            <div class="barre-skill b3"></div>
            <div class="barre-grises"></div>
        </div>
        <div class="range-cont">
            <p class="label-skill">PHP</p>
            <p class="number-skill">60%</p>
            <div class="barre-skill b4"></div>
            <div class="barre-grises"></div>
        </div>
        <div class="range-cont">
            <p class="label-skill">MySQL</p>
            <p class="number-skill">70%</p>
            <div class="barre-skill b5"></div>
            <div class="barre-grises"></div>
        </div>
        <div class="range-cont">
            <p class="label-skill">VBA</p>
            <p class="number-skill">80%</p>
            <div class="barre-skill b6"></div>
            <div class="barre-grises"></div>
        </div>

    </div>

</section>

<section class="section-range" id="range">

    <h2 class="titre-exp"><i class="fas fa-laptop-code"></i> Logiciels</h2>

    <div class="grille-skill">

        <div class="range-cont">
            <p class="label-skill">MICROSOFT PACK OFFICE</p>
            <p class="number-skill">90%</p>
            <div class="barre-skill b7"></div>
            <div class="barre-grises"></div>
        </div>
        <div class="range-cont">
            <p class="label-skill">GIMP</p>
            <p class="number-skill">70%</p>
            <div class="barre-skill b8"></div>
            <div class="barre-grises"></div>
        </div>
        <div class="range-cont">
            <p class="label-skill">FIGMA</p>
            <p class="number-skill">90%</p>
            <div class="barre-skill b9"></div>
            <div class="barre-grises"></div>
        </div>
        <div class="range-cont">
            <p class="label-skill">VS CODE</p>
            <p class="number-skill">90%</p>
            <div class="barre-skill b10"></div>
            <div class="barre-grises"></div>
        </div>
        <div class="range-cont">
            <p class="label-skill">GITHUB</p>
            <p class="number-skill">80%</p>
            <div class="barre-skill b11"></div>
            <div class="barre-grises"></div>
        </div>
    </div>

</section>

<section class="section-range" id="range">

    <h2 class="titre-exp"><i class="fas fa-toolbox"></i> Frameworks</h2>

    <div class="grille-skill">
        <div class="range-cont">
            <p class="label-skill">WORDPRESS</p>
            <p class="number-skill">75%</p>
            <div class="barre-skill b12"></div>
            <div class="barre-grises"></div>
        </div>
        <div class="range-cont">
            <p class="label-skill">PRESTASHOP</p>
            <p class="number-skill">75%</p>
            <div class="barre-skill b13"></div>
            <div class="barre-grises"></div>
        </div>
        <div class="range-cont">
            <p class="label-skill">BOOTSTRAP</p>
            <p class="number-skill">90%</p>
            <div class="barre-skill b14"></div>
            <div class="barre-grises"></div>
        </div>
        <div class="range-cont">
            <p class="label-skill">SYMFONY</p>
            <p class="number-skill">90%</p>
            <div class="barre-skill b15"></div>
            <div class="barre-grises"></div>
        </div>
        <div class="range-cont">
            <p class="label-skill">ANGULAR</p>
            <p class="number-skill">70%</p>
            <div class="barre-skill b16"></div>
            <div class="barre-grises"></div>
        </div>
        <div class="range-cont">
            <p class="label-skill">NATIVESCRIPT</p>
            <p class="number-skill">60%</p>
            <div class="barre-skill b17"></div>
            <div class="barre-grises"></div>
        </div>

    </div>

</section>

<section class="section-range" id="range">

    <h2 class="titre-exp"><i class="fas fa-random"></i> Mes compétences transverses</h2>

    <div class="grille-skill">

        <div class="range-cont">
            <p class="label-skill">Agilité (SCRUM)</p>
            <p class="number-skill">90%</p>
            <div class="barre-skill b18"></div>
            <div class="barre-grises"></div>
        </div>
        <div class="range-cont">
            <p class="label-skill">UI / UX</p>
            <p class="number-skill">90%</p>
            <div class="barre-skill b19"></div>
            <div class="barre-grises"></div>
        </div>
        <div class="range-cont">
            <p class="label-skill">UML / MERISE</p>
            <p class="number-skill">80%</p>
            <div class="barre-skill b20"></div>
            <div class="barre-grises"></div>
        </div>
        <div class="range-cont">
            <p class="label-skill">ANGLAIS</p>
            <p class="number-skill">60%</p>
            <div class="barre-skill b21"></div>
            <div class="barre-grises"></div>
        </div>

    </div>

</section>

<!-- Section -->

<section class="travail-exp" id="studies">

    <h2 class="titre-travail-exp"><i class="fas fa-user-graduate"></i> Ma formation</h2>

    <div class="cont-exp-travail">

        <div class="barre-verticale1">
            <div class="boule-ico">
                <!-- <img src="ressources/google.svg" alt="icone gauche"> -->
                <img src="https://cdn.jobs.makesense.org/jobs/kk572a12/job/1611133123143kk572a13.png" width="60px" height="40px" alt="icone gauche">
            </div>
            <div class="boule-ico">
                <!-- <img src="ressources/instagram.svg" alt="icone gauche"> -->
                <img src="https://upload.wikimedia.org/wikipedia/fr/thumb/8/82/Universit%C3%A9_Bordeaux_2_%28logo%29.svg/2048px-Universit%C3%A9_Bordeaux_2_%28logo%29.svg.png" width="60px" height="40px" alt="icone gauche">
            </div>
            <div class="boule-ico">
                <!-- <img src="ressources/amazon.svg" alt="icone gauche"> -->
                <img src="https://upload.wikimedia.org/wikipedia/fr/thumb/8/82/Universit%C3%A9_Bordeaux_2_%28logo%29.svg/2048px-Universit%C3%A9_Bordeaux_2_%28logo%29.svg.png" width="60px" height="40px" alt="icone gauche">
            </div>
            
            <div class="boule-ico">
                <i class="fas fa-user-graduate fa-2x"></i>
                <!-- <img src="ressources/plane.svg" class="avion" alt="icone gauche"> -->
            </div>
        </div>


        <div class="flex-cont-bloc-exp">

            <div class="bloc bloc1">
                <div class="contenu-bloc">
                    <p class="titre-section-bloc">Simplon - Ecole du Numérique de PAU, 2020</p>
                    <p class="txt-section">Obtention auprès du GRETA du Titre Professionnel de niveau 5 - <b>Développeur Web et Web Mobile (DWWM)</b></p>
                </div>
            </div>

            <div class="bloc bloc2">
                <div class="contenu-bloc">
                    <p class="titre-section-bloc">Université Victor Segalen Bordeaux II, 2005-2007</p>
                    <p class="txt-section">Master de Microbiologie-Immunologie</p>
                </div>
            </div>

            <div class="bloc bloc3">
                <div class="contenu-bloc">
                    <p class="titre-section-bloc">Université Victor Segalen Bordeaux II, 2001-2005</p>
                    <p class="txt-section">Licence de biologie Cellulaire et Physiologie</p>
                </div>
            </div>
            
        </div>
    </div>

</section>


<section class="travail-exp" id="experiences">

    <h2 class="titre-travail-exp"><i class="fas fa-handshake"></i> Mes expériences</h2>

    <div class="cont-exp-travail">

        <div class="barre-verticale2">
            <div class="boule-ico">
                <!-- <img src="ressources/instagram.svg" alt="icone gauche"> -->
                <p style="font-size: 17px; font-weight: bold;">ASCII</p>
            </div>
            <div class="boule-ico">
                <p style="font-size: 17px; font-weight: bold;">EUR</p>
            </div>
            <div class="boule-ico">
                <!-- <img src="ressources/instagram.svg" alt="icone gauche"> -->
                <p style="font-size: 17px; font-weight: bold;">SYN</p>
            </div>
            <div class="boule-ico">
                <!-- <img src="ressources/amazon.svg" alt="icone gauche"> -->
                <p style="font-size: 17px; font-weight: bold;">MON</p>
            </div>
            <div class="boule-ico">
                <i class="fas fa-handshake fa-2x"></i>
                <!-- <i class="fas fa-rocket fa-2x"></i> -->
                <!-- <img src="ressources/plane.svg" class="avion" alt="icone gauche"> -->
            </div>
        </div>


        <div class="flex-cont-bloc-exp">

            <div class="bloc bloc1">
                <div class="contenu-bloc">
                    <p class="titre-section-bloc">ASCII à ESCOUT, 2020 (Stagiaire)</p>
                    <p class="txt-section">Stage d'1 mois dans le cadre de la formation Développeur Web et Web Mobile (DWWM)</p>
                </div>
            </div>

            <div class="bloc bloc1">
                <div class="contenu-bloc">
                    <p class="titre-section-bloc">Euralis à PAU, 2019 (CDD)</p>
                    <p class="txt-section">Technicien de laboratoire au sein du laboratoire Contrôle Qualité de semences de grandes cultures</p>
                </div>
            </div>

            <div class="bloc bloc2">
                <div class="contenu-bloc">
                    <p class="titre-section-bloc">Syngenta Seeds à TOULOUSE, 2008-2018 (CDI)</p>
                    <p class="txt-section">Technicien de laboratoire au sein du laboratoire Contrôle Qualité de semences de grandes cultures</p>
                </div>
            </div>

            <div class="bloc bloc3">
                <div class="contenu-bloc">
                    <p class="titre-section-bloc">Monsanto à PEYREHORADE, 2007 (Stagiaire)</p>
                    <p class="txt-section">Stagiaire au sein du laboratoire de pureté génétique</p>
                </div>
            </div>

            <!-- <div class="bloc bloc4">
                <div class="contenu-bloc">
                    <p class="titre-section-bloc">INRA de VILLENAVE D'ORNON, 2007 (Stagiaire)</p>
                    <p class="txt-section">Stage de fin d'étude de Master Microbiologie au sein du laboratoire de Génétique, Développement et Pouvoir Pathogène (GDPP)</p>
                </div>
            </div> -->


        </div>
    </div>

</section>


<!-- Section Parallax -->


<div class="section-parallax">
    
    <p class="txt-par" style="text-align: center;">
        <h2 class="titre-travail-exp" id="title" style="color: white;"><i class="fas fa-heart"></i> Centres d'intérêts</h2>   
    </p>
    <p class="txt-par" style="text-align: center;">
        <img src="https://images-na.ssl-images-amazon.com/images/I/61F-Epj6A9L._SL1104_.jpg" width="90px;" height="90px;" alt="Football"><br>
        <b>FOOTBALL, PELOTE BASQUE</b>
        <!-- 752 tasses de café -->
    </p>
    <p class="txt-par" style="text-align: center;">
        <img src="https://images.sudouest.fr/2017/04/10/58eb8b2766a4bd4f261d1230/widescreen/1000x500/on-peut-observer-le-pic-du-midi-d-ossau-l-emblematique-montagne-des-pyrenees-bearnaises-sous-toutes-les-coutures.jpg?v1" width="90px;" height="90px;" alt="Randonnées" style="border: 3px solid white;"><br>
        <b>RANDONNEES</b> (Vallée d'Aspe, d'Ossau, ...)
        <!-- 86 projets -->
    </p>
    <p class="txt-par" style="text-align: center;">
        <img src="https://media.nouvelobs.com/ext/uri/sreferentiel.nouvelobs.com/file/rue89/a633857a1a16f63ebdf3324e86038c64.jpg" width="90px;" height="90px;" style="border: 3px solid white;" alt="Lecture"><br>
        <b>LECTURE</b> (Science Fiction, Biographie, ...)
        <!-- 38 clients -->
    </p>
    <p class="txt-par" style="text-align: center;">
        <img src="data:image/jpeg;base64,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" width="90px;" height="90px;" alt="Loisirs Créatifs" style="border: 3px solid white;"><br>
        <b>LOISIRS CREATIFS</b> (Origami, Kirigami, ...)
        <!-- 38 clients -->
    </p>
</div>

<!-- <div class="section-parallax" style="margin-top: 20px">
        <figure class="txt-par">
            <img src="https://images-na.ssl-images-amazon.com/images/I/61F-Epj6A9L._SL1104_.jpg" alt="Football">
            <figcaption><b>FOOTBALL, PELOTE BASQUE, SKI</b></figcaption>
        </figure>
        <figure class="txt-par">
            <img src="https://images.sudouest.fr/2017/04/10/58eb8b2766a4bd4f261d1230/widescreen/1000x500/on-peut-observer-le-pic-du-midi-d-ossau-l-emblematique-montagne-des-pyrenees-bearnaises-sous-toutes-les-coutures.jpg?v1" alt="Randonnées" style="border: 3px solid white;">
            <figcaption><b>RANDONNEES</b><br>(Vallée d'Aspe, d'Ossau, ...)</figcaption>
        </figure>
        <figure class="txt-par">
            <img src="https://media.nouvelobs.com/ext/uri/sreferentiel.nouvelobs.com/file/rue89/a633857a1a16f63ebdf3324e86038c64.jpg" style="border: 3px solid white;" alt="Lecture">
            <figcaption><b>LECTURE</b><br> (Science Fiction, Biographie, ...)</figcaption>
        </figure>

        <figure class="txt-par">
            <img src="data:image/jpeg;base64,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" alt="Loisirs Créatifs" style="border: 3px solid white;">
            <figcaption><b>LOISIRS CREATIFS</b><br> (Origami, Kirigami, ...)</figcaption>
        </figure>
    </div> -->


<!-- Section Contact -->

<section class="section-contact" id="contact">

    <h2><i class="fas fa-bullhorn"></i><strong> Me contacter</strong></h2>

    <div class="container-form">

        <form method="POST" action="index.php" class="form-bloc" >
        <!-- <form class="contact-form"></form> -->

            <div class="form-groupe">
                <label for="prenom">Prénom</label>
                <input type="text" required maxlength="20" id="prenom">
            </div>
            <div class="form-groupe">
                <label for="nom">Nom</label>
                <input type="text" required maxlength="25" id="nom">
            </div>
            <div class="form-groupe">
                <label for="email">Email</label>
                <input type="email" required maxlength="80" id="email">
            </div>
            <div class="form-groupe">
                <textarea id="txt" placeholder="Votre message" required></textarea>
            </div>

            <div class="form-groupe">
                <input type="submit" value="ENVOYER" class="button-sub">
            </div>

        </form>

    </div>


</section>

<footer>
   Portfolio, tout droits réservés &copy;
</footer>










    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="app.js"></script>
</body>
</html>