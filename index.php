<!DOCTYPE html>
<html>
<head lang="EN">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/styles/cssnorm.css">
    <link rel="stylesheet" type="text/css" href="/styles/style.css">

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
            echo file_get_contents("pages/MyProjects.html");
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





<footer>

    <a class="up" href="https://github.com/krvvko">
        <img src="/data/pictures/iconfinder_Github.svg" width="55"></a>
    <a class="up" href="https://www.youtube.com/channel/UCse1yKfPXvG6phJXWys-8kw?view_as=subscriber">
        <img src="/data/pictures/iconfinder_Youtube.svg" width="70"></a>
    <a class="up" href="https://www.instagram.com/krvvko/">
        <img src="/data/pictures/iconfinder_instagram.svg" width="55"></a>
    <a class="up" href="https://steamcommunity.com/id/krvvko/">
        <img src="/data/pictures/steam_logo.svg" width="55"></a>
</footer>


</body>
</html>