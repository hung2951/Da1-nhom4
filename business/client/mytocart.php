    <?php

    function mytocart(){
        $id = $_GET['id'];
        $sql = "select * from product where id_product = $id";
        $mytocart = executeQuery($sql);
        client_render('mytocart/index.php', [
            'mytocart' => $mytocart
        ]);
    }