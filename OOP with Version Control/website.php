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
            <?php
                $va=new Vimeo('Song','952618012?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479');
                echo $va->getCode();
                echo $va->getName();
            ?>
        </div>

        <div class="iframe-item">
            <?php
            $va=new Vimeo('Song','1017378873?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479');
            echo $va->getCode();
            echo $va->getName();
            ?>
        </div>

        <div class="iframe-item">
            <?php
            $va=new Vimeo('Song','1017378873?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479');
            echo $va->getCode();
            echo $va->getName();
            ?>
        </div>

        <div class="iframe-item">
            <?php
            $va=new Vimeo('Song','1017378873?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479');
            echo $va->getCode();
            echo $va->getName();
            ?>
        </div>

        <div class="iframe-item">
            <?php
            $va=new Vimeo('Song','1017378873?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479');
            echo $va->getCode();
            echo $va->getName();
            ?>
        </div>
    </div>
</section>

<section id="Journeys">
    <h3>📖 Journeys</h3>
    <div class="iframe-container">
        <div class="iframe-item">
            <?php
            $va=new Vimeo('Song','1017378873?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479');
            echo $va->getCode();
            echo $va->getName();
            ?>
        </div>

        <div class="iframe-item">
            <?php
            $va=new Vimeo('Song','1017378873?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479');
            echo $va->getCode();
            echo $va->getName();
            ?>
        </div>

        <div class="iframe-item">
            <?php
            $va=new Vimeo('Song','1017378873?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479');
            echo $va->getCode();
            echo $va->getName();
            ?>
        </div>

        <div class="iframe-item">
            <?php
            $va=new Vimeo('Song','1017378873?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479');
            echo $va->getCode();
            echo $va->getName();
            ?>
        </div>

        <div class="iframe-item">
            <?php
            $va=new Vimeo('Song','1017378873?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479');
            echo $va->getCode();
            echo $va->getName();
            ?>
        </div>
    </div>
</section>

<section id="Cooking">
    <h3>🧑‍🍳 Cooking</h3>
    <div class="iframe-container">
        <div class="iframe-item">
            <?php
            $va=new Vimeo('Song','952618012?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479');
            echo $va->getCode();
            echo $va->getName();
            ?>
        </div>

        <div class="iframe-item">
            <?php
            $va=new Vimeo('Song','952618012?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479');
            echo $va->getCode();
            echo $va->getName();
            ?>
        </div>

        <div class="iframe-item">
            <?php
            $va=new Vimeo('Song','952618012?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479');
            echo $va->getCode();
            echo $va->getName();
            ?>
        </div>

        <div class="iframe-item">
            <?php
            $va=new Vimeo('Song','952618012?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479');
            echo $va->getCode();
            echo $va->getName();
            ?>
        </div>

        <div class="iframe-item">
            <?php
            $va=new Vimeo('Song','952618012?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479');
            echo $va->getCode();
            echo $va->getName();
            ?>
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
