<?php

require_once 'main.php';

if((isset($_GET['act'])) && ($_GET['act'] !="" )){
    $act= $_GET['act'];
    switch ($act) {
        case '':
            require_once "";

        default:
        require_once 'home.php';
            break;
    }
}else{
    require_once 'home.php';
}

require_once 'footer.php';
?>