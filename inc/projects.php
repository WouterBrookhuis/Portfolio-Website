<?php
$projectDummy = ["name" => "PROJECT NAME",
    "image" => "images/test-image.jpg",
    "shortText" => "SHORTTEXT",
    "longText" => "<p>LONGTEXT</p>"];
$projectPFS = ["name" => "Portfolio Systeem",
    "image" => "images/test-image.jpg",
    "shortText" => "Een systeem voor portfolio's",
    "longText" => "<p>Het project portfolio systeem...</p><p>Paragraaf 2</p>"];
$projectsArray = [$projectPFS, $projectDummy, $projectDummy, $projectDummy];

function prlink($name){
    return 'project.php?project=' . urlencode($name);
}
?>