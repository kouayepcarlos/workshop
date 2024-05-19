<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MLNS2 - Cameroun Mai 2024</title>
    <link rel="icon" href="img/cnrs.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: #333;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            overflow: hidden;
            padding: 0 20px;
            height: auto;
        }

        .header {
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
        }

        .header img {
            max-width: 100%;
            height: auto;
        }

        .main-content {
            display: flex;
            flex-wrap: wrap;
            
            margin: 20px 0;
        }

        .main-content div {
            width: 100%;
            margin-bottom: 20px;
        }

        .logo 
        {
            display: flex;
            justify-content: space-around;
        }

        footer
        {
            width: 100%;
            background-color: #1f242c;
            height: 50px;
        }

        .image 
        {
            background-color:white;
            margin-top: 4px;
        }

        .footer .social-media a {
            color: #fff;
        }

        .footer .social-media
        {
            margin-top: 15px;
        }

        .progr
        {
            color: #1c7fac;
        }

        .erods
        {
            color: white;
            margin-top: 15px
        }
        
        .cnrs
        {
            margin-top: 150px;
        }
        
        .programme p {
           text-align: justify;
        }

        ul {
            list-style-type: square;
        }

        @media (min-width: 600px) {
            .main-content div {
                width: 50%;
            }
            
            
        }

         @media (min-width: 600px) {
            .footer{
                width: auto;
                padding-bottom: 30px
            }
        }

        @media (min-width: 900px) {
            .main-content div {
                width: 33.33%;
            }
        }

        .programme {
            background-color: #f4f4f4;
            text-align: left;
            padding: 20px;
        }

        .programme h2 {
            margin-bottom: 10px;
        }

        .programme p {
            margin-bottom: 10px;
        }

    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <span class="cnrs"><img src="cnrs.png" alt="Logo CNRS" width="40" ></span>
            <img src="lig.png" alt="Logo IRISA" width="40">
            <img src="irisa.png" alt="Logo IRISA" width="120">
            <h1>Workshop MLNS2 - Cameroun Mai 2024</h1>
            <p>Organisateurs: Alain Tchana, David Bromberg et Brice Ekane</p>
        </header>
        <div class="main-content">
            <div>
                <a href="#programm"><h2>Programme</h2></a>
                <p>Découvrez le programme détaillé de la conférence, avec les présentations et les événements prévus.</p>
            </div>

            <div>
                <a href="#contact"><h2>Partenaires</h2></a>
                <p>Découvrez les partenaires de la conférence MLNS2 - Cameroun Mai 2024.</p>
            </div>

            <div>
                <a href="#contact"><h2>Contact</h2></a>
                <p>Besoin d'informations supplémentaires ? Contactez-nous et nous nous ferons un plaisir de vous répondre.</p>
            </div>
        </div>
        <section class="programme" id="programm">
            <h2 class="progr">Mardi 21 - Séminaire scientifiques MLNS2</h2>
            <ul>
                <li>
                    <p><strong>Lado Saha (ENSPY)</strong> : Présentation de l'article "Last-Level Cache Side-Channel Attacks Are Feasible in the Modern Public Cloud. Asplos 2024" de Zirui Neil Zhao et al.</p>
                </li>
                <li>
                    <p><strong>Bahaouddyn Bahaouddyn (UY1)</strong>, <strong>Franck Feuwo (UY1)</strong> et <strong>Fideline Ngoufack (UY1)</strong>: Extension de hotCRP pour la prise en compte des "words matter"</p>
                </li>
                <li>
                    <p><strong>Alain Tchana (Grenoble INP)</strong>, <strong>Hippolyte Tapamo (UY1)</strong>, <strong>Brice Ekane (Grenoble INP)</strong>, <strong>David Bromberg (Université de Rennes)</strong> : Un Système d'exploitation made in Cameroun.</p>
                </li>
            </ul>
            <h2 class="progr">Mercredi 22 - Collaboration Université d'Ebolowa</h2>
            <ul>
                <li>
                     <p>Programmes du cursus Ingénieur du Département de Génie Informatique</p>
                </li>
                <li>
                     <p>Collaboration entre le Laboratoire d’Informatique et Application d’Ambam <strong>(LI2A)</strong> et l'Institut de Recherche en Informatique et Systèmes Aléatoires <strong>(IRISA)</strong></p>
                </li>
                <li>
                    <p>Collaboration entre le Laboratoire d’Informatique et Application d’Ambam <strong>(LI2A)</strong> et le Laboratoire d'Informatique de Grenoble <strong>(LIG)</strong></p>
                </li>
                <li>
                    <p>Collaboration entre le département de Génie Informatique de l'Université d'Ebolowa  et Grenoble INP</p>
                </li>
                <li>
                    <p>Collaboration entre le département de Génie Informatique de l'Université d'Ebolowa et l’Université de Rennes.</p>
                </li>
            </ul>
            
            <h2 class="progr">Jeudi 23 - Séminaire MLNS2</h2>
            <ul>
                <li>
                    <p><strong>Lado Saha (ENSPY)</strong>: Présentation de l'article "SEVeriFast : Minimizing the root of trust for fast startup of SEV microVMs. Asplos 2024" de Benjamin Holmes et al.</p>
                </li>
                <li>
                    <p><strong>Pacome Kengali (ENSPY)</strong> et <strong>Daniel Tchassi (ENSPY)</strong> : Présentation de l'article "Intel TDX Demystified: A Top-Down Approach. ACM Computing Survey 2024" de PAU-CHEN CHENG et al.</p>
                </li>
                <li>
                    <p><strong>Willy Watcho (ENSPY)</strong> et <strong>Franck Feuwo (UY1)</strong> : Présentation de l'article "Protect the System Call, Protect (Most of) the World with BASTION. Asplos 2023" de Christopher Jelesnianski et al.</p>
                </li>
                <li>
                    <p><strong>Alain Tchana (Grenoble INP)</strong>, <strong>Hippolyte Tapamo (UY1)</strong>, <strong> Brice Ekane (Grenoble INP)</strong>, <strong> David Bromberg (Université de Rennes)</strong> : Un Système d'exploitation made in Cameroun.</p>
                </li>
            </ul>
            
            <h2 class="progr">Vendredi 24 - Séminaire MLNS2</h2>
            <ul>
                <li>
                    <p><strong>Bahaouddyn Bahaouddyn (UY1)</strong> et <strong>Fideline Ngoufack (UY1)</strong> : Présentation de l'article "carbond: An Operating-System Daemon for Carbon Awareness. hotCarbon 2023" de Andreas Schmidt et al.</p>
                </li>
                <li>
                    <p><strong>Bahaouddyn Bahaouddyn (UY1)</strong> et <strong>Fideline Ngoufack (UY1)</strong> : Présentation de l'article "Carbon-Aware Memory Placement. hotCarbon 2023" de Sven Köhler et al.</p>
                </li>
                <li>
                    <p><strong>Alain Tchana (Grenoble INP)</strong>, <strong> Hippolyte Tapamo (UY1)</strong>, <strong> Brice Ekane (Grenoble INP)</strong>, <strong> David Bromberg (Université de Rennes)</strong> : Un Système d'exploitation made in Cameroun.</p>
                </li>
            </ul>
            
            
            
        </section>


            <!-- Ajout du footer -->
        <footer class="footer" id="contact">
            <div class="container logo">
                <div class="image">
                    <img src="cnrs.png" alt="Logo CNRS" width="40">
                    <img src="lig.png" alt="Logo IRISA" width="40">
                    <img src="irisa.png" alt="Logo LIG" width="120">
                </div>
                <div class="erods">
                    <p>© Copyright 2024 | All Rights Reserved by Erods</p>
                </div>
                <div class="social-media">
                    <a href="https://twitter.com/alaintchana2?lang=ca" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://perso.ens-lyon.fr/alain.tchana/" target="_blank"><i class="fas fa-globe"></i></a>
                    <a href="https://www.linkedin.com/in/pr-alain-tchana-72516722/?originalSubdomain=fr" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.youtube.com/watch?v=_BPwaiXnoOQ" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </footer>
     
    </div>
</body>
</html>
