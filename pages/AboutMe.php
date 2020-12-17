<style>

    main img {
        margin: 10px;
        box-shadow: 0 0 0 3px #fff, 0 0 0 4px #000;
        width: 45%;
        height: 180px;
        transition:transform 0.4s;
        cursor:pointer ;
    }

    main img:active {

        transform:scale(2) ;
    }
    h1, h2, h3, h4 {

        font-family: 'Open Sans Condensed', sans-serif;

    }

</style>

<div>
    <h1> ABOUT ME</h1>
<hr>
     <p>Hello, my name is Kostya, I'm <?php

        echo (new DateTime())->diff(new DateTime('2005-09-26 12:35:54'))->y;

        ?> years old, and I'm a beginner programmer who wants to learn how to create something useful. I'm going to put some random pictures of cats (because cats are awesome). </p>

    <img alt="cat" src="/data/pictures/cat1.jpg">
    <img alt="cat" src="/data/pictures/cat2.jpg">

    <p>
        From the very childhood I liked computers, and everything connected with them, after some moment,
        I realized that I want to start creating content, and not just consume it. In the
        <a href="/MyProjects" style="text-decoration: none" class="transitionblackred">My Projects</a>
        tab, you can view all my projects and examine my work. But creating isn't my only hobby, I'm
        also a big fan of cats, kittens, music, movies, and video games such as
        <a href="https://www.escapefromtarkov.com/" style="text-decoration: none" class="transitionblackred">Escape From Tarkov</a>.
        <br>
        <img src="/data/videos/TarkovGif.gif" alt="Tarkov Gif" style="z-index: 10;"/>
        <br>
        This GIF is an example of a typical Reshala's boy. </p>

</div>
