<?php
/*
 * I've made mistakes, I'm just a man
 */
$projectDummy = ["name" => "PROJECT NAME",
    "image" => "images/test-image.jpg",
    "label" => "Type, Year",
    "shortText" => "SHORTTEXT",
    "longText" => "<p>LONGTEXT</p>"];

$projectPFS = ["name" => "Portfolio Systeem",
    "image" => "images/test-image.jpg",
    "label" => "Groepsproject, Jaar 1",
    "shortText" => "Een systeem voor portfolio's",
    "longText" => "<p>Het project portfolio systeem was een groepsproject in het eerste jaar van de opleiding. Het omvatte het maken van een portfolio systeem waarop een student een portfolio bij kan houden. Dit zijn zowel opdrachten voor studieloopbaanbegeleiding als een showcase zoals dit.</p>"
    . "<p>Voor het project heb ik voornamelijk backend code gemaakt, waaronder het beoordelingssysteem voor materialen. Ook veel andere overzichten en admin functionaliteiten zijn door mij gemaakt. Daarnaast heb ik dit showcase deel gemaakt, wat onderdeel was van de opdracht.</p>"];
$projectsArray = [$projectPFS, $projectDummy, $projectDummy, $projectDummy];

function prlink($name){
    return 'project.php?project=' . urlencode($name);
}
?>