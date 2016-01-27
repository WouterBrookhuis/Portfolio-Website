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
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/menu.js"></script>
        <script src="js/header.js"></script>
        <script src="js/projectboxes.js"></script>
    </head>
    <body>
        <?php 
        include 'inc/header.php';
        include 'inc/menu.php';
        ?>
        <div id="pageContent">
            <div id="content">              
                <div id="projects">
                    <?php
                    for($i = 0; $i < count($projectsArray); $i++){
                        echo '<a href="' . prlink($projectsArray[$i]['name']) . '">';
                            echo '<div class="projectBox">';
                                echo '<h3>' . $projectsArray[$i]['name'] . '</h3>';
                                echo '<img src="' . $projectsArray[$i]['image'] . '" alt="test image">';
                                echo '<p>' . $projectsArray[$i]['shortText'] . '</p>';
                            echo '</div>';
                        echo '</a>';
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
