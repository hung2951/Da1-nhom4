<?php

function admin_render($viewpath, $data = [], $jsFiles = []){

    extract($data);
    $businessView = "./views/admin/" . $viewpath;
    include_once './views/admin/layouts/main.php';
}
function client_render($viewpath, $data = [],$jsFiles = []){

    extract($data);
    $businessClientView = "./views/client/" . $viewpath;
    include_once './views/client/layouts/main.php';
}

function category(){
    $sql = " SELECT * FROM brand ORDER BY id_brand";
    $data=executeQuery($sql);
    return $data;
}
function dd(){
    echo "<pre>";
    $args = func_get_args();
    foreach($args as $item){
        var_dump($item);
    }
    
    echo "</pre>";
    die;
}

?>