<?php
include_once 'inc/projects.php';
$project = null;
$projectData = null;
if(isset($_GET['project'])){
    $project = filter_input(INPUT_GET, 'project', FILTER_SANITIZE_STRING);
    //I'm sorry
    foreach($projectsArray as $pja){
        if($pja['name'] === $project){
            $projectData = $pja;
        }
    }
}
?>
<!DOCTYPE html>
<!--
TODO: Content toevoegen

-->
<html>
    <head>
        <title>Portfolio Systeem - Wouter Brookhuis</title>
        <meta charset="UTF-8">
        <!-- Mobile phone 'support' -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="jquery-1.11.3.min.js"></script>
        <script src="menu.js"></script>
        <script src="header.js"></script>
    </head>
    <body>
        <?php 
        include 'inc/header.php';
        include 'inc/menu.php';
        ?>
        <div id="pageContent">
            <div id="content">
                <?php
                if($projectData){
                    echo '<h1>' . $projectData['name'] . '</h1>';
                    echo '<img src="' . $projectData['image'] . '" alt="project image">';
                    echo $projectData['longText'];
                }else{
                    echo '<p>Project niet gevonden</p>';
                }
                ?>
            </div>
        </div>
        <?php
        include 'inc/footer.php';
        ?>
    </body>
</html>
