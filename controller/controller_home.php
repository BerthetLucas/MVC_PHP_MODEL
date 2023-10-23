<?php

$db = connectDB(); 
$sql = $db-> prepare("SELECT * FROM user"); 
$sql-> execute(); 
$results = $sql ->fetchAll(PDO::FETCH_ASSOC); 


include("./views/layout.phtml");