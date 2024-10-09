<?php require './index.php';?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DreamLabs+ | Stream your favourite movies and shows!</title>
    <link rel="icon" href="images/DreamLabs_Logo_Blau.png" type="image/x-icon">
    <style>
        @font-face {
            font-family: 'HarmonyOS Sans';
            src: url('fonts/HarmonyOS_Sans_Bold.ttf') format('truetype');
            font-weight: bold;
        }

        @font-face {
            font-family: 'HarmonyOS Sans';
            src: url('fonts/HarmonyOS_Sans_Medium.ttf') format('truetype');
            font-weight: normal;
        }

        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background: radial-gradient(circle, rgba(20, 0, 244, 0.18), rgba(244, 244, 244, 0.34));
            display: flex;
            flex-direction: column;
        }

        nav {
            display: flex;
            align-items: center;
            background-color: #1400f4;
            color: white;
            font-family: 'HarmonyOS Sans', sans-serif;
            font-weight: bold;
            font-size: 130%;
            padding: 10px 0;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
        }

        .nav-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .nav-section.left {
            justify-content: flex-start;
            padding-left: 20px;
        }

        .nav-section.middle {
            justify-content: space-around;
        }

        .nav-section.right {
            justify-content: flex-end;
            padding-right: 20px;
        }

        nav img {
            height: 40px;
        }

        nav a {
            color: white;
            text-decoration: none;
            position: relative;
        }

        nav a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 4px;
            background-color: white;
            bottom: -5px;
            left: 0;
            border-radius: 2px;
            transition: width 0.3s ease-in-out;
        }

        nav a:hover::after {
            width: 100%;
        }

        nav img {
            padding-top: 2px;
        }

        section h3 {
            font-family: 'HarmonyOS Sans', sans-serif;
            font-size: 200%;
            font-weight: bold;
            padding-left: 10px;
            text-decoration-line: underline;
            text-decoration-thickness: 4px;
            text-underline-offset: 10px;
        }

        section {
            padding-left: 2%;
            padding-right: 2%;
        }

        .iframe-container {
            display: flex;
            overflow-x: auto;
            scroll-behavior: smooth;
            gap: 0.5%;
        }

        .iframe-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .iframe-item p {
            font-family: 'HarmonyOS Sans', sans-serif;
            font-size: 100%;
            margin: 2px 0;
        }

        .source {
            font-family: 'HarmonyOS Sans', sans-serif;
            font-weight: normal;
            scale: 70%;
        }
        .title {
            font-weight: bold;
        }

        footer {
            font-family: 'HarmonyOS Sans', sans-serif;
            font-weight: normal;
            color: dimgray;
            text-align: center;
            font-size: 80%;
            margin-top: 4px;
            line-height: 6px;
        }

        @media (max-width: 1650px) {
            nav {
                flex-direction: column;
                align-items: flex-start;
                padding: 10px;
            }

            .nav-section {
                width: 100%;
                justify-content: flex-start;
            }

            .nav-section.middle {
                flex-direction: column;
                align-items: flex-start;
            }

            .nav-section.middle a {
                width: 100%;
                padding: 10px 0;
            }

            .iframe-container {
                flex-direction: column;
                align-items: center;
            }

            body {
                text-align: center;
            }

            .iframe-container iframe {
                margin-bottom: 2%;
            }
        }
    </style>
</head>
<body>
<nav>
    <div class="nav-section left">
        <img src="images/DreamLabs_Logo.svg" alt="DreamLabs+ Logo">
    </div>
    <div class="nav-section middle">
        <a href="#Technic">Technic</a>
        <a href="#Health">Health</a>
        <a href="#Journeys">Journeys</a>
        <a href="#Cooking">Cooking</a>
        <a href="#Entertainment">Entertainment</a>
    </div>
    <div class="nav-section right">
    </div>
