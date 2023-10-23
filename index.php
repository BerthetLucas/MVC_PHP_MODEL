<?php 
// Fichier de config
require("./config.php"); 
// Fichier routeur
require("./router.php"); 
 
// Chargement du controller
require "./controller/controller_$page.php"; 

// Chargement de la vue 
include("./views/layout.phtml");
?>