<?php
/*
Grupp 5 - Invictus Watches 
Management med IT
Webbprogrammeringens grunder
Södetörns Högskola 
2016-01-08
*/
//Loggar ut användaren
session_start();
session_destroy();
header ("Location: index.php");
?>