</nav>
<section id="Technic">
    <h3>💻 Technic</h3>
    <div class="iframe-container">
        <div class="iframe-item">
            <?php
            $ya=new YouVideo('IPhone 16 Trailer', "GDlkCkcIqTs?si=BJW-g-9n_a2GxFN-");
            echo $ya->getCode();
            echo $ya->getName();
            ?>
        </div>

        <div class="iframe-item">
            <?php
            $ya=new YouVideo('IPhone 16 Pro Trailer', "eDqfg_LexCQ?si=42VNMq2Flbjms_JV");
            echo $ya->getCode();
            echo $ya->getName();
            ?>
        </div>

        <div class="iframe-item">
            <?php
            $ya=new YouVideo('Apple Watch Series 10 Trailer', "e6T34u51MaA?si=eDGB5_H7pGao_8R5");
            echo $ya->getCode();
            echo $ya->getName();
            ?>
        </div>

        <div class="iframe-item">
            <?php
            $ya=new YouVideo('18 Things you missed at WWDC24', "LtIWE4CCX5M?si=vyYBBC0bKEAwj9zT");
            echo $ya->getCode();
            echo $ya->getName();
            ?>
        </div>

        <div class="iframe-item">
            <?php
            $ya=new YouVideo('Apple Vision Pro Trailer', "IY4x85zqoJM?si=HBqyme0TIbZL-vj");
            echo $ya->getCode();
            echo $ya->getName();
            ?>
        </div>
    </div>
</section>

<section id="Health">
    <h3>🏃‍➡️Health</h3>
    <div class="iframe-container">
        <div class="iframe-item">
            <iframe width="308" height="173" src="https://www.youtube.com/embed/Mk1DRQkObHc?si=Lczy3yzgfmtvvpH6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p class="title">I changed my health in 1 month</p><p class="source">YouTube</p>
        </div>
        <div class="iframe-item" style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/952618012?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
        frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="BURDEN"></iframe></div>
        <script src="https://player.vimeo.com/api/player.js"></script>

        <div class="iframe-item">
            <iframe width="308" height="173" src="https://www.youtube.com/embed/nPAnPpgo8mU?si=1dLMOT0_25Ny6SdZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p class="title">How to be Healthy in Mind & Body</p><p class="source">YouTube</p>
        </div>

        <div class="iframe-item">
            <iframe width="308" height="173" src="https://www.youtube.com/embed/E3QpXj_QOqQ?si=pUWJNACyZ8s30aMG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p class="title">The science of gut health</p><p class="source">YouTube</p>
        </div>

        <div class="iframe-item">
            <iframe width="308" height="173" src="https://www.youtube.com/embed/K4Ze-Sp6aUE?si=zefMC9hjX2BLv92G" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p class="title">The science of Eating</p><p class="source">YouTube</p>
        </div>

        <div class="iframe-item">
            <iframe width="308" height="173" src="https://www.youtube.com/embed/wCXYST7y3-E?si=l4blDi_XJ7dOlIWv" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p class="title">100 days Body Transformation</p><p class="source">YouTube</p>
        </div>
    </div>
</section>

<section id="Journeys">
    <h3>📖 Journeys</h3>
    <div class="iframe-container">
        <div class="iframe-item">
            <iframe width="308" height="173" src="https://www.youtube.com/embed/oSoVE0M3OAg?si=2q-nC4ipYewBmp03" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p class="title">Ich reise für 0€ quer durch Europa</p><p class="source">YouTube</p>
        </div>

        <div class="iframe-item">
            <iframe width="308" height="173" src="https://www.youtube.com/embed/T7x85rtZsB4?si=O8zDcyzkqOGMGP-B" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p class="title">Ich reise alleine in ein zufälliges Land</p><p class="source">YouTube</p>
        </div>

        <div class="iframe-item">
            <iframe width="308" height="173" src="https://www.youtube.com/embed/fv1mXOJh5zk?si=9OM57MpDmOn7FC3y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p class="title">Ich reise vorerst nicht mehr alleine</p><p class="source">YouTube</p>
        </div>

        <div class="iframe-item">
            <iframe width="308" height="173" src="https://www.youtube.com/embed/yHS3_uKG1IM?si=M038WmPT9dS5laQF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p class="title">Südafrika: Kapstadt, Safari und mehr</p><p class="source">YouTube</p>
        </div>

        <div class="iframe-item">
            <iframe width="308" height="173" src="https://www.youtube.com/embed/w0ok2w0fg_I?si=LA-Y8v75NoqJkFDQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p class="title">Sommer in den italienischen Alpen</p><p class="source">YouTube</p>
        </div>
    </div>
