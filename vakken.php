<?php
include_once 'inc/pfmanage.php';
?>
<!DOCTYPE html>
<!--
TODO:
- Pagina's toevoegen
- Content home toevoegen
- DB spul?
-->
<html>
    <head>
        <title>Vakken - Wouter Brookhuis</title>
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
                <h1>Vakken</h1>
                <h3>Op Stenden heb ik de volgende vakken gevolgd</h3>
                <p>(X)HTML & CSS</p>
                <p>PHP</p>
                <p>Databases</p>
                <p>Digital Graphics Design</p>
                <p>Informatiemanagement</p>
                <p>Mondelinge Communicatie</p>
            </div>
        </div>
        <?php
        include 'inc/footer.php';
        ?>
    </body>
</html>
