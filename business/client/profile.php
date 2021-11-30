<?php
    function select_user(){
        $id = $_GET['id'];
        $sql = "select * from user where id_user = $id";
        $user = executeQuery($sql,false);
        client_render('profile/index.php',[
            'u' => $user
        ]);
    }
    function save_update_user(){
        
    }

?>