</section>

<section id="Cooking">
    <h3>🧑‍🍳 Cooking</h3>
    <div class="iframe-container">
        <div class="iframe-item">
            <iframe width="308" height="173" src="https://www.youtube.com/embed/JuWIuU4-Gz0?si=K231TVcHfc9XoWUO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p class="title">1 Tag nur das schwerste Essen kochen</p><p class="source">YouTube</p>
        </div>

        <div class="iframe-item">
            <iframe width="308" height="173" src="https://www.youtube.com/embed/AcJmTtP4R48?si=sMRFsiW1rvgEx-Xn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p class="title">Vermeide diese drei Fehler</p><p class="source">YouTube</p>
        </div>

        <div class="iframe-item">
            <iframe width="308" height="173" src="https://www.youtube.com/embed/4iFJNBMkBVY?si=oErTC6_dYZiV-Uqo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p class="title">So schmecht Essen in London</p><p class="source">YouTube</p>
        </div>

        <div class="iframe-item">
            <iframe width="308" height="173" src="https://www.youtube.com/embed/j5rw-4CJmTY?si=ler-8drAUZy1t4kz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p class="title">XXL Foodtour durch Berlin</p><p class="source">YouTube</p>
        </div>

        <div class="iframe-item">
            <iframe width="308" height="173" src="https://www.youtube.com/embed/khbCNFrpGP8?si=_8pXpvjywyIyLY9L" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <p class="title">Die viralsten Foodspots in NY testen</p><p class="source">YouTube</p>
        </div>
    </div>
</section>

<section id="Entertainment">
    <h3>🍿 Entertainment</h3>
    <div class="iframe-container">
        <div class="iframe-item">
            <?php
            $ya=new YouVideo('Squid Game 2', "1GqzyjUbT4c?si=cmqO1QiMF4CKe8o6");
            echo $ya->getCode();
            echo $ya->getName();
            ?>
        </div>

        <div class="iframe-item">
            <?php
            $ya=new YouVideo('Minecraft', "DoXq3XlJlKA?si=g5Pw5vYMCW_-RvGl");
            echo $ya->getCode();
            echo $ya->getName();
            ?>
        </div>

        <div class="iframe-item">
            <?php
            $ya=new YouVideo('Joker 2', "Zu80Gz4fdwA?si=VBKf6S3DIyb-qYzg");
            echo $ya->getCode();
            echo $ya->getName();
            ?>
        </div>

        <div class="iframe-item">
            <?php
            $ya=new YouVideo('Despicable 4', "LL9-TAFmwc0?si=FfO5xf-VtgM9Q6R-");
            echo $ya->getCode();
            echo $ya->getName();
            ?>
        </div>

        <div class="iframe-item">
            <?php
            $ya=new YouVideo('Ninjago Movie Trailer', "sV9b7lsULoQ?si=Xg0Z251DKLJopK8M");
            echo $ya->getCode();
            echo $ya->getName();
            ?>
        </div>
    </div>
</section>

<footer>
    <h3>© 2024 - 2025 DreamLabs Production</h3>
    <h4 >Laurens Vidan | Valentin Köberl</h4>
</footer>
</body>
</html>
