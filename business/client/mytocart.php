    <?php

    function mytocart(){
        $id = $_GET['id'];
        $sql = "select * from cart where id_product = $id";
        $mytocart = executeQuery($sql);
        client_render('mytocart/index.php', [
            'mytocart' => $mytocart
        ]);
    }