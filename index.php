<!DOCTYPE html>
<!--
TODO:
- Pagina's toevoegen
- Content home toevoegen
- DB spul?
-->
<html>
    <head>
        <title>Portfolio - Wouter Brookhuis</title>
        <meta charset="UTF-8">
        <!-- Mobile phone 'support' -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="jquery-1.11.3.min.js"></script>
        <script src="menu.js"></script>
        <script src="projectboxes.js"></script>
        <script src="header.js"></script>
    </head>
    <body>
        <?php 
        include 'inc/header.php';
        include 'inc/menu.php';
        ?>
        <div id="pageContent">
            <div id="content">
                <h1>Portfolio van Wouter Brookhuis</h1>
                <p>Welkom op mijn portfolio.</p>
                
                <div id="projects">
                    <?php
                    for($i = 0; $i < 4; $i++)
                    {?>
                    <div class="projectBox">
                        <h3>Portfolio Systeem</h3>
                        <img src="images/test-image.png" alt="test image">
                        <p>Korte beschrijving van project, welke ook best lang kan zijn</p>
                    </div>
                    <div class="projectBox">
                        <h3>Portfolio</h3>
                        <img src="images/test-image.jpg" alt="test image">
                        <p>Korte beschrijving van project</p>
                    </div>
                    <?php
                    }
                    ?>
                    <div id="projectBoxClear"></div>
                </div>
                
            </div>
        </div>
        <?php
        include 'inc/footer.php';
        ?>
    </body>
</html>
