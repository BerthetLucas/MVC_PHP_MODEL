<?php

if (isset($_GET['page'])) {
    $page = $_GET['page']; 
    $template = CONFIG_ROUTES["$page"]; 
}


?>