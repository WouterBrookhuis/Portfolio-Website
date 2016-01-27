<!DOCTYPE html>
<!--
TODO:
- Pagina's toevoegen
- Content home toevoegen
- DB spul?
-->
<html>
    <head>
        <title>Over - Wouter Brookhuis</title>
        <meta charset="UTF-8">
        <!-- Mobile phone 'support' -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/menu.js"></script>
        <script src="js/header.js"></script>
    </head>
    <body>
        <?php 
        include 'inc/header.php';
        include 'inc/menu.php';
        ?>
        <div id="pageContent">
            <div id="content">
                <h1>Over</h1>
                <div id="aboutTextArea">
                    <p>Mijn naam is Wouter Brookhuis. Ik ben een 18 jarige student informatica aan de Stenden Hogeschool.
                        Ik ben in 2015 aan deze opleiding begonnen en projecten waar ik aan gewerkt heb zijn op deze site te vinden.</p>

                    <p>Meer weten? Hier kan je
                    <?php
                    $cvLink = file_get_contents("http://ons-portfolio.nl/getmaterial.php?material=31");
                    echo '<a href="http://ons-portfolio.nl/' . $cvLink . '">mijn cv downloaden.</a>';
                    ?>
                    </p>
                </div>
            </div>
        </div>
        <?php
        include 'inc/footer.php';
        ?>
    </body>
</html>
