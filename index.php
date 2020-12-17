<!DOCTYPE html>
<html lang="en">
<head lang="EN">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/styles/cssnorm.css">
    <link rel="stylesheet" type="text/css" href="/styles/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="icon" href="/favicon.png" type="image/png">

    <style>



    </style>
    <title>

        <?php

        switch ($_SERVER ["REQUEST_URI"]) {

            case "/AboutMe":
                echo "About Me";
                break;

            case "/MyProjects":
                echo "My Projects";
                break;

            case "/":
                echo "Home";
                break;

            default:
                echo "404 not found";
                break;

        }


        ?> - krvvko

    </title>


</head>
<body>


<header>


    <a href="/" class="Logo"></a>
    <a href="/MyProjects" class="<?= $_SERVER['REQUEST_URI'] === '/MyProjects' ? 'active' : '' ?> AboutMe">MY PROJECTS</a>

    <a href="/AboutMe" class="<?= $_SERVER['REQUEST_URI'] === '/AboutMe' ? 'active' : '' ?> AboutMe">ABOUT ME</a>
    <a href="/" class="<?= $_SERVER['REQUEST_URI'] === '/' ? 'active' : '' ?> AboutMe">HOME</a>

</header>

<main>
    <?php

    switch ($_SERVER ["REQUEST_URI"]) {

        case "/AboutMe":
            require("pages/AboutMe.php");
            break;

        case "/MyProjects":
            require ("pages/MyProjects.php");
            break;

        case "/":
            echo file_get_contents("pages/Index.html");
            break;

        default:
            echo file_get_contents("pages/netnetnet.html");
            break;

    }


    ?>
</main>

<br>
<br>
<br>
<br>
<footer>

    <div style="text-align: center; position: relative; top: -21px; "><span style="background-color: white; padding: 0 10px; z-index: 4;">contact me</span></div>

    <div style=" display: flex; align-items: center; justify-content: center; bottom: 0;width: 100%;height: 60px;padding: 10px 0;margin-top: -30px;">
    <a class="up" href="https://github.com/krvvko">
        <img src="/data/pictures/iconfinder_Github.svg" width="28" alt="github"></a>
    <a class="up" href="https://www.youtube.com/channel/UCse1yKfPXvG6phJXWys-8kw?view_as=subscriber">
        <img src="/data/pictures/iconfinder_Youtube.svg" width="36" alt="youtube"></a>
    <a class="up" href="https://www.instagram.com/krvvko/">
        <img src="/data/pictures/iconfinder_instagram.svg" width="28" alt="instagram"></a>
    <a class="up" href="https://steamcommunity.com/id/krvvko/">
        <img src="/data/pictures/steam_logo.svg" width="28" alt="steam"></a>
    </div>
</footer>


</body>
</html>