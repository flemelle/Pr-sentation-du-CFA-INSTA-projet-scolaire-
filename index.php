<!DOCTYPE html>
<?php
    include ('db/PDO.php');    
?>
<html>
    <head>
        <title>Projet programmation</title>
        <link rel ='stylesheet' href ="css/style.css"/>
        <link rel = 'icon' href = 'img/favicon.ico' type = 'image/x-icon'/>
        <meta charset = utf-8/>
    </head>
    <body>
        <?php
            include ('header.php');
        ?>
        <h2 class = 'blueTitle'>Projet de programmation</h2>
        <section id = 'accueil'>
            <div id ='container-view'>
                <button id = 'previous'>
                    ◀
                </button>
                <div id = 'container-carousel'>
                    <div id ='carousel'>
                        <ul>
                            <li>
                                <a href = 'https://cfa-insta.fr/' target='_blank'>
                                    <div id = 'view' style = "background-image: url('img/CFAINSTA_Location.png');">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href = 'https://www.google.com/maps/place/12+Rue+de+Cl%C3%A9ry,+75002+Paris' target='_blank'>
                                    <div id = 'view' style = "background-image: url('img/Logo-CFAINSTA.png');">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href = 'team.php' target='_blank'>
                                    <div id = 'view' style = "background-image: url('img/Adam.jpg');">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href = 'team.php' target='_blank'>
                                    <div id = 'view' style = "background-image: url('img/Lyes.jpg');">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href = 'team.php' target='_blank'>
                                    <div id = 'view' style = "background-image: url('img/Ryad.jpg');">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href = 'team.php' target='_blank'>
                                    <div id = 'view' style = "background-image: url('img/Tiphereth.png');">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <button id = 'next'>
                    ▶
                </button>
            </div>
        </section>
        <script src = 'js/script.js' type='text/javascript'></script> 
        <?
            include('footer.php');
        ?>
    </body>
</html>