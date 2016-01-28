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
    "image" => "images/pfsys.png",
    "label" => "Groepsproject, Jaar 1",
    "shortText" => "Een systeem voor portfolio's",
    "longText" => "<p>Het project portfolio systeem was een groepsproject in het eerste jaar van de opleiding. Het omvatte het maken van een portfolio systeem waarop een student een portfolio bij kan houden. Dit bevat zowel opdrachten voor studieloopbaanbegeleiding als een showcase zoals dit.</p>"
    . "<p>Voor het project heb ik voornamelijk backend code gemaakt, waaronder het beoordelingssysteem voor materialen. Ook veel andere overzichten en admin functionaliteiten zijn door mij gemaakt. Eigenlijk heb ik wel aan alles gewerkt. Daarnaast heb ik dit showcase deel gemaakt, wat onderdeel was van de opdracht.</p>"];

$projectBot = ["name" => "Toekomstig project",
    "image" => "images/test-image.jpg",
    "label" => "Groepsproject, Jaar 1",
    "shortText" => "?",
    "longText" => "<p>Nog niet begonnen</p>"];


$projectsArray = [$projectPFS, $projectBot];

function prlink($name){
    return 'project.php?project=' . urlencode($name);
}
?>