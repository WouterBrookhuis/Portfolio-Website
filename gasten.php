<!DOCTYPE html>
<!--
TODO:
- Pagina's toevoegen
- Content home toevoegen
- DB spul?
-->
<html>
    <head>
        <title>Gastenboek - Wouter Brookhuis</title>
        <meta charset="UTF-8">
        <!-- Mobile phone 'support' -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="jquery-1.11.3.min.js"></script>
        <script src="menu.js"></script>
        <script src="header.js"></script>
        <script src="guestbook.js"></script>
    </head>
    <body>
        <?php 
        include 'inc/header.php';
        include 'inc/menu.php';
        ?>
        <div id="pageContent">
            <div id="content">
                <h1>Gastenboek</h1>
                <div id="guestbookForm">
                    <p>Plaats een nieuw bericht</p>
                    <p id="guestbookFormError"></p>
                    <p>Naam <input type="text" name="name"> Email <input type="email" name="mail"></p>
                    <p>Bericht<br><textarea rows="6" name="message"></textarea></p>
                    <p><button onclick="submitGuestbookForm()">Submit</button></p>
                </div>
                <hr>
                <div id="guestbook">
                    <!-- gastenboek berichten komen in deze div -->
                </div>
            </div>
        </div>
        <?php
        include 'inc/footer.php';
        ?>
    </body>
</html>
