<?php

if (isset($_GET['page']) && file_exists("./controller/controller_". $_GET['page'].".php") ) {
    $page = $_GET['page']; 
} else {
    $page='home'; 
}
$page = CONFIG_ROUTES[$page];

