<?php

if (isset($_GET['page']) && file_exists("./views/template_". $_GET['page'].".phtml") ) {
    $page = $_GET['page']; 
} else {
    $page='home'; 
}
$page = CONFIG_ROUTES[$page];

