<!DOCTYPE php>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="A webpage to control and monitor the rotation of clan members in 5v5 Clan Wars in Clash of Clans for the clan Decimal8.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">    
        <title>Decimal8 Clan Wars Rotation</title>
        <link rel="icon" type="image/gif/png" href="./icon.png">
        <style>
            @font-face {
                font-family: supercellFonts;
                src: url(supercellmagic.ttf);
            }

            body, html {
                background-image: url("coc_electrodragon1.jpg");
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            * {
                box-sizing: border-box;
            }

            /* Position text in the middle of the page/image */
            .bg-text { /* From w3schools.com */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0, 0.8); /* Black w/opacity/see-through */
                color: white;
                border: 3px solid #f1f1f1;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                z-index: 2;
                width: 60%;
                padding: 20px;
                text-align: center;
                font-family: supercellFonts;
            }

            h1 {
                color: white;
                font-family: supercellFonts;
            }

            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #051f4d;
            }

            li {
                float: left;
            }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 20px;
                text-decoration: none;
            }

            li a:hover {
                background-color: #031330;
            }
        </style>
    </head>

    <div class="bg-text">
        <h1>Decimal8 Clan Wars Rotation Webpage</h1>
        <p>Rotation. Yes.</p>
    </div>

    <?php
        // Clash of Clans usernames
        $users = array("Sir Marabald", "Predator98", "Can", "King of Dams", "Abs3nt3", "Sir Marabuld");
    ?>

</html>